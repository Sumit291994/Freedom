<html>
<head>
<link rel="stylesheet" href="css/style.css"/>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
  
<link href="css/bootstrap.min.css" rel="stylesheet">


<script type="text/javascript" language="javascript">
function reset()
{
win3=window.open("reset.php","win3","height=800, width=1200, status=1");
win3.moveTo(285,210);
}

function logout()
{
window.location.href="index.php";
window.close();
}


function enter()
{
win3=window.open("search/search.html","win3","height=1200, width=450, status=1");
win3.moveTo(285,210);
}

</script>
</head>
<body>
<!--<img src="textview.png" style="margin:0 ; position:absolute ; top:60 ; left:120 ; width: 70% ; height: 90%"/>
-->
<script type="text/javascript" language="javascript">
var check_cookie = "<?php echo $_COOKIE['users'] ?>";
if (check_cookie == "welcome")
{
window.location.href= "index.php";
}
</script>
<!--<input type="button"  value="Seach anything"  onClick="javascript:enter()" style="margin:0 ; position:absolute ;height : 5% ; width: 20% ;top:30 ; left:500"/>-->

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home1.php"><img src="img/logo.png" style= "height:35px; width:35px">&nbsp <img src="img/logo1.png" style= "height:35px; width:110px"></a>
        </div>
        <div class="navbar-collapse collapse">
         <ul class="mainnavi">
          <ul class="nav navbar-nav">
            <li ><a href="home1.php">Home</a></li>
            <li class="active"><a href="features.php">Features</a></li>
            <li><a href="about/about.php">About Us</a></li>
            
          </ul>
          </ul>
          <ul class="nav navbar-nav navbar-right">
         
            <li><a href="index.php">Logout</a></li>       
			
			<li><a href="javascript:reset()"> Reset Password </a><li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
</div>



<div class="container">
	<div class="row">
       
        <div class="col-lg-4">
      <br>
	  <br>
	  <br>

	  <div style="margin:0 ; position:absolute; top:250 ; left:20">
<figure><a href="chat/mychat.php"><img src="chat.gif" style="height:100 ; width:100"/></a>
<h4 style="color:orange">&raquo Chat</h4></figure>
</div>

<div style="margin:0 ; position:absolute; top:100 ; left:20" >
<figure><a href="friend.php"><img src="frnd.png" style="height:100 ; width:100"/></a>
<h4 style="color:orange">&raquo Friends</h4></figure>
</div>-

<div style="margin:0 ; position:absolute; top:250 ; left:380" >
<figure><a href="video.php"><img src="1.png" style="height:100 ; width:100"/></a>
<h5 style="color:orange">Freedom Videos</h5></figure>
</div>

<div style="margin:0 ; position:absolute; top:100 ; left:380" >
<figure><a href="javascript:enter()"><img src="search.png" style="height:100 ; width:100"/></a>
<h5 style="color:orange">Freedom Search</h5></figure>
</div>


<div style="margin:0 ; position:absolute; top:250 ; left:200" >
<figure><a href="gallery.php"><img src="gallery.png" style="height:100 ; width:100"/></a>
<h5 style="color:orange">Freedom Gallery</h5></figure>
</div>


<div style="margin:0 ; position:absolute; top:100 ; left:200" >
<figure><a href="album.php"><img src="album.png" style="height:100 ; width:100"/></a>
<h5 style="color:orange">My Photos</h5></figure>
</div>


<div style="margin:0 ; position:absolute; top:250 ; left:540" >
<figure><a href="game.php"><img src="game.png" style="height:100 ; width:100"/></a>
<h5 style="color:orange">Freedom Games</h5></figure>
</div>
	 

<div style="margin:0 ; position:absolute; top:100 ; left:720" >
<figure><a href="news/crawl.php"><img src="news.png" style="height:100 ; width:100"/></a>
<h5 style="color:orange">NEWS FEED</h5></figure>
</div>


<div style="margin:0 ; position:absolute; top:100 ; left:900" >
<figure><a href="all.php"><img src="all.png" style="height:100 ; width:100"/></a>
<h5 style="color:orange">Common Wall</h5></figure>
</div>

<div style="margin:0 ; position:absolute; top:115 ; left:540" >
<figure><a href="twit4.php"><img src="trend.png" style="height:80 ; width:80"/></a>
<h5 style="color:orange">Top Trends</h5></figure>
</div>


<div style="margin:0 ; position:absolute; top:250 ; left:720" >
<figure><a href="android.php"><img src="android.png" style="height:100 ; width:100"/></a>
<h5 style="color:orange">Android Application</h5></figure>
</div>


	 
		</div>
		
	</div>

</div>











<?php
error_reporting(0);
$t = $_COOKIE['users'];
$cb = $_POST['cb'];
$full = $_POST['full'];
$gender = $_POST['gender']; 
$date = $_POST['date'];
$month = $_POST['month'];
$year = $_POST['year'];
$d = $date."-".$month."-".$year; 
$address = $_POST['address']; 
$concat = "database/".$t.".txt";
$concatf = "database/full/".$t.".txt"; 
$concatd = "database/date"."/".$t.".txt"; 
$concatg = "database/gender/".$t.".txt"; 
$concatp = "database/parmanent/".$t.".txt";
if ($cb==1)
{
if ($full!=NULL)
{
$f = fopen($concatf,"w");
fwrite($f,"$full");
fclose($f);

$cook1=$t."\n" ;
$finis = 0;
$f= fopen("support/tmp_d.txt","r+");
$i=1;
while(!(feof($f))){
$q = fgets($f);
$q1 = $i % 2 ;
if($q1 == 0 && $q == $cook1 )
{
$finis = 1;
break;
}
$i=$i+1;
}
}

$g = fopen($concatg,"w");
fwrite($g,"$gender");
fclose($g);

if ($address!=NULL)
{
$p = fopen($concatp,"w");
fwrite($p,"$address");
fclose($p);
}

$dmy = fopen($concatd,"w");
fwrite($dmy,"$d");
fclose($dmy);
}


if((file_exists($concatf)))
{
$f=fopen($concatf,"r");
$fff = fgets($f);
fclose($f);
}

if((file_exists($concatg)))
{
$g=fopen($concatg,"r");
$ggg = fgets($g);
fclose($g);
}

if((file_exists($concatd)))
{
$d=fopen($concatd,"r");
$ddd = fgets($d);
fclose($d);
}

if((file_exists($concatp)))
{
$p=fopen($concatp,"r");
$ppp = fgets($p);
fclose($p);
}   
?>

<?php
error_reporting(0);
if ($_FILES["pic"]["type"]=="image/jpeg")
{
move_uploaded_file($_FILES["pic"]["tmp_name"],"database/pics/".$t.".jpg");
$piks = 1;
}
?>

<?php
if($finis == 1){
$f = fopen("support/garb_".$t.".txt","a");
$g = fopen("support/tmp_d.txt","r");
$j=0;
while(!(feof($g))){
$q = fgets($g);
if($j != $i-2){
fwrite($f,"$q");
}
else{
fwrite($f,"$full\n");
}
$j = $j+1;
}
fclose($f);
fclose($g);
rename("support/garb_".$t.".txt","support/tmp_d.txt");
}
?>


<?php        
$t = $_COOKIE['users'];
$bg = "database/theme/".$t.".jpg";

// Check if a text file exists. If not create one and initialize it to zero.
if (!file_exists($bg)) {
  echo '<body style="border: 50px white;background-image:url(blue4.jpg);  background-size: 100% 100%;; background-origin: content-box;background-repeat: no-repeat;">';
  }
else
{
 echo '<body style="border: 50px white;background-image:url('.$bg.');  background-size: 100% 100%;; background-origin: content-box;background-repeat: no-repeat;">';
}
?>


<script type="text/javascript" language="javascript" >
var x = "<?php echo $t ?>";
var y = "<?php echo $piks ?> ";
document.picture.src = "database/pics/"+x+".jpg"  ;
</script>

<script type="text/javascript" language="javascript">
var user_name = "<?php echo $t ?>";
var full_name = "<?php echo $fff ?>";
var gen = "<?php echo $ggg ?>";
var dat = "<?php echo $ddd ?>";
var perma = "<?php echo $ppp ?>";
document.getElementById('full_name').innerHTML = full_name;
document.getElementById('Gender').innerHTML = gen;
document.getElementById('date_birth').innerHTML = dat;
document.getElementById('per').innerHTML = perma;
</script>


</body>
</html>