#由于一开始安装MariaDB数据库后, root用户默认密码为空, 所以只需要按Enter键
Enter current password for root (enter for none):
 
#是否设置root用户的新密码
Set root password? [Y/n] y
 
#录入新密码
New password:
 
#确认新密码
Re-enter new password:
 
#是否删除匿名用户,生产环境建议删除
Remove anonymous users? [Y/n] y
 
#是否禁止root远程登录,根据自己的需求选择
Disallow root login remotely? [Y/n] n
 
#是否删除test数据库
Remove test database and access to it? [Y/n] y
 
#是否重新加载权限表
Reload privilege tables now? [Y/n]
