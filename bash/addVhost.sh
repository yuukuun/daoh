#!/bin/bash
#install AddVohst (Centso7 Centos 8 OK)


read -p "请输入域名:" url
read -p "请输E-mail:" email

rm -rf /usr/local/nginx/conf.d/$url.conf
certbot certonly --webroot -w /usr/local/nginx/html/ -d $url -m $email --agree-tos -n ### --test-cert测试 -n后台
#0 4 * * * 2 /usr/bin/certbot renew --dry-run "/usr/local/nginx/sbin/nginx -s reload"

temp=$(cat /etc/redhat-release)
if [[ "$temp" == "CentOS Linux release 8"* ]]; then
wget -P /usr/local/nginx/conf.d/ "$sources"bash/nginxSSL8.conf
mv /usr/local/nginx/conf.d/nginxSSL8.conf /usr/local/nginx/conf.d/$url.conf
elif [[ "$temp" == "CentOS Linux release 7"* ]];then
wget -P /usr/local/nginx/conf.d/ "$sources"bash/nginxSSL.conf
# wget -P /usr/local/nginx/conf.d/ https://moru.gq/bash/nginxSSL.conf
mv /usr/local/nginx/conf.d/nginxSSL.conf /usr/local/nginx/conf.d/$url.conf
else
    echo "##### Vhost error !!! #####"
fi


mkdir /usr/local/nginx/$url
cp -r /usr/local/nginx/html/* /usr/local/nginx/$url/
sed -i "s%\$urls%$url%g" /usr/local/nginx/conf.d/$url.conf

/usr/local/nginx/sbin/nginx -t
/usr/local/nginx/sbin/nginx -s reload
# systemctl restart nginx.service


