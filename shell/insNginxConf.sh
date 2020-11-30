location /soft {
    sub_filter moru.gq qiqing.cf;
    sub_filter_once off;
    proxy_ssl_name $host;
	proxy_ssl_server_name on;
    proxy_set_header X-Real-IP $remote_addr;
    proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
    proxy_set_header Referer https://moru.gq;
    proxy_set_header Host moru.gq;
    proxy_pass https://moru.gq;
    proxy_set_header Accept-Encoding "";
}