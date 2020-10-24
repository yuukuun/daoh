#!/bin/bash
### centos 7 centos8 

read -p "请输入域名：" urls
read -p "请输入邮箱：" emails
export urls
export emails


function centos7() {
### 初始化 epel-release### 
yum remove -y epel-release
yum install -y epel-release
yum install -y yum-utils certbot python2-certbot-nginx 
certbot certonly --webroot -w /usr/local/nginx/html/ -d $urls -m $emails --agree-tos -n  ###--test-cert测试 -n后台
php_config=$(cat<<-EOF
location ~ .php\$ {
        try_files \$uri =404;
        root /usr/local/nginx/$urls/;
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        include fastcgi.conf;
        }
EOF
)
}

function centos8() {
### 初始化 epel-release### 
dnf remove -y epel-release
dnf install -y epel-release
dnf install -y certbot python3-certbot-nginx
certbot certonly --webroot -w /usr/local/nginx/html/ -d $urls -m $emails --agree-tos -n  ###--test-cert测试 -n后台
php_config=$(cat<<-EOF
location ~ \.php\$ {
        try_files \$uri =404;
        fastcgi_pass unix:/run/php-fpm/www.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        include fastcgi_params;
        }
EOF
)
}


temp=$(cat /etc/redhat-release)
if [[ "$temp" == "CentOS Linux release 7"* ]]; then
  centos7
elif [[ "$temp" == "CentOS Linux release 8"* ]]; then
  centos8
else
     echo "##### Certbot error !!! #####"
fi



cat >/usr/local/nginx/conf.d/$urls.conf<<-EOF
server {
    listen       80;
    server_name $urls;
    root /usr/local/nginx/$urls/;
    index index.php index.html;
    $php_config 
    rewrite ^(.*)$  https://$host$1 permanent;
}
server {
    listen 443 ssl http2;
    server_name $urls;
    root /usr/local/nginx/$urls/;
    index index.php index.html;
    ssl_certificate  /etc/letsencrypt/live/$urls/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/$urls/privkey.pem;
    #TLS 版本控制
    ssl_protocols   TLSv1 TLSv1.1 TLSv1.2 TLSv1.3;
    ssl_ciphers     'TLS13-AES-256-GCM-SHA384:TLS13-CHACHA20-POLY1305-SHA256:TLS13-AES-128-GCM-SHA256:TLS13-AES-128-CCM-8-SHA256:TLS13-AES-128-CCM-SHA256:EECDH+CHACHA20:EECDH+CHACHA20-draft:EECDH+ECDSA+AES128:EECDH+aRSA+AES128:RSA+AES128:EECDH+ECDSA+AES256:EECDH+aRSA+AES256:RSA+AES256:EECDH+ECDSA+3DES:EECDH+aRSA+3DES:RSA+3DES:!MD5';
    ssl_prefer_server_ciphers   on;
    # 开启 1.3 0-RTT
    ssl_early_data  on;
    ssl_stapling on;
    ssl_stapling_verify on;
    #add_header Strict-Transport-Security "max-age=31536000";
    #access_log /var/log/nginx/access.log combined;
    $php_config 
    location /7ba7 {
        proxy_redirect off;
        proxy_pass http://127.0.0.1:11234;
        proxy_http_version 1.1;
        proxy_set_header Upgrade \$http_upgrade;
        proxy_set_header Connection "upgrade";
        proxy_set_header Host \$http_host;
    }
    location / {
       try_files \$uri \$uri/ /index.php?\$args;
    }
}
EOF

mkdir /usr/local/nginx/$urls
cp -r /usr/local/nginx/html/* /usr/local/nginx/$urls/

/usr/local/nginx/sbin/nginx -t
/usr/local/nginx/sbin/nginx -s reload
systemctl restart nginx.service
systemctl status nginx.service

echo '10 4 * * 2 /usr/bin/certbot renew --dry-run "/usr/local/nginx/sbin/nginx -s reload"' >> /var/spool/cron/root
