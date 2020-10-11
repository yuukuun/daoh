<?php require 'data.php'; ?>

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
    <link href="css/offcanvas.css" rel="stylesheet">
    <title>网页</title>
  </head>
<!--------------------------------------------------导航-------------------------------------------------------->
  <body class="bg-light">
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand mr-auto mr-lg-0" href="#">&nbsp;</a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active"><a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a></li> -->
      <li class="nav-item active"><a class="nav-link" href="site.html">网页</a></li>
      <li class="nav-item"><a class="nav-link" href="m/index.html">音乐</a></li>
      <li class="nav-item"><a class="nav-link" href="head.html">头部</a></li>
      <li class="nav-item"><a class="nav-link" href="women.html">女装</a></li>
     

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
<main role="main" class="container">
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->
<div class="row"><div class="col-xs-12 col-md-12 btit">网页</div></div>
<div class="row">

<?php 

$sel = "b";



for ($i = 0; $i < count($site); $i++) { 
	if ($site[$i][0] == $sel) {
		for ($j = 1; $j < count($site[$i]); $j++) { 
			$url = $site[$i][$j - 1];
			$name = $site[$i][$j];
		}
	echo '<div class="col-6 col-md-2 tit"><a target="_blank" href="'.$url.'">'.$name.'</a></div>';
	}
}





?>
</div>







<!-- <div class="col-6 col-md-2 tit"><a target="_blank" href="http://www.51ape.com/">51ape无损音乐</a></div> -->

<!-- <div class="col-6 col-md-2 tit"><a target="_blank" href="https://sina.com">新浪</a></div>
<div class="col-6 col-md-2 tit"><a target="_blank" href="https://163.com">163</a></div> -->









<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<div class="up"><a href="#top" target="_self"><img src="css/top.png" class="img-fluid" alt="Responsive image"></a></div> <!-- 回到顶部  -->
<div class="row"><hr></div>
</main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="css/offcanvas.js"></script>
  </body>
</html>