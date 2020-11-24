<!doctype html>
<html lang="en">
<!--------------------------------------------------头部-------------------------------------------------------->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.1/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.1/highlight.min.js"></script>
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
    <link href="../css/offcanvas.css" rel="stylesheet">
    <title>go</title>
  </head>
<!--------------------------------------------------导航-------------------------------------------------------->
  <body class="bg-light" id="ups" name="ups">
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand mr-auto mr-lg-0" href="#">&nbsp;</a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span></div>
  </button>

  <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active"><a class="nav-link" href="../#">Dashboard <span class="sr-only">(current)</span></div></a></li> -->
 <li class="nav-item"><a class="nav-link" href="../blog.html">博客</a></li>
      <li class="nav-item active"><a class="nav-link" href="../lang.php">Lang</a></li>
    <!--   <li class="nav-item active"><a class="nav-link" href="../go.html">Go</a></li> -->
      <li class="nav-item"><a class="nav-link" href="../soft.html">软件</a></li>
      <li class="nav-item"><a class="nav-link" href="../site.html">导航</a></li>
<li class="nav-item"><a class="nav-link" href="../ejing.html">易经</a></li>
      <li class="nav-item"><a class="nav-link" href="../m/index.html">音乐</a></li>
 <li class="nav-item"><a class="nav-link" href="../go.php">|</a></li>
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


      <!-- <li class="nav-item dropdown">
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

    <a class="nav-link active" href="index.html">Linux</a>
    <a class="nav-link" href="mom.html">内存</a>
    <a class="nav-link " href="go.html">Go</a>
    <a class="nav-link" href="php.html">PHP</a>
  </nav>
</div> -->
<!--------------------------------------------------内容-------------------------------------------------------->
<main role="main" class="container">
<!---------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------->

<div class="row"><div class="col-xs-12 col-md-12 btit"><a href="../lang.php">PHP 基础 函数 例子 面向对象</a></div></div>
<div class="row"><span class="txt">
php 的很多功能需要相应的应用库，比如更好的图形支持就安装GD库，php5.6.2最稳定。集成开发工具：zend stdio 和 netbean 。前端notepad++ 和editplus
//php中值传递是内存空间是独立的。（int,bool,float,string,array(),对象,资源）默认是值传递。
//引用传递是指向同一个内存地址空间。
//php变量区分大小写，函数名不区分大小写。
</span></div>

<div class="row"><span class="txt">编码，引入：</span></div>
<div class="row"><pre><code>
&lt;?php
/////////////////////////////////////////////////////— — — 编码引入— — —///////////////////////////////////////////
 
header("content-type:text/html;charset="utf-8");    //编码设置
 
引入方式（推荐require和require_once方式）：
用require方式引入文件成功返回 1 。也可以实际情况返回数组或变量（return）。当遇到引入文件遇到return时候终止引入，返回主文件继续执行。
 
require 'a.php';    //require可以多次引入php文件，文件不存在退出程序
require_once 'a.php';    //require_once只能单次引入php文件，文件不存在退出程序
include 'a.php';    //重复引入单个文件，文件不存在继续执行程序。
include_once 'a.php';    //只能引入一次单个文件，文件不存在继续执行程序。
?&gt;
</code></pre></div>

<div class="row"><span class="txt">
常量 变量：
局部变量：只有函数内部有效，函数执行完就注销。
全局变量：全局通用，函数内外都可以用。
超全局变量：php中许多预定义的变量是全局的。函数终须执行GLOBAL $variable 就可以用的。
</span></div>
<div class="row"><pre><code>
//基本：int,float,bool,string
//基础：array(),对象
//特殊：null,资源
 
$GLOBAL     //预定义全局数组。包含所有全局变量。不包含局部变量。
//代码：
$arr = array('a','b',245);    
$name = 'hello!';
echo $GLOBALS['arr'][1];
echo $name;
 
//常量：
define("CHANG_LIANG",5);    //定义常量
const CHANG_LIANG = 55;    //定义常量，这种方式在类中可以调用
if(!define("CHANG_LIANG",5) exit("错误，不能直接调用！"));    //php不能直接调用，必须有指定入口
</code></pre></div>

<div class="row"><span class="txt">数组：</span></div>
<div class="row"><pre><code>
键（key）可以是整数（索引数组）或者字符串（关联数组）,值（value）是任意类型的值。不能用数组和对象做键($key)
如果键值没有指定，择取当前最大搜引值，而新的键名将加一。如果指定的键名已有责被取代。
array(3=>12,4 => 15,5 => 25, 3 => 35)    //$key 3 变为 35
 
数组三种定义方式：
$arr1 = $array(25,35,26,'hello');
$arr2 = $array('a' => 24,3 => 'mm');
 
$arr[0] = 2;    //数组arr的一号元素
$arr[1] = 'bb';    //数组arr的二号元素
 
数组遍历方法：
foreach ($arr1 as $key => $val);    //foreach ($arr1 as $val);  可以这样写。
foreach($arr as $key $val): 语句; endforeach;
 
数组的运算：
arr1 + arr2    // 加法运算时候是下标($key)一样的被忽略。
arr1 == arr2    // 相同的 key 和 value 为真
arr1 === arr2    // 相同的 key 和 value ，还有排序和类型相同则为真
arr1 != arr2    // 这个与 == 逻辑相反
arr1 !== arr2    // 如果键和值不等，或者类型不等，就成立
</code></pre></div>


<div class="row"><span class="txt">函数：</span></div>
<div class="row"><pre><code>
当调用函数时候在内存新开辟一个新栈，函数的return返回值谁调用返回给谁。
GLOBAL $a;    //函数内定义全局变量
static $c = 0;    //静态变量放在静态区，函数运行完不注销，下次运行就绪调用次变量。
函数内定义全局变量（GLOBAL $a）函数调用时候在生效.如果这个变量存在就直接用$a，否则创建变量$a
 
函数默认是值传递。
 
可变函数：如果变量后面有圆括号，PHP将寻找与变量值相同的函数，并尝试执行。
代码：
function abc($n1,$n2){        }
%fun_name = 'abc';    //abc是函数名
fun_name(5,6);    //用fun_name来调用abc函数
 
定义函数：
function abc(参数1,参数2...){  语句;  }
 
匿名函数：
$func = function($n)
    {    return 2*$n;    }
echo $func($n);
</code></pre></div>

<div class="row"><span class="txt">类 对象：</span></div>
<div class="row"><pre><code>
A,类名文件的命名是按照，ClassName.class.php方式命名的。
B,对象1=对象2 ，对象1和对象是值拷贝，但是通过对象标识符指向同个对象属性值。
 
修饰符：
public    类外面直接访问
protected    类外面通过转个函数访问
private    类外面通过转个函数访问
 
构造函数: // 初始化类的对象。
1.构造函数没有返回值
2.主要对新对象的初始化，并不是创建本身。
3.一个类只有一个构造函数。PHP5中__construct()和类名()可以供存。
4.如果没有构造方法，则是使用系统默认的构造方法。
5.如果该类定义构造函数后默认的构造方法被覆盖。
6.构造方法的默认修饰符是public
 
成员函数： // 当我们调用该函数时候显示对象的信息。
$this   //是当前谁调用我就指向当前的对象
 
析构函数：
系统销毁对象之前，释放对象分配的资源。最后创建的最先释放。
 
class 类名{   成员属性；
         构造函数；
         成员函数；
         析构函数；   }
 
代码：
class Cat{    //类名cat不区分大小写。大写字母开头，驼峰命名法
  public $name;
  public $age;
  public $color;
  public function val($a,$b){
    $res = 0;
    return $res = $a + $b;  }
  public function __construct($l,$m,$n){  //初始化类的对象。
    $this -&gt; name = $l;  
    $this -&gt; age = $m;
    $this -&gt; color = $n;
  }
}
 // $cat1 = new Cat();
 // $cat1-&gt; name = '小白';
 // $cat1-&gt; age = 25;
 // $cat1-&gt; color = 'red';
 
 // echo $cat1 -&gt; name . '&lt;&gt;';
 // echo $cat1 -&gt; age . '&lt;&gt;';
 // echo $cat1 -&gt; color . '&lt;&gt;';
 // echo $cat1 -&gt; val(15,25);
 
$cat2 = new Cat('小红','99','green');
echo $cat2 -&gt; name;
echo '&lt;&gt;';
echo $cat2 -&gt; val(25,45);
 
魔术方法：
当访问（protected ，private ，不存在）属性时候。__get(属性名称);函数触发。通过__get();函数访问类的私有属性值。
当（protected ，private ，不存在）属性赋值时候。__set(属性名称，属性值);函数触发。
代码：
class cat{
  public $name;
  protected $food;
  function __construct($m,$n){
    $this-&gt; name = $m;
    $this-&gt; food =$n;
  }
  function __get($p){
    echo $this-&gt;$p;
  }
  function __set($a,$b){
    $this-&gt;$a = $b;
    echo '修改成功！&lt;&gt;';
  }
}
 
$mao = new cat('小猫','爱吃老鼠');
echo $mao-&gt; food;
echo '&lt;&gt;';
$mao-&gt; food = '爱吃大米';
$mao-&gt; color = '白色';
echo $mao-&gt; food;
echo $mao-&gt; color;
 
__isset(属性名);当不可访问的（protected ，private ，不存在）属性调用isset()或empty()时候，__isset(属性名)会被调用。
__unset();当不可访问的（protected ，private ，不存在）属性调用unset()时候，__unset()会被调用。
代码：
class house{
  protected $zhu;
  public $jiage;
  public $dizhi;
  function __construct($zhu,$jiage,$dizhi){
    $this-&gt;zhu = $zhu;
    $this-&gt;jiage = $jiage;
    $this-&gt;dizhi = $dizhi;
  }
  function __isset($p){
    if(isset($this-&gt;$p))
    {
      echo '房主存在！';
    }else
    {
      echo '房主不存在！';
    }
  }
  function __unset($s){
    if(isset($this-&gt;$s))
    {
      unset($this-&gt;$s);
      echo '注销成功！';
    }else
    {
      echo '注销失败！';
    }
  }
}
 
$qing = new house('小青','500万元','北京');
 
isset($qing-&gt;zhu);
unset($qing-&gt;zhu);
echo '&lt;&gt;';
var_dump($qing);
 
__toString();
当我们把一个对象当做字符串来使用的时候，默认触发类内的__toString();方法。
代码：
class dog{
  private $name;
  private $color;
  private$sex;
  function __construct($l,$m,$n){
    $this-&gt;name = $l;
    $this-&gt;color = $m;
    $this-&gt;sex = $n;
  }
  function __toString(){
    return $this-&gt;name . $this-&gt;color . $this-&gt;sex;
  }
}
 
$dog1 = new dog('小狗','白色','男');
echo $dog1;
 
__clone();
当我们对象1 = clone 对象2 的时候，触发默认的__clone();函数。private function __clone() 的用处是防止别人clone
对象1==对象2  通过一个类创建的两个对象属性和属性值相就成立。
对象1===对象2 如果对象1=对象2就全等。
代码：
class sheep{
  public $name;
  public $food;
 
  function __construct($m,$n){
    $this-&gt;name = $m;
    $this-&gt;food = $n;
  }
  private function __clone(){   //默认是public模式，添加private是防止
    echo '克隆！！！';
  }
}
$s1 = new sheep('小羊','吃草');
$s2 = clone $s1;
echo '&lt;&gt;';
var_dump($s1);
var_dump($s2);
$s2-&gt;name = '喜洋洋';
 
echo '&lt;hr&gt;';
echo '&lt;&gt;';
var_dump($s1);
var_dump($s2);
 
__call();
在对象调用不可访问的（protected ，private ，不存在）函数的时候，__call(方法名称,参数合集);被触发。__call($m,$n);两个变量来接受。
代码：
class monkeys{
  public $name;
  public $food;
 
  function __construct($m,$n){
    $this-&gt; name = $m;
    $this-&gt; food = $n;
  }
  function __call($f,$arr){
    return $this-&gt;$arr[0]($arr[1],$arr[2]);
  }
  function sum($a,$b){
    return $a + $b;
  }
}
$ms = new monkeys('大猴子','喜欢吃树叶');
echo $ms -&gt; name;
echo $ms -&gt; food;
echo $ms -&gt;pp('sum',25,15);
 
类的自动加载：
类名文件的命名是按照，ClassName.class.php方式命名的。
代码：
//分别创建dog.class.php和cat.class.php的定义class的文件
spl_autoload_register('myload');  //注册自己的__autoload函数
 
$arr_load = array(
  'dog' =&gt; './class/dog.class.php',
  'cat' =&gt; './class/cat.class.php'    );
 
function myload($class_name){ //自定义autoload函数
//function __autoload($class_name){   //系统默认的__autoload方式
  global $arr_load;
  require $arr_load[$class_name];
}
$cat = new cat();
$cat-&gt;show();
 
静态属性和函数 static $count;
静态变量是属于类的，不属于对象，函数内使用self::$count;。默认值是$count = 0
代码：
class dog{
  public $name;
  public static $cou = 15;  //静态变量默认值 0 
  function __construct($name){
    $this-&gt;name = $name;
  }
  function addGame(){
    echo $this-&gt;name . '加入游戏！';
    self::$cou++;
  }
  function show(){
    echo '添加用户数量是：';
    return self::$cou;
  }
}
$dog1 = new dog('白狗');
$dog2 = new dog('黑狗');
$dog3 = new dog('红狗');
$dog1-&gt;addGame();
$dog2-&gt;addGame();
$dog3-&gt;addGame();
echo $dog3-&gt;show();  //通过函数访问static $cou变量。
echo dog::$cou; //通过类直接访问static $cou变量。
</code></pre></div>

<div class="row"><span class="txt">面向对象：</span></div>
<div class="row"><pre><code>
静态函数也叫类的方法，我们操作静态属性可以使用静态函数操作，使用静态函数在没有实例化对象的情况下使用。
静态方法中不能调用非静态属性。普通成员函数，可以访问静态属性。
self::$VarName; //访问静态属性
OjeactName->StaticFunctionName();( ClassName::StaticFunctionName(); ) //类的外面访问静态函数
self::StaticFunctionName(); ( $this->StaticFunctionName(); )  //类内静态函数
 
单例模式：只能有一个对象。
 
继承：
子类继承父类的属性和方法的继承。父类的public和protected修饰符的属性和方法子类可以继承。（ class 子类 extends 父类 ）子类只能继承一个父类。
当一个对象操作属性和函数时候现在子类查找，找不到的话然后在在父类中查找属性和方法，然后判断是否可以操作。如果父类没有到他上一级类查找。
子内没有自定义构造函数时候，调用父类的构造函数。子类中调用父类的函数（public protected）。子类和父类方法相同，叫重写。
$this->MyFunction();
FatherClassName::MyFunction();
parent::MyFunction(); (parent::__construct();)
 
重载（ovorloading）：
动态的创建属性和方法，通过魔术方法来实现的。
 
__callStatic();在静态方法中访问不可访问（private protected 没有的）的静态函数函数时候被调用。
</code></pre></div>

<div class="row"><span class="txt">TEXT</span></div>
<div class="row"><pre><code>
/////////////////////////////////////////////////////— — — 数据类型— — —///////////////////////////////////////////
 
$a = 10;
 
数据类型转换：
 
 
$num = 115.62;
$a = settype($num,"string");    //转为string类型。$num本身就变城string
$b = string($num)    //$num 值转为string 类型，$num不变
$c = valint($num);    //$num 值转为int 类型。valint(变量)，boolint(变量)，valstr(变量)
变量函数(返回true和false，)：
   
 
变量：
    
$str =&lt;&lt;&lt;STR
第一行，
第二行
STR;    //heredoc，格式必须这样，STR后边不能有空格和字符，不能有注释
 
$a = 25;
$str1 = 'This is php!';   //字符串类型，单引号不能解析变量
$str2 = "This is php! {$a}";  //字符串类型，双引号不能解析变量
$a !== $b    //变量a,b的值或类型不相等为true
$a !== $b    //变量a,b的值或类型不相等为true
$a === $b    //变量a,b的值或类型相等为true
echo $str2;
优先级 || 大于 = 大于 or 这样排序。
如果 && 运算（$a && $b）$a是false的话不执行$$之后的的表达式。如果 || 运算（$a || $b）$a是true的话不执行||之后的的表达式。（短路）
$mysql_connect('localhost','root','root')or die(mysql_error());    //@和or die结合使用，致命错误时候提示
 
条件？结果1：结果2    //当条件满足是，选择结果1，否则则是结果2
if (round(num1 * 10000) &gt; round(num1 * 10000))    //小数点比较方法
/////////////////////////////////////////////////////— — — 数组— — —///////////////////////////////////////////
用for()语句访问数组的时候，下表必须是数字而且是连续的。
 
arr1 = array(1,'qing','nan','内蒙古',18611155664);    
arr1 = array('no1' =&gt; 1,'no2' =&gt; 'name','no3' =&gt; 'address');
 
 
 
/////////////////////////////////////////////////////— — — 语句— — —///////////////////////////////////////////
分支语句：
多层循环是从里到外执行。里边循环完在执行外循环。
goto a;   语句  a:代码;    //a;和a:之间的代码不执行。goto语句可以跳出多层循环，不能跳出和跳入函数和类。 
break 2;    //跳出2层循环
continue 2;    //跳出二层循环后再执行循环。
if(条件表达式){ 条件成立执行语句; } , &lt;?php if(表达式): ?&gt;  html代码  &lt;?php endif; ?&gt; //替代语法
if(条件表达式){ 条件成立执行语句; }else{ 条件不成立执行语句; }
&lt;?php if(表达式): ?&gt;执行代码1&lt;?php else: ?&gt;执行代码2&lt;?php endif; ?&gt; //if else替代语法
 
if(条件表达式){ 条件1成立执行语句; }elseif{ 条件2成立执行语句; }elseif{ 条件都不成立执行语句; }
switch(条件表达式){ case 条件1:执行语句1; break; case 条件n:执行语句n; break; default: 条件都不成立执行语句; }
 
循环结构：
变量初始化;    while(条件表达式){ 循环的代码; 变量的变化; }
变量初始化;    do{ 循环的代码; 变量的变化; }(条件表达式)while;
for ( 变量的初始化;条件表达式;变量的变化; ){ 循环的代码; }
 
break;    //跳出for do while switch默认退出一个循环，可以增加数字 break 3;
continue;    //跳过当前训话，可以增加次数 continue 2;
goto;    //
return;   //1.函数中返回值或者终止函数。///2.页面中终止代码运行。///3.作为函数的返回值，在页面中直接使用return数据。
return $arr = array($a,$b);
 
 
/////////////////////////////////////////////////////— — — 对象— — —///////////////////////////////////////////
 
 ?&gt;
</code></pre></div>

<div class="row"><span class="txt">TEXT</span></div>
<div class="row"><pre><code>LANG</code></pre></div>

<div class="row"><span class="txt">TEXT</span></div>
<div class="row"><pre><code>LANG</code></pre></div>


<div class="row"><div class="col-xs-12 col-md-12 btit"><a href="../lang.php">PHP 函数</a></div></div>
<div class="row"><span class="txt">数据库：</span></div>
<div class="row"><pre><code>
$sql = 'SELECT * FROM mess_info';
 
$link = mysql_connect('localhost','root','123456789');       //数据库链接
mysql_select_db('dbname');    //选择数据库
mysql_query($sql);    //查询语句    
mysql_fetch_assoc($res)    //按行输出
mysql_close($link);    //关闭数据库
</code></pre></div>

<div class="row"><span class="txt">类 魔术方法：</span></div>
<div class="row"><pre><code>__get();__set();    //不可访问（protected private 不存在）属性值访问和赋值</code></pre></div>

<div class="row"><span class="txt">变量判断：</span></div>
<div class="row"><pre><code>
is_array();    //判断是否数组
is_int();    //判断是否整数
is_float();    //判断是否浮点数
is_numeric();    //判断是否数字
empty();    //值为空，返回TRUE
isset();    //变量是否有值
gettype();    //输出类型
unset();    //注销变量
</code></pre></div>

<div class="row"><span class="txt">输出：</span></div>
<div class="row"><pre><code>
print_r()    //输出数组
var_dump();    //输出数据类型
printf("my name is %s age is %d",$name,$age);    //格式化输出
sprintf("my name is %s age is %d",$name,$age);     //格式化但是不输出
</code></pre></div>

<div class="row"><span class="txt">数字：</span></div>
<div class="row"><pre><code>
rand(1,50)    //1 - 50随机生成整数
round(1.568,2)    //只保留小数两位
</code></pre></div>

<div class="row"><span class="txt">系统常量，魔术常量：</span></div>
<div class="row"><pre><code>
__DIR__    //显示目录结构
__LINE__     //显示行号
___FILE__    //显示文件路径
PHP_INT_MAX    //输出最大整数
</code></pre></div>

<div class="row"><span class="txt">文件 目录：</span></div>
<div class="row"><pre><code>
file_put_contents('./file.txt',$str);    //写入当前目录
file_get_contents('./file.txt');    //读取文件

dirname(__DIR__ . '/');    //取消最后一个目录，加'/'
</code></pre></div>

<div class="row"><span class="txt">数组：</span></div>
<div class="row"><pre><code>
unset($arr);    //数组删除
unset($arr[2]);    //删除数组$arr[2]的元素，原来索引不会改变。
sort();    //默认按负数，字母a-z,正数排序
array_reverse($arr);    //数组元素输出倒序，原$arr数组的元素排序没变化
count($arr);    // $arr 获取数组长度
is_array($arr)    //判断$arr数组是否数组
range(1,5000);    //5000元素的数组
array_merge($arr1,$arr2)    //数组$arr1和数组$arr合并
array_search('file',$arr);    //数组内搜索file的value然后返回该元素的$key
array_push($arr,'hello');    //数组入栈，数组$arr最后加入‘hello’的字符串
array_pop($arr);    //数组出栈，数组$arr 最后元素出栈
print_r()    //输出数组
var_dump();    //输出数组
</code></pre></div>

<div class="row"><span class="txt">Function_handling：</span></div>
<div class="row"><pre><code>
func_num_args();    //函数内部使用，获取所有形参的个数
func_get_args();    //获取所有函数的值，并且是数组
func_get_arg(3);        //获取数组下表为3的值
</code></pre></div>

<div class="row"><span class="txt">对象：</span></div>
<div class="row"><pre><code>
serialize($obj);    //序列化
unserialize($obj);  //反序列化
class_exists('ClassName');  //判断类是否存在
method_exists($ClassName,'func'); //方法是否存在
property_exists('ClassName','name');
get_class($ClassName);  //当前对象的类名
</code></pre></div>

<!-- -------------------------------------------------------------------------------------------------------------------------->
<!-- -------------------------------------------------------------------------------------------------------------------------->
<!-- -------------------------------------------------------------------------------------------------------------------------->
<div class="row"><div class="col-xs-12 col-md-12 btit"><a href="../lang.php">PHP 例子</a></div></div>
<div class="row"><span class="txt">打开文本输出：</span></div>
<div class="row"><pre><code>
&lt;?php
$file = 'temp.txt'; //先读取文件
$cbody = file($file); //file（）函数作用是返回一行数组，txt里有三行数据。
for($i=0;$i&lt;count($cbody);$i++){ //count函数就是获取数组的长度的，长度为3 因为一行被识别为一个数组 有三行
  echo $cbody[$i]; //最后是循环输出每个数组
}
?&gt;
</code></pre></div>

<div class="row"><span class="txt">TEXT</span></div>
<div class="row"><pre><code>LANG</code></pre></div>


<div class="row"><pre><code>
//////////////////////////////////////////////////////////////床架mysql数据库/////////////////////////////////////////////////
mysql -u root -p
create database bia;    #创建数据库
create table biao (id int auto_increment primary key not null,title char(25),contents char(50));    #创建表
insert into biao set id="1",title="qing",contents="12345@qq.com";     #插入数据
//////////////////////////////////////////////////////////////index.php//////////////////////////////////////////////////////////////
//基于PHP5.6版本
&lt;a href="add.php"&gt;添加内容&lt;a/&gt;
&lt;?php
include("conn.php");
$sql="select * from biao order by id desc limit 40";//注意'bia'这样写出错的。
$que=mysql_query($sql);
//print_r($fet);
while ($fet=mysql_fetch_array($que)) {
?&gt;
&lt;hr&gt;
&lt;h3&gt;标题：&lt;?php echo $fet['title']; ?&gt;&lt;/h3&gt;
时间：&lt;?php echo $fet['dates']; ?&gt;
&lt;p&gt;内容：&lt;?php echo iconv_substr($fet['contents'],0,15,"uft8"); ?&gt;. . . . .&lt;/p&gt; 
|&lt;a href="edit.php?id=&lt;?php echo $fet['id']; ?&gt;"&gt;编辑&lt;/a&gt;|&lt;a href="del.php?del=&lt;?php echo $fet['id']; ?&gt;"&gt;删除&lt;/a&gt;|
&lt;hr&gt;
&lt;?php 
}
?&gt;
//////////////////////////////////////////////////////////////conn.php//////////////////////////////////////////////////////////////
&lt;?php
  header('content-type:text/html;charset=utf8');
  @mysql_connect("localhost:3306","root","qwe123456")or die("mysql链接失败"); //mysql连接
  @mysql_select_db("bia")or die("DB链接失败");    //数据库编码
   mysql_set_charset("utf8");   //数据编码统一,老版本mysql_query("gbk");
  //mysql_query("set names 'utf8'")
  //echo "数据库连接成功";
?&gt;
//////////////////////////////////////////////////////////////add.php//////////////////////////////////////////////////////////////
&lt;?php
  include("conn.php");
  if (!empty($_POST['sub']) and !empty($_POST['tit']) and !empty($_POST['con'])) {
  $tit=$_POST['tit'];
  $con=$_POST['con'];
  $sqq="insert into biao set id='null',title='$tit',contents='$con'";
  //echo $sqq;
  mysql_query($sqq);
  echo "&lt;script&gt;location.href='index.php'&lt;/script&gt;"; //Javascript 提示和条转功能
  echo "插入成功！";
  } else {
    echo "内容是空重新输入！";
  }
 
?&gt;
&lt;form action="add.php" method="post" name="ff"&gt;
标题：
&lt;/br&gt;&lt;input type="text" name="tit"&gt;
&lt;/br&gt;内容：
&lt;/br&gt;&lt;textarea name="con" rows="8" cols="40"&gt;&lt;/textarea&gt;
&lt;/br&gt;&lt;input type="submit" name="sub" value="发表"&gt;
&lt;/form&gt;
//////////////////////////////////////////////////////////////edit.php//////////////////////////////////////////////////////////////
&lt;?php
  include("conn.php");
 
  if (!empty($_GET['id'])) {
    $idd=$_GET['id']; //注意$_GET['id']变量外面不用加引号。
    $sql="select * from biao where id='$idd'";
    $que=mysql_query($sql);
    $fet=mysql_fetch_array($que);
  }
  if (!empty($_POST['sub'])) {
  $tit=$_POST['tit'];
  $con=$_POST['con'];
  $hid=$_POST['hid'];
  $sqq="update biao set title='$tit',contents='$con' where id='$hid'";
  mysql_query($sqq);
  echo "&lt;script&gt;alert('更新成功');location.href='index.php'&lt;/script&gt;";  //Javascript 提示和条转功能
 
  }
 
?&gt;
&lt;form action="edit.php" method="post" name="ff"&gt;
&lt;input type="hidden" name="hid" value="&lt;?php echo $fet['id']; ?&gt;"&gt;
标题：
&lt;/br&gt;&lt;input type="text" name="tit" value="&lt;?php echo $fet['title']; ?&gt;"&gt;
&lt;/br&gt;内容：
&lt;/br&gt;&lt;textarea name="con" rows="8" cols="40"&gt;&lt;?php echo $fet['contents']; ?&gt;&lt;/textarea&gt;
&lt;/br&gt;&lt;input type="submit" name="sub" value="更新"&gt;
&lt;/form&gt;
//////////////////////////////////////////////////////////////del.php//////////////////////////////////////////////////////////////
&lt;?php
include("conn.php");
  if (!empty($_GET['del']))
   {
    $d=$_GET['del'];
    $sqq="delete from biao where id='$d'";
    mysql_query($sqq);
    echo "删除成功";
    echo "&lt;script&gt;location.href='index.php'&lt;/script&gt;"; //Javascript 提示和条转功能
  }
?&gt;
</code></pre></div>

<!-- -------------------------------------------------------------------------------------------------------------------------->
<div class="row"><div class="col-xs-12 col-md-12 btit"><a href="../lang.php">PHP 注释</a></div></div>
<div class="row"><span class="txt">
  php的很多功能需要相应的应用库，比如更好的图形支持就安装GD库。php5.6.2最稳定。集成开发工具：zend stdio 和 netbean 。前端notepad++ editplus</span></div>
<div class="row"><pre><code>
&lt;? php
header('content-type:text/html;charset=utf8');
@mysql_connect("localhost:3306","root","root")or die("mysql链接失败");//mysql连接
@mysql_select_db("sjk")or die("DB链接失败");//数据库编码
 mysql_set_charset("utf8");//数据编码统一,老版本mysql_query("gbk");
//mysql_query("set names 'utf8'")
//echo "数据库连接成功";
?&gt;
&lt;!--注释，注释，注释，注释，注释，注释，注释，注释，注释，注释，注释，注释，注释，注释，注释，注释，注释--&gt; 
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
  &lt;meta charset="utf-8"&gt;
  &lt;title&gt;php注释&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
  &lt;?php 
    echo "我的的输出&lt;br/&gt;";  /*多行注释*/
    $ab=false;
    $url7="www.xunlei.com";
    if (!$ab) {         //单行注释，变量取反，大括号代码抱起来，“!”取反
      echo "我的是真的";
      echo "$url7";
    }
    $aa="bb";     //可变变量
    $$aa="hello";   //可变变量
    echo "&lt;br/&gt;$bb";
    echo 'wo shi \' zifu chuan\\\\';  /*字符串,'\'是转义字符,单引号不可以解析变量
    建议使用单引号，
    */
    $lei_xing_sc="123abc";
    $lei_zhuanhuan=(int)$lei_xing_sc; /*类型转换变量*/
    echo "&lt;br/&gt;";
    var_dump($lei_xing_sc); /*类型输出函数*/
    echo "&lt;br/&gt;";
    var_dump($lei_zhuanhuan); /*类型转换输出函数*/
    
    echo "&lt;br/&gt;";
    $shuzu=array(1,2,3,4,5);  /*声明数组*/
    var_dump($shuzu);     /*输出数组*/
 
    echo "&lt;br/&gt;";
    echo __LINE__;  //常量，输出行号，前后两个下划线
 
    echo "&lt;br/&gt;";
    define("TEST", 1987); //自定义常量Parse error: syntax error, unexpected 'echo' 这样提示是上一行没写;号
    echo TEST;        //常量输出
 
    echo "&lt;br/&gt;40行：";
    echo 5%2;   //求余数运算
    echo "&lt;br/&gt;42行：";
    $shuz=10;
    echo ++$shuz; //把++放在变量后面是只运算不出结果，把++放在变量前面是运算出结果
 
    echo "&lt;br/&gt;46行：";
    $zifu1="string";
    $shuz1=256;
    echo $shuz1."shi".$zifu1; //字符串运算符是. 也是连接符。
 
    echo "&lt;br/&gt;51行：";
    $sz2=5;
    $sz2*=2;  //$sz2=5*2跟这个一样
    echo $sz2;
 
    echo "&lt;br/&gt;56行：";
    var_dump(5==="5");  
 
    echo "&lt;br/&gt;59行：";
    if (!$zjb="好") {    //if语句，
      echo "真的";
    } else {
      echo "假的";
    }
    
    echo "&lt;br/&gt;66行：";   //switch语句，
    switch (1) {
      case '1':
        echo "我是一";
        break;
      case '2':
        echo "我是二";
        break;
      case '3':
        echo "我是三";
        break;
      
      default:
        echo "没有匹配！";
        break;
    }
    echo "&lt;br/&gt;83行：";
    $arr2 = array('a' =&gt; 77,'b' =&gt; 83,'c' =&gt; 99,'d' =&gt; 87,'e' =&gt; 27,  ); //php当中有了键名以后不能再用下标了！
    $arr = array(11,22,33,44,55,66,77,88 );
    $arr[0]=58;   //修改数组
    unset($arr[3]); //删除数组
    echo $arr[2]."&lt;br/&gt;88行："; //通过下标访问数组 通过.运算符
    //echo "&lt;br/&gt;83行：";
    echo $arr2['b'];  //通过键访问数组
 
    foreach ($arr2 as $key =&gt; $value) {    //遍历数组，可以不写$key，直接输出value。
      echo "&lt;br/&gt;".$key."----&gt;&gt;".$value;
    }
    var_dump($arr2);  //打印数组函数
    echo "&lt;br/&gt;96行：";
    print_r($arr2);   //打印数组函数
    
    for ($i=1; $i &lt;=70; $i++) { echo "+";} //+++++++++++++
 
    $arre = array( array(11,22,33,44 ),array(55,66,77,88 ) );     //二维数组
    echo "&lt;br/&gt;100行：".$arre[1][3];
 
    $arr3[0]=32;
    $arr3[1]=65;
    echo "&lt;br/&gt;104行：".$arr3[1];
 
    $arrr = array( 80=&gt;3,4,5,6,7,8 );
    echo "&lt;br/&gt;107行：";
    unset($arrr[81]);
    $arrr[83]='ef';
    print_r($arrr);
 
    for ($i=1; $i &lt;=70; $i++) { echo "+"; } //+++++++++++++
    
    $arr5 = array(25,15,2,6,79,88);
    sort($arr5);    //数组正序函数，rsort反序，ksort字母排列
    $arr6 = array('A' =&gt; 14, 'a' =&gt; 24,'C' =&gt; 33,);  //
    ksort($arr6);   //大写字母排在前面
    print_r($arr5);
    echo "&lt;br/&gt;120行：";
    print_r($arr6);
    echo "&lt;br/&gt;123行：";
    echo array_sum($arr5);    //数组求和函数。 
    ?&gt;
&lt;/body&gt;
&lt;/html&gt;

</code></pre></div>

<!-- -------------------------------------------------------------------------------------------------------------------------->
<div class="row"><div class="col-xs-12 col-md-12 btit"><a href="../lang.php">PHP 面向对象</a></div></div>


<div class="row"><span class="txt">
  类名文件的命名是按照，ClassName.class.php方式命名的。    修饰符：public（类外直接访问，继承）， protected（类外不能直接访问，继承），private（只能类内访问）
</span></div>
<div class="row"><pre><code>
public static $name;    //    静态属性
public static function func(){}    //定义静态方法
self::$VarName;    //访问静态属性
OjeactName->StaticFunctionName();( ClassName::StaticFunctionName(); )    //类的外面访问静态函数
self::StaticFunctionName(); ( $this->StaticFunctionName(); )    //类内静态函数
</code></pre></div>

<div class="row"><span class="txt">
构造函数：
1.构造函数没有返回值
2.主要对新对象的初始化，并不是创建本身。
3.一个类只有一个构造函数。PHP5中__construct()和类名()可以供存。
4.如果没有构造方法，则是使用系统默认的构造方法。
5.如果该类定义构造函数后默认的构造方法被覆盖。
6.构造方法的默认修饰符是 public
</span></div>
<div class="row"><pre><code>LANG</code></pre></div>

<div class="row"><span class="txt">TEXT</span></div>
<div class="row"><pre><code>
__get(属性名),__set(属性名,属性值);
当访问（protected ，private ，不存在）属性时候。__get(属性名);函数触发。通过__get();函数访问类的私有属性值。
当（protected ，private ，不存在）属性赋值时候。__set(属性名，属性值);函数触发。

__isset(属性名);__unset();
__isset(属性名);当不可访问的（protected ，private ，不存在）属性调用isset()或empty()时候，__isset(属性名)会被调用。
__unset();当不可访问的（protected ，private ，不存在）属性调用unset()时候，__unset()会被调用。

__toString();
当我们把一个对象当做字符串来使用的时候，默认触发类内的__toString();方法。

__clone();
新对象 = clone 就对象;
克隆对象会生成和全新的相等对象（不是全等）。会调用新对象的__clone()方法（函数）。private __clone()可以防止克隆。
当我们对象1 = clone 对象2 的时候，触发默认的__clone();函数。private function __clone() 的用处是防止别人clone对象
对象1==对象2通过一个类创建的两个对象属性和属性值相就成立。对象1===对象2如果对象1=对象2就全等。

__call();
在对象调用不可访问的（protected ，private ，不存在）函数的时候，__call(方法名称,参数合集);被触发。__call($m,$n);两个变量来接受。

静态属性和静态方法（函数）：
静态变量是属于类的，不属于对象。函数内使用self::$count;。默认值是 0 
静态方法（函数），我们操作静态属性可以使用静态函数操作，使用静态函数在没有实例化对象的情况下使用。静态方法中不能调用非静态属性。
普通成员函数，可以访问静态属性。
 
public static $name;
public static function $func(){}
 
self::$VarName; //访问静态属性
OjeactName->StaticFunctionName();( ClassName::StaticFunctionName(); ) //类的外面访问静态函数
self::StaticFunctionName(); ( $this->StaticFunctionName(); )  //类内静态函数
__callStatic();在静态方法中访问不可访问（private protected 没有的）的静态函数函数时候被调用。

继承：
子类继承父类的属性和方法的继承。父类的public和protected修饰符的属性和方法子类可以继承（ class 子类 extends 父类 ）子类只能继承一个父类。
当一个对象操作属性和函数时候现在子类查找，找不到的话然后在在父类中查找属性和方法，然后判断是否可以操作。如果父类没有到他上一级类查找。
子内没有自定义构造函数时候，调用父类的构造函数。子类中调用父类的函数（public protected）。子类和父类方法相同，叫重写。
$this->MyFunction();
FatherClassName::MyFunction();
parent::MyFunction();(parent::__construct();)

重写：
子类的方法和属性重写（覆盖）父类。属性也一样。
复制成功！

多态：
对象（类）在不同的情况下，有不同的状态。

抽象：
抽象类不能实例化，抽象类可以没有abstract方法（函数）。如果一个类继承了某个抽象类。则他必须实现该类的所有抽象方法。
如果一个类方法（函数）不确定，我们可以定义为抽象类。如果一个类中有一个抽象方法该类就定义为抽象类。抽象类的重点是其他类来继承它，
实现它的方法。可以有常量，类中方法abstract加上后，这个类必须为抽象类。

接口：
接口不能实例化，接口所有方法不能有主体。没有必要obstract来修饰。一个类中可以实现多个接口。所有方法都实现。接口中可以用常量。（常量属于类）接口方法必须是public。
接口之间接口是继承，接口和类之间是实现，类和类之间是继承。接口中属性不用public修饰，默认是public，接口不能继承类，但是可以同时继承接口。
 
interface A{  func();  }
class B implements A{  func(){ echo '输出'; }  }

类的前面（final class A）,A类不能继承。方法前面（final fucntion show()）,这个方法不能重写，但是可以继承。属性不能final来修饰。

类常量：
类中定义的常量需要初始化，除了对象以外的数据类型都可以。const前不写修饰符。可以继承。接口也可以定义常量。类常量是全局的。
const DAXIE = 2.4;
className::const;(self::const;)
interfaceName::const;

对象遍历内部（foreach($this as $key => $val)）通过调用函数来所有属性输出，外部只能public属性。

$pre = new stdClass();  //内置标准类
$obj = (object)$arr     //把数组转成对象stdClass
reflectionClass报告类的信息 //对象当字符串

对象序列化:
把对象属性名，属性类型和属性值都存储到文件中，还可以反序列化把对象重新恢复过来，反序列化时候把该类的定义引入进来。我们调试时候用。
把对象放入session中也用。 
serialize $obj;//序列化
unserialize($obj);//反序列化

trait:
trait类父类的概念相似，trait不能实例化，trait优先级比继承高，子类继承父类和调用trait相同名字的方法时候trait里方法优先。
trait A{ function show(){echo 'trait输出！';} }
class B{ use A; }//这样调用trait的方法

反射：
对类，函数，接口，方法和扩展进行反向工程。
查看类结构：
ReflectionClass::export($Class_Name);

类与对象相关函数：
class_exists('ClassName');//判断类是否存在
method_exists($ClassName,'func');//方法是否存在
property_exists('ClassName','name');
get_class($ClassName);//当前对象的类名

反射：
对类，函数，接口，方法和扩展进行反向工程。
查看类结构：
ReflectionClass::export($Class_Name);

</code></pre></div>

<div class="row"><span class="txt">TEXT</span></div>
<div class="row"><pre><code>LANG</code></pre></div>

<div class="row"><span class="txt">TEXT</span></div>
<div class="row"><pre><code>LANG</code></pre></div>


<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<div class="row"><hr></div>
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