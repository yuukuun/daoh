#!/bin/bash
#install php73 (Centso7 Centos 8 OK)

systemctl start firewalld.service   
firewall-cmd --add-service=http   
firewall-cmd --add-service=https   
firewall-cmd --add-port=19631/tcp   
firewall-cmd --runtime-to-permanent
firewall-cmd --reload 
systemctl enable firewalld.service   
useradd nginx
usermod -G nginx nginx

######### centos 8
temp=$(cat /etc/redhat-release)
if [[ "$temp" == "CentOS Linux release 8"* ]]; then
dnf install -y dnf-utils http://rpms.remirepo.net/enterprise/remi-release-8.rpm
dnf module -y reset php  #重置php模块
dnf module -y enable php:remi-7.3  #默认设置为remi-7.3版本
yum -y install php php-mysqlnd php-gd php-xml php-mbstring php-ldap php-pear php-xmlrpc php-zip
sed -i 's/user = apache/user = nginx/' /etc/php-fpm.d/www.conf  
sed -i 's/group = apache/group = nginx/' /etc/php-fpm.d/www.conf 
sed -i 's/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/'  /etc/php.ini

systemctl restart php-fpm ###启动
systemctl status php-fpm ###检查状
systemctl enable php-fpm ###自启动

######### centos 7
elif [[ "$temp" == "CentOS Linux release 7"* ]];then
### php73装备： ###
yum install -y epel-release    ### 安装EPEL源
yum install -y http://rpms.remirepo.net/enterprise/remi-release-7.rpm    ### 安装REMI源
yum install -y yum-utils    ### yum 源管理工具
# php73安装： 
yum install -y php73-php-fpm php73-php-cli php73-php-bcmath php73-php-gd php73-php-json php73-php-mbstring \
php73-php-mcrypt php73-php-mysqlnd php73-php-opcache php73-php-pdo php73-php-pecl-crypto php73-php-pecl-mcrypt \
php73-php-pecl-geoip php73-php-recode php73-php-snmp php73-php-soap php73-php-xmll
# php73启动： 
systemctl start php73-php-fpm ###启动
systemctl status php73-php-fpm ###检查状
systemctl enable php73-php-fpm ###自启动

### php73设置： ###
rpm -qa | grep 'php'
rpm -ql php73-php-fpm-7.3.6-1.el7.remi.x86_64
find /etc/opt/remi/php73 -name php.ini
sed -i 's/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/' /etc/opt/remi/php73/php.ini



sed -i 's/user = apache/user = nginx/' /etc/opt/remi/php73/php-fpm.d/www.conf    
sed -i 's/group = apache/group = nginx/' /etc/opt/remi/php73/php-fpm.d/www.conf    



systemctl status php73-php-fpm ###检查状
systemctl restart php73-php-fpm ###启动
else
    echo "##### PHP73 error !!! #####"
fi



cat > /usr/local/nginx/html/index.php<<-EOF
<?php phpinfo(); ?>
EOF

/usr/local/nginx/sbin/nginx -t
/usr/local/nginx/sbin/nginx -s reload
systemctl restart nginx.service
systemctl enable nginx.service