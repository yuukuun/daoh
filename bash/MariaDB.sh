#!/bin/bash
#install MariaDB10.1


temp=$(cat /etc/redhat-release)
#### 8
if [[ "$temp" == "CentOS Linux release 8"* ]]; then
yum install -y mariadb-server
systemctl start mariadb
systemctl enable mariadb

#### 7
elif [[ "$temp" == "CentOS Linux release 7"* ]];then
cat > /etc/yum.repos.d/Mariadb.repo<<-EOF
# MariaDB 10.1 CentOS repository list - created 2016-12-01 03:36 UTC
# http://downloads.mariadb.org/mariadb/repositories/
[mariadb]
name = MariaDB
baseurl = http://yum.mariadb.org/10.1/centos7-amd64
gpgkey=https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
gpgcheck=1
EOF

yum -y install MariaDB-server MariaDB-client
systemctl start mysql.service
systemctl status mysql.service


#### e
else
    echo "##### CentOS error !!! #####"
fi


mysql_secure_installation