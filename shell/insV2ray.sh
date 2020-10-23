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
wget -c https://github.com/2dust/v2rayN/releases/download/3.26/v2rayN-Core.zip && unzip v2rayN-Core.zip && rm -rf /usr/local/nginx/html/*.zip
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
wget -c -P /usr/local/nginx/html/  https://raw.githubusercontent.com/yuukuun/v2fly/main/v2rayNG.apk
cat >/usr/local/nginx/html/index.html<<-EOF
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>v2ray 客户端</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
  </head>
  <body>
<div class="container"><div class="row">
<!-- 下载客户端 -->
<h4><div class="alert alert-success" align="center">下载客户端</div></h4>
<a type="button" class="btn btn-primary btn-lg" href="v2rayN-Core.zip" target="_blank">Windows客户端 v2rayN</a>
<a type="button" class="btn btn-primary btn-lg" href="v2rayNG.apk" target="_blank">安卓客户端 v2rayNG</a>
<a type="button" class="btn btn-primary btn-lg" href="https://apps.apple.com/us/app/shadowrocket/id932747118" target="_blank">苹果手机客户端 Shadowrocket</a>
<!--<a type="button" class="btn btn-primary btn-lg" href="v2rayNG_1.1.14.apk" target="_blank">IOS客户端</a>-->
<!-- 参数设置 -->
<h4><div class="alert alert-success" align="center">客户端参数</div></h4>
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
      <tr><th>属性</tH><th>参数</th></tr>
      <tr><td>协议：</td><td>vmess</td></tr>
      <tr><td>域名地址：</td><td>$url</td></tr>
      <tr><td>UUID：</td><td>$uuid</td></tr>
      <tr><td>端口：</td><td>443</td></tr>
      <tr><td>额外ID：</td><td>64</td></tr>
      <tr><td>传输协议：</td><td>ws</td></tr>
      <tr><td>PATH：</td><td>/7ba7</td></tr>
      <tr><td>传输安全：</td><td>TLS</td></tr>
    </table>
  </div>  
<!-- 安卓客户端参数 -->
<h4><div class="alert alert-success " align="center">安卓客户端：域名和UUID修改成自己的</div>
<img class="img-responsive col-sm-12 col-md-6" src="android_1.jpg"/>
<img class="img-responsive col-sm-12 col-md-6" src="android_2.jpg"/>
</h4>
</div></div>
<!-- 这里写script -->
  </body>
</html>
EOF
}


read -p "请输入域名：" urls
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