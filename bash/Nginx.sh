#!/bin/bash
#install nginx-1.18.0 (Centso7 Centos 8 OK)


###判断 7 或 8
temp=$(cat /etc/redhat-release)
if [[ "$temp" == "CentOS Linux release 8"* ]]; then
dnf remove -y epel-release
dnf install -y epel-release
dnf install -y certbot python3-certbot-nginx
elif [[ "$temp" == "CentOS Linux release 7"* ]]; then
### 初始化 ### 
yum remove -y epel-release
yum install -y epel-release
yum install -y yum-utils certbot python2-certbot-nginx 
else
     echo "##### Certbot error !!! #####"
fi



mkdir -p /usr/local/nginx/ssl /usr/local/nginx/conf.d
sed -i 's/=enforcing/=disabled/g' /etc/selinux/config
yum install -y gcc gcc-c++ vim libtool zip perl-core zlib-devel wget pcre* unzip automake autoconf make curl
### 编译安装 ### 
cd /tmp
wget https://www.openssl.org/source/openssl-1.1.1a.tar.gz && tar xzvf openssl-1.1.1a.tar.gz 
#wget https://nginx.org/download/nginx-1.15.8.tar.gz && tar xf nginx-1.15.8.tar.gz && rm nginx-1.15.8.tar.gz
wget http://nginx.org/download/nginx-1.18.0.tar.gz && tar xf nginx-1.18.0.tar.gz && rm nginx-1.18.0.tar.gz
cd nginx-1.18.0
./configure --prefix=/usr/local/nginx --with-openssl=../openssl-1.1.1a --with-openssl-opt='enable-tls1_3' \
--with-http_v2_module --with-http_ssl_module --with-http_gzip_static_module --with-http_stub_status_module \
--with-http_sub_module --with-stream --with-stream_ssl_module && make && make install
###nginx配置##


rm -rf /usr/local/nginx/conf/nginx.conf
temp=$(cat /etc/redhat-release)
if [[ "$temp" == "CentOS Linux release 8"* ]]; then
wget -c "$sources"bash/nginx8.conf -O /usr/local/nginx/conf/nginx.conf 

elif [[ "$temp" == "CentOS Linux release 7"* ]];then
wget -P /usr/local/nginx/conf/ "$sources"bash/nginx.conf

else
    echo "##### Vhost error !!! #####"
fi



###nginx 启动###
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

systemctl start firewalld.service
firewall-cmd --add-service=http
firewall-cmd --add-service=https
firewall-cmd --add-port=19631/tcp
firewall-cmd --runtime-to-permanent
firewall-cmd --reload 
systemctl enable firewalld.service

/usr/local/nginx/sbin/nginx -t
/usr/local/nginx/sbin/nginx -s reload
systemctl restart nginx.service
systemctl enable nginx.service