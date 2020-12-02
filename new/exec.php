<?php
require 'data.php'; 


// 顶部导航条
// function navbar() {
// 	$num = count($nav);
// 	for ($i=0; $i < $num; $i++) { 
// 	  $as[] = "<li class=\"nav-item\"><a class=\"nav-link\" href=\"".$nav[$i]."\">".$nav[$i]."</a></li>";
// 	}
// 	return print_r(as[]);
// }

// 博客目录的遍历
function txtTit($path) {
 	echo "<div class=\"row\"><div class=\"col-xs-12 col-md-12 btit\">".$path."</div></div> <div class=\"row\">";
 	foreach (glob($path."/*.html") as $pathname) {
		echo "<div class=\"col-12 col-md-6 tit\"><a href=\"txt_page.php?tit=".$pathname."\">".$pathname."</a></div>";
	}
  	echo "</div>";
}

// function pages() {
// 	require 'page.php'; 
// }








?>