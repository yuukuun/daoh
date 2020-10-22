package main
import (
	"net/http"
	"html/template"
	// "./model/data"
)

var Nav_a [3]string


func Nginx(w http.ResponseWriter,r *http.Request){
    //导入模板，如果模板文件出错就Must函数返回panic
    t := template.Must(template.ParseFiles("view/index.html")) 
    t.Execute(w,Nav_a)
}

func main(){
	Nav_a = [...]string{"主页","soft","site",}

    //说明：/css/网页文件中路径。cssjs是真实的服务端css目录
    http.Handle("/css/",http.StripPrefix("/css/",http.FileServer(http.Dir("view/css"))))
    //处理与路径绑定
    http.HandleFunc("/",Nginx)
    //监听端口和调用默认的fuyouqi
    http.ListenAndServe(":8080",nil)
}
