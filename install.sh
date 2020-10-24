#!/bin/bash
# bash <(curl -L https://moru.gq/install.sh)
###环境变量 
sources='https://raw.githubusercontent.com/yuukuun/daoh/main/'
#sources='https://moru.gq/'
export sources
###安装
echo "1. install init"
echo "2. install Nginx"
echo "3. install PHP7.3 (centos 7 or centos 8)"
echo "4. install AddHost"
echo "5. install insMariaDB10_1.sh (centos 7)"

echo "6. install v2ray"
echo "101. install Chrome (ubuntu or centos)"
read -p "请选择数字：" key

case $key in
1) bash <(curl -L "$sources"shell/init.sh) ;;
2) bash <(curl -L "$sources"shell/insNginx.sh) ;;
3) bash <(curl -L "$sources"shell/insPHP73.sh) ;;
4) bash <(curl -L "$sources"shell/addHost.sh) ;;	#需要域名
5) bash <(curl -L "$sources"shell/insMariaDB10_1.sh) ;;

6) bash <(curl -L "$sources"shell/insV2ray.sh) ;;
101) bash <(curl -L "$sources"shell/insChrome.sh) ;;
*)	echo "输入错误!";;	
esac