<?php

function NavBar_two($arr) {
	$tmp;
	echo "<div class=\"nav-scroller bg-white shadow-sm\">";
	echo "<nav class=\"nav nav-underline\">";
	foreach ($arr as $key => $value) {
		if ( $tmp != $value[0] ) {
			echo "<a class=\"nav-link\" href=\"$value[0].php\">$value[0]</a>";
		}
		$tmp = $value[0];
	}
	echo "</nav></div>";
}

function ShowPage($arr) {
	echo $_SERVER['PHP_SELF']."<br>";
		  foreach ($arr as $key => $value) {
	  		// echo "BTIT";
		  if ( $value[0] == "zh" ) {
		    // echo $value[2]."<br>";
		    // echo "<div onclick=\"play('../model/zh/$value[2]')\" class=\"tit col-6 col-md-3\"><a href=\"#q\" title=\"$value[2]\" >$value[2]</a></div>"."\n";
		    MusicTit($value[0],$value[1],$value[2]);
		  }
	}
}


function MusicTit($path,$sig,$mus){
	echo "<div class=\"row\"><div class=\"btit col-xs-12 col-md-12\"><a href=\"#q\" target=\"_blank\">$sig</a></div></div>"."\n"; 
    echo "<div class=\"row\"><div onclick=\"play('model/$path/$mus')\" class=\"tit col-6 col-md-6\"><a href=\"#q\" title=\"$mus\" >$mus</a></div></div>"."\n";
}











?>