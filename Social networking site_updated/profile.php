<html>
<head>
<link rel="stylesheet" href="css/style.css"/>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
  
<link href="css/bootstrap.min.css" rel="stylesheet">


</head>
<body style="border: 50px white;background-image:url(img/blue4.jpg);  background-size: 100% 100%;; background-origin: content-box;background-repeat: no-repeat;">

<div style = "margin:0 ; position:absolute; top:405 ; left:10">
<b><u>STATUS:</u></b><h3 id="status" Style="color:green ; font-family:Arial ; text-align:center">I AM USING FREEDOM</h3>
<hr>
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
			</div>
		
	<div class="col-lg-4">
        
		<div >

<div style="margin:0 ; position:absolute; top:380 ; left:-260" >
<b><h4 id="vt" >No data Saved.</h4></b>
</div>
<a href="like1.php"><img src="like.png" style="margin:0 ; position:absolute; top:380 ; left:-320 ; height:35 ; width:35"/></a>


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
		



<?php

$profile = "profilesee.txt";
  $fp = fopen($profile, "r");
  $t = fgets($fp);
  fclose($fp);

error_reporting(0);
$concat = "database/".$t.".txt";
$concatf = "database/full/".$t.".txt"; 
$concatd = "database/date"."/".$t.".txt"; 
$concatg = "database/gender/".$t.".txt"; 
$concatp = "database/parmanent/".$t.".txt";
$concats = "database/status/".$t.".txt";
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
//$a = $_COOKIE['users'];
$profile = "profilesee.txt";
  $fp = fopen($profile, "r");
  $a = fgets($fp);
  fclose($fp);
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