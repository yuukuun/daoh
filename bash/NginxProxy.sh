#!/bin/bash
#install AddVohst (Centso7 Centos 8 OK)


read -p "请输入域名:" url
read -p "请输镜像的站点:" desurl
read -p "请输E-mail:" email

rm -rf /usr/local/nginx/conf.d/$url.conf
#certbot certonly --webroot -w /usr/local/nginx/html/ -d $url -m 0@yahoo.com --agree-tos --test-cert -n ### --test-cert测试 -n后台
certbot certonly --webroot -w /usr/local/nginx/html/ -d $url -m $email --agree-tos -n ### --test-cert测试 -n后台


temp=$(cat /etc/redhat-release)
if [[ "$temp" == "CentOS Linux release 8"* ]]; then
	wget -c "$sources"bash/nginxProxy8.conf -O /usr/local/nginx/conf.d/$url.conf
elif [[ "$temp" == "CentOS Linux release 7"* ]];then
	wget -c "$sources"bash/nginxProxy.conf -O /usr/local/nginx/conf.d/$url.conf
else
    echo "##### Nginx Proxy error !!! #####"
fi


mkdir /usr/local/nginx/$url
cp -r /usr/local/nginx/html/* /usr/local/nginx/$url/
sed -i "s%\$urls%$url%g" /usr/local/nginx/conf.d/$url.conf
sed -i "s%\$desurls%$desurl%g" /usr/local/nginx/conf.d/$url.conf


/usr/local/nginx/sbin/nginx -t
/usr/local/nginx/sbin/nginx -s reload
systemctl restart nginx.service


