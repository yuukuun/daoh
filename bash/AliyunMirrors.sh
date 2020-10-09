#!/bin/bash
#install aliyun mirrors centos 7

cd  /etc/yum.repos.d/ && tar -zcvf yum.bak CentOS-* && rm -rf CentOS-*
wget  http://mirrors.aliyun.com/repo/Centos-7.repo && mv Centos-7.repo CentOs-Base.repo
yum clean all && yum makecache