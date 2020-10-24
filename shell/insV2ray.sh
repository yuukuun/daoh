#!/bin/bash
#install v2ray
bash <(curl -L https://raw.githubusercontent.com/v2fly/fhs-install-v2ray/master/install-release.sh)
uuid="621b99bc-1230-4f20-8438-04ff5f1edd8f"
#uuid="621b99bc-1230-4f20-8438-04ff5f1edd8f"
export uuid
export urls

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
            "port": 12345,
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
}

function v2rayClientWin() {
cd /usr/local/nginx/html/ 
wget -c https://raw.githubusercontent.com/yuukuun/daoh/main/soft/v2rayN-Core.zip && unzip v2rayN-Core.zip && rm -rf /usr/local/nginx/html/*.zip
cat >/usr/local/nginx/html/v2rayN-Core/guiNConfig.json<<-EOP
{
  "inbound": [
    {
      "localPort": 10808,
      "protocol": "socks",
      "udpEnabled": true,
      "sniffingEnabled": true
    }
  ],
  "logEnabled": false,
  "loglevel": "warning",
  "index": 0,
  "vmess": [
    {
      "configVersion": 2,
      "address": "$urls",
      "port": 443,
      "id": "$uuid",
      "alterId": 64,
      "security": "auto",
      "network": "ws",
      "remarks": "",
      "headerType": "none",
      "requestHost": "",
      "path": "/7ba7",
      "streamSecurity": "tls",
      "allowInsecure": "",
      "configType": 1,
      "testResult": "",
      "subid": ""
    }
  ],
  "muxEnabled": true,
  "domainStrategy": "IPIfNonMatch",
  "routingMode": "0",
  "useragent": [],
  "userdirect": [],
  "userblock": [],
  "kcpItem": {
    "mtu": 1350,
    "tti": 50,
    "uplinkCapacity": 12,
    "downlinkCapacity": 100,
    "congestion": false,
    "readBufferSize": 2,
    "writeBufferSize": 2
  },
  "listenerType": 2,
  "speedTestUrl": "http://speedtest-sgp1.digitalocean.com/10mb.test",
  "speedPingTestUrl": "https://www.google.com/generate_204",
  "urlGFWList": "https://raw.githubusercontent.com/gfwlist/gfwlist/master/gfwlist.txt",
  "allowLANConn": false,
  "enableStatistics": false,
  "keepOlderDedupl": false,
  "statisticsFreshRate": 2000,
  "remoteDNS": null,
  "defAllowInsecure": false,
  "subItem": [],
  "uiItem": {
    "mainSize": "968, 632",
    "mainLvColWidth": {
      "def": 30,
      "configType": 80,
      "remarks": 100,
      "address": 120,
      "port": 50,
      "security": 90,
      "network": 70,
      "subRemarks": 50,
      "testResult": 70
    }
  },
  "userPacRule": []
}
EOP
zip -r /usr/local/nginx/html/v2rayN-Core.zip v2rayN-Core/ && rm -rf v2rayN-Core
wget -c -P /usr/local/nginx/html/ https://raw.githubusercontent.com/yuukuun/daoh/main/soft/v2rayNG.apk
wget -c -P /usr/local/nginx/html/ https://raw.githubusercontent.com/yuukuun/daoh/main/lang/2020-10-17-v2ray-server/android_1.jpg
wget -c -P /usr/local/nginx/html/ https://raw.githubusercontent.com/yuukuun/daoh/main/lang/2020-10-17-v2ray-server/android_2.jpg
wget -c -P /usr/local/nginx/html/ https://raw.githubusercontent.com/yuukuun/daoh/main/lang/2020-10-17-v2ray-server/index.html
}


cp -r /usr/local/nginx/html/ /usr/local/nginx/$urls/
read -p "请输入域名：" urls
echo "1. v2ray服务端"
echo "2. v2ray客户端"


sed -i "s/baidu.com/$urls/g" /usr/local/nginx/html/index.html
sed -i "s/uuidx/$uuid/g" /usr/local/nginx/html/index.html

read -p "请择数字：" key
case $key in
1)	
v2rayServer
v2rayClientWin
;;
2)	
v2rayClient
;;
*)	echo "v2ray错误!"	;;	
esac

systemctl restart nginx.service
systemctl restart v2ray.service
systemctl enable v2ray.service
systemctl status v2ray.service