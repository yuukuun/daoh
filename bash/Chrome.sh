#!/bin/bash
#install chrome

if [[ -f /etc/redhat-release ]]; then
	cat > /etc/yum.repos.d/google-chrome.repo <<-EOP
	[google-chrome]
	name=google-chrome
	baseurl=http://dl.google.com/linux/chrome/rpm/stable/x86_64
	enabled=1
	gpgcheck=1
	gpgkey=https://dl.google.com/linux/linux_signing_key.pub
	EOP
	yum -y install google-chrome-stable --nogpgcheck
elif [[ -f /etc/lsb-release ]];then 
	wget http://www.linuxidc.com/files/repo/google-chrome.list -P /etc/apt/sources.list.d/
	wget -q -O - https://dl.google.com/linux/linux_signing_key.pub  | sudo apt-key add -
	apt-get update -y
	apt-get install google-chrome-stable -y
else
    echo "##### install chrome error !!! #####"
fi

