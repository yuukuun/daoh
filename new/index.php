<?php 
require 'model/SourceData.php';   
require 'cont/show.php';   



$head = 'view/head.html'; //先读取文件
$temp = file($head); //file（）函数作用是返回一行数组，txt里有三行数据。
for($i=0;$i<count($temp);$i++){ //count函数就是获取数组的长度的，长度为3 因为一行被识别为一个数组 有三行
    echo $temp[$i]; //最后是循环输出每个数组
}

NavBar_two($music_data);

$bodystart = 'view/bodystart.html'; //先读取文件
$temp = file($bodystart); //file（）函数作用是返回一行数组，txt里有三行数据。
for($i=0;$i<count($temp);$i++){ //count函数就是获取数组的长度的，长度为3 因为一行被识别为一个数组 有三行
    echo $temp[$i]; //最后是循环输出每个数组
}

ShowPage($music_data);

$bodyend = 'view/bodyend.html'; //先读取文件
$temp = file($bodyend); //file（）函数作用是返回一行数组，txt里有三行数据。
for($i=0;$i<count($temp);$i++){ //count函数就是获取数组的长度的，长度为3 因为一行被识别为一个数组 有三行
    echo $temp[$i]; //最后是循环输出每个数组
}


?> 