#!/bin/bash
### centos 7
cat >/etc/yum.repos.d/Mariadb.repo<<-EOF
# MariaDB 10.1 CentOS repository list - created 2016-12-01 03:36 UTC
# http://downloads.mariadb.org/mariadb/repositories/
[mariadb]
name = MariaDB
baseurl = http://yum.mariadb.org/10.1/centos74-amd64
gpgkey=https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
gpgcheck=1
EOF

#安装：
yum -y install MariaDB-server MariaDB-client
#启动：
systemctl start mysql.service
systemctl status mysql.service
#配置：
mysql_secure_installation
