#!/bin/bash
### centos8 centos7 ubuntu20 ubuntu18

cd /tmp
### 初始化 ### 
#read -p "请输入域名：" url
mkdir -p /usr/local/nginx/conf.d
sed -i 's/=enforcing/=disabled/g' /etc/selinux/config
#判断是否redhat系列
if [[ -f /etc/redhat-release ]]; then
    systemctl start firewalld
    firewall-cmd --add-service=http
    firewall-cmd --add-service=https
    firewall-cmd --runtime-to-permanent
    firewall-cmd --reload
    systemctl enable firewalld 
    systemctl stop firewalld
yum install -y gcc gcc-c++ vim libtool zip perl-core zlib-devel wget pcre* unzip automake autoconf make curl
#判断是否ubuntu系列
elif [[ -f /etc/lsb-release ]];then 
    apt-get update 
    apt-get install curl gcc zip vim wget unzip build-essential libtool zlib1g-dev libpcre3 libpcre3-dev libssl-dev automake autoconf make -y
    wget http://www.cpan.org/src/5.0/perl-5.26.1.tar.gz
    tar -xzf perl-5.26.1.tar.gz
    cd perl-5.26.1
    mkdir /usr/local/perl
    ./Configure -des -Dprefix=/usr/local/perl
    make && make install
else
    echo "###################### install nginx error ... ######################"
fi
 
### 开始安装 nginx
cd /tmp
wget https://www.openssl.org/source/openssl-1.1.1a.tar.gz
tar xzvf openssl-1.1.1a.tar.gz 
#wget https://nginx.org/download/nginx-1.15.8.tar.gz && tar xf nginx-1.15.8.tar.gz && rm nginx-1.15.8.tar.gz && cd nginx-1.15.8
wget https://nginx.org/download/nginx-1.18.0.tar.gz && tar xf nginx-1.18.0.tar.gz && rm nginx-1.18.0.tar.gz && cd nginx-1.18.0
./configure --prefix=/usr/local/nginx --with-openssl=../openssl-1.1.1a --with-openssl-opt='enable-tls1_3' \
--with-http_v2_module --with-http_ssl_module --with-http_gzip_static_module --with-http_stub_status_module \
--with-http_sub_module --with-stream --with-stream_ssl_module
make && make install
##################################################################################
### nginx配置
temp=$(cat /etc/redhat-release)
if [[ "$temp" == "CentOS Linux release 7"* ]]; then
php_config=$(cat<<-EOF
location ~ .php\$ {
        try_files \$uri =404;
        root /usr/local/nginx/html/;
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        include fastcgi.conf;
        }
EOF
)
######### centos 7
elif [[ "$temp" == "CentOS Linux release 8"* ]];then
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
else
    echo "##### nginx conf error !!! #####"
fi
##################################################################################
###php 配置
cat >/usr/local/nginx/conf/nginx.conf <<-EOF
user  root;
worker_processes  1;
error_log  /usr/local/nginx/logs/error.log warn;
pid        /usr/local/nginx/logs/nginx.pid;
events {
    worker_connections  1024;
}
http {
    include       /usr/local/nginx/conf/mime.types;
    default_type  application/octet-stream;
    log_format  main  '\$remote_addr - \$remote_user [\$time_local] "\$request" '
                      '\$status \$body_bytes_sent "\$http_referer" '
                      '"\$http_user_agent" "\$http_x_forwarded_for"';
    access_log  /usr/local/nginx/logs/access.log  main;
    sendfile        on;
    #tcp_nopush     on;
    keepalive_timeout  120;
    client_max_body_size 20m;
    #gzip  on;
    server { 
      listen       80;
      server_name  default;
      root /usr/local/nginx/html/;
      index index.php index.html;
      #rewrite ^(.*)$  https://\$host\$1 permanent; 
      $php_config 
    } 
    include /usr/local/nginx/conf.d/*.conf;  
}
EOF
###nginx 启动
cat >/etc/systemd/system/nginx.service<<-EOF
[Unit]
Description=nginx
After=network.target
[Service]
Type=forking
ExecStart=/usr/local/nginx/sbin/nginx
ExecReload=/usr/local/nginx/sbin/nginx -s reload
ExecStop=/usr/local/nginx/sbin/nginx -s quit
PrivateTmp=true
[Install]
WantedBy=multi-user.target
EOF

systemctl start nginx.service
systemctl enable nginx.service
systemctl status nginx.service
/usr/local/nginx/sbin/nginx -t