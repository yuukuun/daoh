#!/bin/bash
read -p "客户端，请输入域名:" url 
# The files installed by the script conform to the Filesystem Hierarchy Standard:
# https://wiki.linuxfoundation.org/lsb/fhs



###################################################

cat >/usr/local/etc/v2ray/config.json<<-EOF
{
  "inbounds": [
    {
      "port": 1080,
      "listen": "127.0.0.1",
      "protocol": "socks",
      "sniffing": {
        "enabled": true,
        "destOverride": ["http", "tls"]
      },
      "settings": {
        "auth": "noauth",
        "udp": false
      }
    }
  ],
  "outbounds": [
    {
      "protocol": "vmess",
      "settings": {
        "vnext": [
          {
            "address": "$url",
            "port": 443,
            "users": [
              {
                "id": "621b99bc-1230-4f20-8438-04ff5f1edd8f",
                "alterId": 64
              }
            ]
          }
        ]
      },
      "streamSettings": {
        "network": "ws",
        "security": "tls",
        "wsSettings": {
          "path": "/7ba8"
        }
      }
    }
  ]
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