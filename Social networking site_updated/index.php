

<?php
setcookie("users","welcome");
?>

<html>
<head>
<title>FreeDom  : Make Friends , chat , Hangout with friends  </title>

 <!--<link rel="stylesheet" href="css/style.css"/> -->

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <link href="css/back.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">



    <link href="themes/3/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/3/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .cap  {width:190px;height:240px;display:inline-block;background:white url(images/caption1.gif) no-repeat 0 0;border-radius:4px;}
        .cap2 {background-image:url(images/caption2.gif)}
        .cap3 {background-image:url(images/caption3.gif)}
        .cap4 {background-image:url(images/caption4.gif)}
    </style>

<script type="text/javascript" scr="index.php" language="javascript">
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}

function enter()
{
window.location.href="about/about.php" ;
window.close();
}

function enterAd()
{
win3=window.open("indexgallery.php","win3","height=550, width=1000, status=1");
win3.moveTo(285,210);
}

</script>
</head>
<body style="background-image:url(img/blue4.jpg)" onload="javascript:startTime()">

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="img/logo.png" style= "height:35px; width:35px">&nbsp <img src="img/logo1.png" style= "height:35px; width:110px"></a>
        </div>
        <div class="navbar-collapse collapse">
         <ul class="mainnavi">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            
            <li><a href="about/about.php">About Us</a></li>
            
          </ul>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li >
            <!--  if u want to add anything on the right side of the navbar then do it u ****er..  -->        
         </li> 
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
</div>

 <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/aa1.jpg" style= "height:500px" alt="First slide">
          
        </div>
        <div class="item">
          <img src="img/aa2.jpg" style= "height:500px" alt="Second slide">
          
        </div>
        <div class="item">
          <img src="img/frr1.jpg" style= "height:500px" alt="Third slide">
            
        </div>
      </div>
    
    </div><!-- /.carousel -->
    

<div id="banner">

  
    <div class="container marketing">
    <div class="row">
       
        <div class="col-lg-5">
      <!--   <form class="form" role="form" method="post" action="index1.php">
      <div id="myown2">  <h2 class="form-signin-heading">Please sign in</h2> </div>
        <input type="text" name="user" class="form-control" size="25" placeholder="User Name" /><br>
        <input type="password" class="form-control" name="pass" size="25" placeholder="Password" /><br>        
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me<br>
        </label>
        <button class="btn btn-lg btn-danger btn-block" type="submit" name="login">Sign in</button>
      </form>
	  -->
	  <form class="form" role="form" action="index.php" method="post">

<div id="myown2">  <h2 class="form-signin-heading">Please sign in</h2> </div>
<input type="text" class="form-control" size="25" name="user" placeholder="User Name"/>  <br>
<input type="password" class="form-control" size="25" name="pass" placeholder="Password"/> <br>
<label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me<br>
        </label>
<button class="btn btn-lg btn-danger btn-block" type="submit" name="">Sign in</button>
<!--<input type="image" value="" style="position:absolute; top:1px ; left:475px ; height:120% ; width:25%; z-index:8" src="login.png" /> -->
</form>
	  
      </div>
  <div class="col-lg-3">
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
         	  <br>
              <br>
              <br>
              <div id="myown2"><h2 > If You Are New .. Sign UP here </h2><br><br>
				</div>
          <p><a class="btn btn-danger" href="registration1.php" role="button" >Sign Up</a></p>
                       
				
			
			

        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->
<br><br><br>

      <div class="row featurette">
        <div class="col-md-7">
          <div id="myown">
          <h2 class="featurette-heading">FREEDOM</h2>
          
		  
		  <br>
		   <img src="text.gif" style="margin:0 ; position:absolute ; height:70px ; width:350px; z-index :100"/>
         <br>
		 <br>
		 <br>
		 <span class="myown"><h3>..The Social Network For Meeting New People</h3></span>
		  </div>
        </div>
        <div class="col-md-5">
         
		 <!-- add more features if u want to in the bottom right corner .. by ADDING IT HERE  -->
<figure>
<h4 style="color:Black">&raquo Advertising:</h4>
<a href="javascript:enterAd()"><img src="iPhone-6.png" style="height:80 ; width:80"/></a>
</figure>

<div id="top-right>
<img style= "height:50px; width:50px ; z-index:10 " float="right" src="visitor.png"/>
<br>
Visitor No :<b><h4 id="vt" >No data Saved.</h4></b>
<hr>
<img style="margin:0 ; position:absolute; top : 80px : left:100px; WIDTH:150px; HEIGHT:150px" SRC="image0.gif"/>


</div>

        </div>
      </div>

      <div id="toTop" style="display: block;"><a href="#">^ Back to Top </a></div>

      <!-- /END THE FEATURETTES -->
	  
	  <!-- FOOTER -->
      <br><br><br><br><br>
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        
      </footer>
	  
</div>
<!--
<img src="text.gif" style="margin:0 ; position:absolute ; top:350 ; left:50; height:12% ; width:24%; z-index :100"/>
<img src="skull.png" style="margin:0 ; position:absolute ; top:120 ; left:590 ; width: 2.9% ; height: 5%"/>
<h1 style="margin:0 ;position:absolute;top:100 ;left:100 ; color:#008FB2" id="txt"></h1>
<h2 style="margin:0 ;position:absolute;top:200 ;left:10 ; color : gray">The social network for meeting <br></h2>
<img src="new.png" style="margin:0 ; position:absolute ; top:220 ; left:200 ; height:10% ; width:15%;"/>
<form style=" margin:0 ; position:absolute;top:420 ; left:200;  z-index:100" action="index.php" method="post">
<table>
<td>
User:&nbsp<input type="text" name="user"/></td>
<td>&nbsp &nbsp Password:&nbsp &nbsp<input type="password" name="pass"/></td> 
</table>
<input type="image" value="" style="position:absolute; top:1px ; left:475px ; height:120% ; width:25%; z-index:8" src="login.png" />
</form>

<img style="margin:0 ; position:absolute; top:0px; left:0px ; height:75px; width:1365px ; z-index:10" src="line.jpg"/>
<img style="margin:0 ; position:absolute; top:4px; left:10px ; height:10%; width:5%; z-index:100" src="logo.png"/>
<img style="margin:0 ; position:absolute; top:0px; left:80px ; height:12%; width:20%; z-index:100" src="logo1.png"/>
<!--<img style="margin:0 ; position:absolute; top:21px; left:1165px; height:5% ; width:8%; z-index:100" src="Login-Button.png" />-->

<!--
<center>
<h4>Sumit Bansal</h4>
<h4>Dhruv Singh</h4>
<h4>Vrishti Gahlaut</h4>
<h4>Hamza Khan</h4></center>
-->
<!--<br>
<br>
<hr>
<h2 style = "color : #008FB2  "><u>Freedom: Friends & chat</u> &nbsp </h2>

<h3 class="bansal">Free To Explore And &nbsp &nbsp <br> &nbsp &nbsp &nbsp Discuss on messages</h3>
<!--<p class="bansal" style="font-size:24px font-style:bold">Btech</p>-->


<!--<input type="button"  value="About Freedom"  onClick="javascript:enter()" style="margin:0 ; position:absolute ; top:220 ; left:80"/>-->










<?php
error_reporting(0);
$a= $_POST['user'];
$b= $_POST['pass'];
if($a=="admin")
$b= md5($b);
$c = "database/".$a.".txt" ;
$f= fopen($c,"r");
$r = fgets($f);
fclose($f);


if ($r == $b && $b != NULL) 
{
$login = 1 ;
$g= fopen("tmp.txt","w");
fwrite($g,"$a");
fclose($g);

$l = fopen("tmp.txt","r");
$rr = fgets($l);
fclose($l);
if( $_COOKIE['users'] == "welcome")
{
setcookie("users",$rr);
}
}

if ($r != $b)
$login = 0; 
?>


<?php
session_start();
$counter_name = "counter.txt";

// Check if a text file exists. If not create one and initialize it to zero.
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}

// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

// Has visitor been counted in this session?
// If not, increase counter value by one
if(!isset($_SESSION['hasVisited'])){
  $_SESSION['hasVisited']="yes";
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f); 
}

?>

<script type="text/javascript">
var usr =  "<?php echo $a ?>";
var log = "<?php echo $login ?>";
var visitor = "<?php echo $counterVal ?>";

if(usr != "" && log == 1)
{
window.location.href= "home1.php?usr="+usr; 
}



document.getElementById('vt').innerHTML = visitor;


</script>

</body>
</html>
