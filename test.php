<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="css/offcanvas.css" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
<div onclick="play('m/教练录音.mp3')" class="tit col-12 col-md-12" style="text-align: center;"><a href="#q">教练_考试要点录音_10.28</a></div>

    <main role="main" class="container">
    <h1>Hello, world!</h1>
<!--     <div class="row">
  <div  class="col-12 col-md-12 audioplayerbg">
  </div>
</div>
 -->
  </main>



<!-- ---------------------------------------------------------------------------音乐---------------------------------------------------------------------------- -->
<?php
// player 
$file = '../player.html'; //先读取文件
$cbody = file($file); //file（）函数作用是返回一行数组，txt里有三行数据，因此一行被识别为一个数组，三行被识别为三个数组
for($i=0;$i<count($cbody);$i++){ //count函数就是获取数组的长度的，长度为3 因为一行被识别为一个数组 有三行
  echo $cbody[$i]; //最后是循环输出每个数组，在每个数组输出完毕后 ，输出一个换行，这样就可以达到换行效果
}
?>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>