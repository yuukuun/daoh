#!/bin/bash


#config
cat >/usr/local/etc/v2ray/config.json<<-EOF
{
  "log" : {
    "access": "/var/log/v2ray/access.log",
    "error": "/var/log/v2ray/error.log",
    "loglevel": "warning"
  },
  "inbound": {
    "port": 11234,
    "listen":"127.0.0.1",
    "protocol": "vmess",
    "settings": {
      "clients": [
        {
          "id": "621b99bc-1230-4f20-8438-04ff5f1edd8f",
          "level": 1,
          "alterId": 64,
          "email": "akcp1234@gmail.com"
        }
      ]
    },
     "streamSettings": {
      "network": "ws",
      "wsSettings": {
         "path": "/7ba8"
        }
     }
  },
  "outbound": {
    "protocol": "freedom",
    "settings": {}
  }
}
EOF

systemctl start firewalld.service   
firewall-cmd --add-service=http   
firewall-cmd --add-service=https   
firewall-cmd --add-port=19631/tcp   
firewall-cmd --runtime-to-permanent
firewall-cmd --reload 
systemctl enable firewalld.service   

systemctl start v2ray.service
systemctl enable v2ray.service
systemctl status v2ray.service
