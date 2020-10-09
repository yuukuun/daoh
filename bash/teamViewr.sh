#!/bin/bash
#install chrome

	#ubuntu
apt-get install gdebi-core -y
wget https://download.teamviewer.com/download/linux/teamviewer_amd64.deb
gdebi teamviewer_amd64.deb
# if [[ -f /etc/redhat-release ]]; then
# 	#centos

# elif [[ -f /etc/lsb-release ]];then 

# else
#     echo "##### install chrome teamviewer !!! #####"
# fi

