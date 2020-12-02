<?php  
//数据库部分
// require 'data.php'; 

// 博客目录的遍历
function  show_cont_tit($path) {
 	echo "<div class=\"row\"><div class=\"col-xs-12 col-md-12 btit\">".$path."</div></div> <div class=\"row\">";
 	foreach (glob($path."/*.html") as $pathname) {
		echo "<div class=\"col-12 col-md-6 tit\"><a href=\"page.php?tit=".$pathname."\">".$pathname."</a></div>";
	}
  	echo "</div>";
}

// 软件显示
// function  show_soft($n) {
// 	for ($i=0; $i < $n; $i++) { 
//     	echo $nav[$i]."<br>";
//   	}
// }






?>