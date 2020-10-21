#!/bin/bash
# yum install -y wget && wget https://moru.gq/ins.sh && chmod +x ins.sh && ./ins.sh

# yum install -y wget && wget https://raw.githubusercontent.com/yuukuun/daoh/main/ins.sh && chmod +x ins.sh && ./ins.sh


###环境变量 
sources='https://raw.githubusercontent.com/yuukuun/daoh/main/'
# sources='https://moru.gq/'
export sources

echo "1. install Aliyun mirrors"
echo "2. install init"
echo "3. install nginx" 	
echo "4. install php7.3"
echo "5. install addVhost"	

echo "6. install NginxProxy (centos 7)"	
echo "7. install MariaDB 10.1"
echo "8. install v2fly Server"
echo "9. install v2fly Client"

echo "50. install Chrome (ubuntu or centos )"
echo "51. install TeamViewr (ubuntu)"


read -p "请选择安装的软件：" key
case $key in
1)	wget "$sources"bash/AliyunMirrors.sh && chmod +x *.sh && bash AliyunMirrors.sh 	;;
2)	wget "$sources"bash/init.sh && chmod +x *.sh && bash init.sh 	;;
3)	wget "$sources"bash/Nginx.sh && chmod +x *.sh && bash Nginx.sh 	;;
4)	wget "$sources"bash/PHP73.sh && chmod +x *.sh && bash PHP73.sh 	;;
5)	wget "$sources"bash/addVhost.sh && chmod +x *.sh && bash addVhost.sh 	;;

6)	wget "$sources"bash/NginxProxy.sh && chmod +x *.sh && bash NginxProxy.sh 	;;
7)	wget "$sources"bash/MariaDB.sh && chmod +x *.sh && bash MariaDB.sh 	;;
8)	
	wget "$sources"bash/install-release.sh && chmod +x *.sh && bash install-release.sh	
	wget "$sources"bash/v2flyServer.sh && chmod +x *.sh && bash v2flyServer.sh 	
;;
9)	
	wget "$sources"bash/install-release.sh && chmod +x *.sh && bash install-release.sh	
	wget "$sources"bash/v2flyClient.sh  && chmod +x *.sh && bash v2flyClient.sh 	
;;
50)	wget "$sources"bash/Chrome.sh && chmod +x *.sh && bash Chrome.sh 	;;
51)	wget "$sources"bash/teamViewr.sh && chmod +x *.sh && bash teamViewr.sh 	;;
*)	echo "输入错误!"	;;	
esac

