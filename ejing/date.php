<?php 
//输入密码后访问本页内容
$password = "eching3000";
//这里是密码 
$p = "";
if(isset($_COOKIE["isview"]) and $_COOKIE["isview"] == $password) {
  $isview = true;
} else {
  if(isset($_POST["pwd"])) {
    if($_POST["pwd"] == $password) {
      setcookie("isview",$_POST["pwd"],time()+3600*3);
      $isview = true;
    } else {
      $p = (empty($_POST["pwd"])) ? "需要密码才能查看，请输入密码!" : "<div style=\"color:#F00;\">密码不正确，请重新输入。</div>";
    }
  } else {
    $isview = false;
    $p = "请输入密码查看。";
  }
}

$sign=<<<EOT
<form class="form-signin" action="" method="post">
  <div class="text-center mb-4">
    <h1 class="h3 mb-3 font-weight-normal">密码</h1>
  </div>
  <div class="form-label-group">
    <input type="Password" id="inputPassword" class="form-control" placeholder="Password" name="pwd" required>
    <label for="inputPassword"></label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" >登陆</button>
</form>
EOT;



?>