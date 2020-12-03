<?php  
//////////// 主要导航条 ////////////
function  show_nav($nav) {
	$num = count($nav);
	for ($i=0; $i < $num; $i++) { 
	  echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"index.php?s=".$nav[$i]."\">".$nav[$i]."</a></li>";
	}
}

//////////// 博客 语言 易经 ////////////
function  show_cont_tit($path) {
 	echo "<div class=\"row\"><div class=\"col-xs-12 col-md-12 btit\">".$path."</div></div> <div class=\"row\">";
 	foreach (glob($path."/*.html") as $pathname) {
		echo "<div class=\"col-12 col-md-6 tit\"><a href=\"page.php?tit=".$pathname."\">".$pathname."</a></div>";
	}
  	echo "</div>";
}

//////////// 软件 导航 ////////////
function  show_daoh($arr,$name) {
	echo "<div class=\"row\"><div class=\"col-xs-12 col-md-12 btit\">".$name."</div></div>";
	echo "<div class=\"row\">";
	$n = count($arr);
	  for ($i=0; $i < $n; $i++) { 
	      if ( $arr[$i][0] == $name && $arr[$i][4] != "" ) {
	        echo "<div class=\"icon col-3 col-md-1 \"><a href=\"".$arr[$i][3]."\" target=\"_blank\"><img src=\"icon/".$arr[$i][4]."\" class=\"img-fluid rounded\">".$arr[$i][2]."</a></div>";
	      }
	  }
	echo "</div><hr><div class=\"row\">";
	for ($j=0; $j < $n; $j++) { 
	      if ( $arr[$j][0] == $name && $arr[$j][4] == "" ) {  
	        echo "<div class=\"col-6 col-md-2 tit\"><a target=\"_blank\" href=\"".$arr[$j][3]."\">".$arr[$j][2]."</a></div>";
	      }
	  }
	echo "</div>";
}

//////////// 音乐 ////////////
function  show_music($dir) {
$navstart=<<<EOF
<div class="row"><div class="nav-scroller bg-white shadow-sm"><nav class="nav nav-underline">
EOF;
$navend=<<<EOF
</nav></div></div>
EOF;
echo $navstart;
	$dirarr=scandir($dir);
	foreach ($dirarr as  $value) {
		if ( is_dir($dir."/".$value) ) {
			echo "<a class=\"nav-link\" href=\"".$value."\">".$value."</a>";
		}
		
	}
echo $navend;

echo "<div class=\"row\"><div class=\"col-xs-12 col-md-12 btit\">MMMM</div></div>";

echo "<div class=\"row\">";
foreach (glob($dir."/zh/*.flac") as $pathname) {
		echo "<div onclick=\"play('".$pathname."')\" class=\"tit col-6 col-md-3\"><a href=\"#q\">".$pathname."</a></div>";
	}
echo "</div>";

$file = 'player.html'; //先读取文件
$cbody = file($file); //file（）函数作用是返回一行数组，txt里有三行数据，因此一行被识别为一个数组，三行被识别为三个数组
	for($i=0;$i<count($cbody);$i++){ //count函数就是获取数组的长度的，长度为3 因为一行被识别为一个数组 有三行
	  	echo $cbody[$i]; //最后是循环输出每个数组，在每个数组输出完毕后 ，输出一个换行，这样就可以达到换行效果
	}

}

//////////// 阿里巴巴 ////////////
function  show_shop($arr) {
	echo "<div class=\"row\"><div class=\"col-xs-12 col-md-12 btit\">购物</div></div>";
	echo "<div class=\"row\">";
	$n = count($arr);
	  for ($i=0; $i < $n; $i++) { 
	  	if ( $arr[$i][1] == "1" ) {
	  		echo "<div class=\"col-6 col-md-3 tit imp\"><a target=\"_blank\" href=\"https://".$arr[$i][3].".1688.com/page/offerlist.htm\">".$arr[$i][2]."</a></div> ";
	  	} 
	  }
	  echo "</div><hr><div class=\"row\">";
	  for ($j=0; $j < $n; $j++) {
	  	if ( $arr[$j][1] == "2" ) {
	  	echo "<div class=\"col-6 col-md-2 links\"><a href=\"https://detail.1688.com/offer/".$arr[$j][3].".html\" target=\"_blank\">
	  			<img src=\"img/".$arr[$j][4]."\" class=\"img-fluid\">".$arr[$j][2]."</a></div>";
	  		} 
	  }
	echo "</div>";
}


?>