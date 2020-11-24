#!/bin/bash

#sources="https://moru.gq/"
#sources="https://raw.githubusercontent.com/yuukuun/daoh/main/"

#uuid="621b99bc-1230-4f20-8438-04ff5f1edd8f"
uuid=$(cat /proc/sys/kernel/random/uuid)
export uuid
export urls

rm -rf /usr/local/etc/v2ray/config.json
echo "1. v2ray服务端"
echo "2. v2ray客户端"
read -p "请择数字：" key
read -p "请输入域名：" urls

bash <(curl -L "$sources"shell/v2fly.sh) 


function v2rayServer() {
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
          "id": "$uuid",
          "level": 1,
          "alterId": 64,
          "email": "0@gmail.com"
        }
      ]
    },
     "streamSettings": {
      "network": "ws",
      "wsSettings": {
         "path": "/7ba7"
        }
     }
  },
  "outbound": {
    "protocol": "freedom",
    "settings": {}
  }
}
EOF
}

function v2rayClient() {
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
            "address": "$urls",
            "port": 443,
            "users": [
              {
                "id": "$uuid",
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
          "path": "/7ba7"
        }
      }
    }
  ]
}
EOF
sed -i "\$a\alias ytb='sudo /usr/local/bin/youtube-dl --proxy socks5://127.0.0.1:1080'" ~/.bashrc
}

case $key in
1)  
  v2rayServer
;;
2)  
  v2rayClient
;;
*)  
  echo "v2ray错误!" ;;  
esac

systemctl restart nginx.service
systemctl restart v2ray.service

systemctl status nginx.service
systemctl status v2ray.service

systemctl enable v2ray.service
systemctl enable nginx.service

rm -rf /etc/localtime
ln -s /usr/share/zoneinfo/Asia/Shanghai /etc/localtime
curl -L https://yt-dl.org/downloads/latest/youtube-dl -o /usr/local/bin/youtube-dl && chmod +x /usr/local/bin/youtube-dl