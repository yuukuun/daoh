<!doctype html>
<html lang="en">
<!--------------------------------------------------头部-------------------------------------------------------->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../css/offcanvas.css" rel="stylesheet">
    <title>Blog</title>
  </head>
<!--------------------------------------------------导航-------------------------------------------------------->
  <body class="bg-light" id="ups" name="ups">
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand mr-auto mr-lg-0" href="#">&nbsp;</a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active"><a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a></li> -->
 <li class="nav-item active"><a class="nav-link" href="../blog.html">博客</a></li>
      <li class="nav-item"><a class="nav-link" href="../lang.php">Lang</a></li>
      <li class="nav-item"><a class="nav-link" href="../soft.html">软件</a></li>
      <li class="nav-item"><a class="nav-link" href="../site.html">导航</a></li>
<li class="nav-item"><a class="nav-link" href="../ejing.html">易经</a></li>
      <li class="nav-item"><a class="nav-link" href="../m/index.php" target="_blank">音乐</a></li>
 <li class="nav-item"><a class="nav-link" href="#">|</a></li>
      <li class="nav-item"><a class="nav-link" href="../head.html">头部</a></li>
      <li class="nav-item"><a class="nav-link" href="../women.html">女装</a></li>
      <li class="nav-item"><a class="nav-link" href="../man.html">男装</a></li>
      <li class="nav-item"><a class="nav-link" href="../ku.html">裤子</a></li>
      <li class="nav-item"><a class="nav-link" href="../bags.html">包</a></li>
      <li class="nav-item"><a class="nav-link" href="../child.html">儿童</a></li>
      <li class="nav-item"><a class="nav-link" href="../shoes.html">鞋</a></li>
      <li class="nav-item"><a class="nav-link" href="../sport.html">运动</a></li>
      <li class="nav-item"><a class="nav-link" href="../toy.html">玩具</a></li>
      <li class="nav-item"><a class="nav-link" href="../phone.html">手机</a></li>
      <li class="nav-item"><a class="nav-link" href="../pc.html">PC</a></li>
      <li class="nav-item"><a class="nav-link" href="../dian.html">小电器</a></li>
      <li class="nav-item"><a class="nav-link" href="../home.html">居家</a></li>
      <li class="nav-item"><a class="nav-link" href="../kitchen.html">厨房</a></li>
      <li class="nav-item"><a class="nav-link" href="../car.html">汽车</a></li>
      <li class="nav-item"><a class="nav-link" href="../medi.html">医药</a></li>
      <li class="nav-item"><a class="nav-link" href="../indus.html">工业</a></li>
      <li class="nav-item"><a class="nav-link" href="../ray.html">光</a></li>
    </ul>
  </div>
</nav>
<!--------------------------------------------------二级导航-------------------------------------------------------->
<!--------------------------------------------------内容-------------------------------------------------------->
<main role="main" class="container"><hr>
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<h1><a href="../index.html">汽车</a></h1><div class="row"><span class="texts">
<div onclick="play('../m/教练录音.mp3')" class="tit col-12 col-md-12" style="text-align: center;"><a href="#q">教练_考试要点录音_10.28</a></div>
<hr>
比亚迪=》F3
大众=》宝来，速腾
RAV4,CRV，本田CRV，马自达CX5，日产RAV4 奇俊，三菱 欧蓝德
<hr>
<h1>扣分</h1>
<img src="科目二/k1.jpg" class="img-fluid col-12 col-md-12" alt="Responsive image">
<hr></span></div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<?php
// player 
$file = '../m/player.ht'; //先读取文件
$cbody = file($file); //file（）函数作用是返回一行数组，txt里有三行数据，因此一行被识别为一个数组，三行被识别为三个数组
for($i=0;$i<count($cbody);$i++){ //count函数就是获取数组的长度的，长度为3 因为一行被识别为一个数组 有三行
  echo $cbody[$i]; //最后是循环输出每个数组，在每个数组输出完毕后 ，输出一个换行，这样就可以达到换行效果
}
?>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<div class="row hou"><hr></div>
</main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../css/offcanvas.js"></script>
<div class="goTop" id="js-go_top"><a href="#ups"><img src="../css/icon_top.png" alt="回到顶部图片"></a></div>
<script src="../css/GoToTop.js"></script>
  </body>
</html>