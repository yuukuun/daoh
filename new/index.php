<?php  
require 'data.php'; 
require 'exec.php'; 

?>

<!doctype html>
<html lang="en" >
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
    <link href="css/offcanvas.css" rel="stylesheet">
    <title>导航</title>
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
      <?php     
        show_nav($daoh_d,$shop_d);  // 顶部导航条   
      ?>


     <!--  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
    </ul>
   <!--  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
<!--------------------------------------------------二级导航-------------------------------------------------------->
<!-- <div class="nav-scroller bg-white shadow-sm">
  <nav class="nav nav-underline">
    <a class="nav-link" href="#">粤语</a>
    <a class="nav-link" href="#">中文</a>
    <a class="nav-link" href="#">MO</a>
    <a class="nav-link" href="#">返回</a>
    <a class="nav-link" href="#">返回</a>
    <a class="nav-link" href="#">返回</a>
    <a class="nav-link" href="#">返回</a>
    <a class="nav-link" href="#">返回</a>
    <a class="nav-link" href="#">返回</a>
  </nav>
</div> -->
<!--------------------------------------------------内容-------------------------------------------------------->
<main role="main" class="container" >
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<!-- <div class="row"><div class="col-xs-12 col-md-12 btit">电影音乐</div></div>
<div class="row">
<div class="col-6 col-md-2 tit"><a href="./page.php">page</a></div>
<div class="col-6 col-md-2 tit"><a href="./page.php">page</a></div>


</div> -->


<?php  

$sel = $_GET["s"];


switch ($sel)
    {
    //博客
    case "博客":  show_cont_tit($sel);
      break;  
    //语言
    case "语言":  show_cont_tit($sel);
      break; 
    //易经
    case "易经":  show_cont_tit($sel);
      break; 

    // 软件
    case "软件": show_daoh($daoh_d,$sel);
      break; 
    // 导航
    case "导航": show_daoh($daoh_d,$sel);
      break; 

    // 音乐
    case "音乐": show_music($sel);
      break; 

    // 头部
    case "头部": show_shop($shop_d);
    // 女装
    case "女装": show_shop($shop_d);
      break; 
    //默认
    default:  show_daoh($daoh_d,"软件");
}

//https://www.cnblogs.com/ronghua/p/11347090.html
// echo "<br>";
// echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
// echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$_SERVER['QUERY_STRING'];
// echo "<br>";

// echo $_GET["s"];

echo "<hr>";











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
    <script src="css/offcanvas.js"></script>
<div class="goTop" id="js-go_top"><a href="#ups"><img src="css/icon_top.png" alt="回到顶部图片"></a></div>
<script src="css/GoToTop.js"></script>


  </body>
</html>