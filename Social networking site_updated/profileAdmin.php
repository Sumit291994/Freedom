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
<body style="border: 50px white;background-image:url(img/blue4.jpg);  background-size: 100% 100%;; background-origin: content-box;background-repeat: no-repeat;">

<div style = "margin:0 ; position:absolute; top:405 ; left:10">
<b><u>STATUS:</u></b><h3 id="status" Style="color:green ; font-family:Arial ; text-align:center">I AM USING FREEDOM</h3>
<hr>
</div>

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
            <li class="active"><a href="home1.php">Home</a></li>
            <li><a href="features.php">Features</a></li>
			 <li><a href="remove.php">Remove User</a></li>
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
	  
			<div style = "border: 1px white; padding: 35px;">
			<img name="picture" border="2" style=" height:250 ; width:220 ;"/>

			</div>
<!--
	  <div style="margin:0 ; position:absolute; top:475 ; left:90">
<figure><a href="chat/mychat.php"><img src="chat.gif" style="height:55 ; width:55"/></a>
<h4 style="color:orange">&raquo Chat</h4></figure>
</div>

<div style="margin:0 ; position:absolute; top:475 ; left:0" >
<figure><a href="friend.php"><img src="frnd.png" style="height:55 ; width:55"/></a>
<h4 style="color:orange">&raquo Friends</h4></figure>
</div>-

<div style="margin:0 ; position:absolute; top:475 ; left:180" >
<figure><a href="video.php"><img src="1.png" style="height:55 ; width:55"/></a>
<h5 style="color:orange">Freedom Videos</h5></figure>
</div>

<div style="margin:0 ; position:absolute; top:475 ; left:280" >
<figure><a href="javascript:enter()"><img src="search.png" style="height:55 ; width:55"/></a>
<h5 style="color:orange">Freedom Search</h5></figure>
</div>


<div style="margin:0 ; position:absolute; top:340 ; left:280" >
<figure><a href="gallery.php"><img src="gallery.png" style="height:55 ; width:55"/></a>
<h5 style="color:orange">Freedom Gallery</h5></figure>
</div>


<div style="margin:0 ; position:absolute; top:220 ; left:280" >
<figure><a href="album.php"><img src="album.png" style="height:55 ; width:55"/></a>
<h5 style="color:orange">My Photos</h5></figure>
</div>


<div style="margin:0 ; position:absolute; top:340 ; left:180" >
<figure><a href="game.php"><img src="game.png" style="height:55 ; width:55"/></a>
<h5 style="color:orange">Freedom Games</h5></figure>
</div>
-->
	  
		</div>
		<div class="col-lg-4">
        
		<div >

<div style="margin:0 ; position:absolute; top:380 ; left:-260" >
<b><h4 id="vt" >No data Saved.</h4></b>
</div>
<a href="like2.php"><img src="like.png" style="margin:0 ; position:absolute; top:380 ; left:-320 ; height:35 ; width:35"/></a>


<div >
 <br>
	  <br>
	  <br>
<h1 Style="color:Brown ; font-family:Harlow Solid ; text-align:center" >About Me:</h1>
<h3>Full Name:</h3><h3 id="full_name" Style="color:purple ; font-family:Arial ; text-align:center">No data Saved.</h3><hr>
Gender:<h3 id="Gender" Style="color:purple ; font-family:Arial ; text-align:center">No data Saved.</h3><hr>
Date of Birth:<h3 id="date_birth" Style="color:purple ; font-family:Arial ; text-align:center">No data Saved.</h3><hr>
Permanent Add.:<h3 id="per" Style="color:purple ; font-family:Arial ; text-align:center">No data Saved.</h3>

</div>
</div>
</div>
		
		
		<!-- /.col-lg-4 -->
        <div class="col-lg-4">
         	<br>
			<br>
			<br>
			
			
			<br>
			
			 
		<div >
<fieldset>
<legend><h1 Style="color:Brown ; font-family:Harlow Solid ; text-align:center" >Profile Settings :</h1></legend> 
<form name="pro" action="profileAdmin.php" method="post">
<table>
<tr>Full Name:
<input type="text" name="full" size="25"/>
</tr><br/><br/><br/>
<tr>Gender:&nbsp &nbsp
Male<input type="radio" name="gender" value="male" checked="true"/> &nbsp &nbsp
Female<input type="radio" name="gender" value="female"/>
</tr><br/>
<br/><br/>
<tr>
Date of birth:
<select name="date">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>&nbsp


<select name="month">
<option value="jan">Jan</option>
<option value="feb">Feb</option>
<option value="march">March</option>
<option value="april">April</option>
<option value="may">May</option>
<option value="june">June</option>
<option value="july">July</option>
<option value="aug">Aug</option>
<option value="sept">Sept</option>
<option value="oct">Oct</option>
<option value="nov">Nov</option>
<option value="dec">Dec</option>
</select>&nbsp


<select name="year">
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
</tr><br/><br/><br/>
<tr>
Parmanent address:<br>
<textarea name="address" rows="4" cols="25" value="" style="font-size:20 ; font-style:bold">
</textarea>
</tr><br/><br/>
<input type="checkbox" name="cb" value="1"/>Yes,I want to save my profile.<br/><br/>
<input type="submit" value="Save"/><br/>
<hr/>
<br/><br/>
</form>


<form name ="file" action="home1.php" method="post"
enctype="multipart/form-data">
<label for="file">Profile Pic:</label>
<input type="file" name="pic" id="file" /> 
<br /><br/>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp 
<input type="submit" name="submit" value="Upload" />
</form>
</fieldset>
</div>	 
                       
		
        </div><!-- /.col-lg-4 -->
	</div>

</div>











<?php
error_reporting(0);

$profile = "profilesee.txt";
  $fp = fopen($profile, "r");
  $t = fgets($fp);
  fclose($fp);



$cb = $_POST['cb'];
$full = $_POST['full'];
$gender = $_POST['gender']; 
$date = $_POST['date'];
$month = $_POST['month'];
$year = $_POST['year'];
$d = $date."-".$month."-".$year; 
$address = $_POST['address'];
$status = $_POST['status']; 
$concat = "database/".$t.".txt";
$concatf = "database/full/".$t.".txt"; 
$concatd = "database/date"."/".$t.".txt"; 
$concatg = "database/gender/".$t.".txt"; 
$concatp = "database/parmanent/".$t.".txt";
$concats = "database/status/".$t.".txt";

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


if ($status!=NULL)
{
$p = fopen($concats,"w");
fwrite($p,"$status");
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

if((file_exists($concats)))
{
$s=fopen($concats,"r");
$sss = fgets($s);
fclose($s);
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
//session_start();
error_reporting(0);
$a = $t;
$c = "database/likes/".$a.".txt" ;

$counter_name = $c;

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
var status = "<?php echo $sss ?>";
var likes = "<?php echo $counterVal ?>";
document.getElementById('full_name').innerHTML = full_name;
document.getElementById('Gender').innerHTML = gen;
document.getElementById('date_birth').innerHTML = dat;
document.getElementById('per').innerHTML = perma;
document.getElementById('vt').innerHTML = likes;
document.getElementById('status').innerHTML = status;
</script>


</body>
</html>