#!/bin/bash
#install ssh
# read -p "INTER PORT NUM:" num


mkdir ~/.ssh 
cat >~/.ssh/authorized_keys<<-EOF

ssh-rsa AAAAB3NzaC1yc2EAAAABIwAAAQEA0h+dICB6nisyYEZ9WbgzUpUBH26uifvd0QZ5+OtfKUHDDa7RkXNWzafsIm4ulAzaGNk6e8Y0O9xmESaXzh/bqkEZE4uokjAP7lEalUFSWoKSPrIf3nymWbZeXtB8OjbH1O7ekfDyj842CLewo+Y2nK37f7qXpFC4snS27KS0kEuDDl3RFSRqo/cb/S03glQByxavfADqzJyYUYzFgVXBvNN2xVsVGDj1D2j1PAVSDuRt0lky4Uc8+nncjKqF9mB0/Fe8kAmblMB3ctJ8Wlyn1/E17cvomiLhkEToRO4WvvpxbHe5Ld3v+ahCFdJl6oghsBypQU/OQMCZdVrR2w5xtQ== root@host.localdomain
EOF
chmod 600 ~/.ssh/authorized_keys
sed -i "/Port/d" /etc/ssh/sshd_config
sed -i 's/PasswordAuthentication yes/PasswordAuthentication no/g' /etc/ssh/sshd_config
#sed -i "/PasswordAuthentication/a\Port 19631" /etc/ssh/sshd_config
sed -i "/PasswordAuthentication/a\Port 19631" /etc/ssh/sshd_config
sed -i "/PasswordAuthentication/a\Port 22" /etc/ssh/sshd_config


yum update -y
#yum install -y yum-utils rsync wget vim 
yum install -y rsync wget vim 

systemctl start firewalld.service   
firewall-cmd --add-service=http   
firewall-cmd --add-service=https   
firewall-cmd --add-port=19631/tcp   
firewall-cmd --runtime-to-permanent
firewall-cmd --reload 

systemctl enable firewalld.service 
systemctl restart sshd 
sysctl net.ipv4.tcp_available_congestion_control

shutdown -r now
