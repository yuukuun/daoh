<?php  
require 'data.php';  
require 'exec.php'; 
?>
<html lang="en">
<!--------------------------------------------------头部-------------------------------------------------------->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.1/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.1/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script> -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.4.0/build/styles/monokai-sublime.min.css">
    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.4.0/build/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
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
    <link href="css/offcanvas.css" rel="stylesheet">
   <!--  <link href="../css/floating-labels.css" rel="stylesheet"> -->
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
<?php  
// 顶部导航条
$num = count($nav);
for ($i=0; $i < $num; $i++) { 
  echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"".$nav[$i]."\">".$nav[$i]."</a></li>";
}



?>
    </ul>
  </div>
</nav>
<!--------------------------------------------------二级导航-------------------------------------------------------->
<!--------------------------------------------------内容-------------------------------------------------------->
<main role="main" class="container"><hr>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<?php
$tpath = $_GET['tit'];
echo "<h1><a href=\"index.php\">".$tpath."</a></h1><span class=\"cont\"><hr>";

$file = "$tpath"; 
$cbody = file($file); //file（）函数作用是返回一行数组，txt里有三行数据，因此一行被识别为一个数组，三行被识别为三个数组
for($i=0;$i<count($cbody);$i++){ //count函数就是获取数组的长度的，长度为3 因为一行被识别为一个数组 有三行
  echo $cbody[$i]; //最后是循环输出每个数组，在每个数组输出完毕后 ，输出一个换行，这样就可以达到换行效果
}


?>

<!-- 
<img src="IMG" class="img-fluid col-12 col-md-12" alt="Responsive image"> 
(转自：<a href="AAAAA" target="_blank">AAAAA</a>)
-->
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
</span><div class="row hou"><hr></div>
</main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="css/offcanvas.js"></script>
<div class="goTop" id="js-go_top"><a href="#ups"><img src="../css/icon_top.png" alt="回到顶部图片"></a></div>
<script src="css/GoToTop.js"></script>
<script src="css/GoToTop.js"></script>
  </body>
</html>