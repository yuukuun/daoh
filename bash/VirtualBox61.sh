#!/bin/bash

cat >/etc/apt/sources.list.d/virtualbox.list<<-EOF
deb [arch=amd64] https://download.virtualbox.org/virtualbox/debian bionic contrib
EOF

wget -q https://www.virtualbox.org/download/oracle_vbox_2016.asc -O- | sudo apt-key add -
wget -q https://www.virtualbox.org/download/oracle_vbox.asc -O- | sudo apt-key add -

apt-get update
apt-get install virtualbox-6.1

#扩展包安装
echo "扩展包安装: https://www.virtualbox.org/wiki/Downloads"
