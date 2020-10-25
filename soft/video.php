<!-- https://www.youtube.com/watch?v=23KLV9NqKoc -->
<!DOCTYPE html>
<html>
<head>
	<title>YouTuBe下载</title>
	<meta charset="utf-8">
	    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
<div class="container"> <!-- 主要 DIV -->

<div class="row">
<div class='col-md-12 col-xs-12'>

<?php
//方案A 防止灌水，判断表单确实是自己的表单
// if(isset($_POST["addr"]) && $_POST["addr"]=="login")  
// {
// 	$username=$_POST["username"];
// 	$tt=system("./addr.sh $username");
// 	echo("<a href='$tt'>点击下载</a>");
// }

//获取地址的数组
$username=$_GET["ids"];
$arr = array();
$arr2 = array();
$arr = explode('/',"$username");	//字符串分割函数
$tmp = $arr[4];
$arr2 = explode('?',"$tmp");
$id = $arr2[0];



echo("<hr>");
$url = system("
#proxy='--proxy socks5://127.0.0.1:1080'
num=\$(/usr/local/bin/youtube-dl -F \$proxy $id | grep '^[0-9]' | tail -n 1 | awk '{print \$1}')
/usr/local/bin/youtube-dl -f \$num -g \$proxy $id
");

echo("<hr>");
echo ("<a href='$url' class='btn btn-success btn-lg btn-block' role='button' download=''>视频下载</a>");

?>
	

<!-- 方案A  -->
<!--   <form name="form1" method="post" addrtion="">
youtube地址或ID：<input type="text" name="username" />
<input type="hidden" name="addr" value="login" />
<input type="submit" value="提交地址" />
  </form> --></div></div>
</div>
</body>
</html>