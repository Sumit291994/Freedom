<html>
<head>
<script type="text/javascript" language="javascript">

function enter()
{

win3=window.open("xor.php","win3","height=1000, width=1000, status=1");
win3.moveTo(285,210);
}




</script>

</head>
<body>


<?php
$f = fopen("support/lst.txt","r");
$i = 0;
$entries = 0;
while(!(feof($f))){
$usr_tmp = fgets($f);
$length = strlen($usr_tmp)-1;
$usr[$i] = substr($usr_tmp,0,$length);
	if ($usr[$i] != NULL )
	{
	$entries = $entries + 1 ; 
	}
	$i = $i + 1;
	}

$m = 0;
while($usr[$m] != NULL)
{
$concat = "database/full/".$usr[$m].".txt" ;
$mm = fopen($concat,"r");
$read[$m] = fgets($mm);
fclose($mm);
$m = $m+1;
}

$i = 0;
$flag = 1;
while($i < $entries){

echo "<form name=\"frm$i\" action=\"sub2.php\" method=\"post\" style=\"margin:0 ;position:absolute ; left:0 \"><table border=\"1\" style=\"height:65 ; width:700\"><tr><td align=\"center\"><img name=\"image\" style=\"height:50 ; width:50\" /></td><td align=\"center\">User name:$usr[$i]</td><td align=\"center\">Full name:$read[$i]</td><td align=\"center\"><a href=\"javascript:enter()\">View Profile</a></td><td align=\"center\"><input type=\"submit\" value=\"Add\" /><input type=\"hidden\" name=\"hide\" /></td></tr></table></form><br/><br/><br/><br/>";
echo "<script type=\"text/javascript\">";
echo " document.frm$i.hide.value=\"$usr[$i]\" ; ";
echo " document.frm$i.image.src=\"database/pics/\"+\"$usr[$i]\"+\".jpg\" ";
echo "</script>";


if($flag==1)
{
$profile = "profilesee.txt";
  $fp = fopen($profile, "w");
  fwrite($fp,$usr[$i]);
  fclose($fp);
$flag=0;
  }

$i=$i+1;

}
?>

<?php
error_reporting(0);
$hide = $_POST['hide'];
$cook = $_COOKIE['users'];
$avail = file_exists("database/notification/".$cook.".txt");
$stop = 0;

if($avail){
$x = fopen("database/notification/".$cook.".txt","r");
while(!(feof($x))){
$y=fgets($x);
if($y == $hide."\n"){
$stop = 1;
break; 
}
}
}

if($hide != $_COOKIE['users'] && $hide != NULL && $stop == 0)
{
$error = 0;
$request = fopen("database/request/".$hide.".txt","a");
fwrite($request,"$cook\n");
fclose($request);

$notifiy = fopen("database/notification/".$cook.".txt","a");
fwrite($notifiy,"$hide\n");
fclose($notifiy);
}

if($hide == $_COOKIE['users'] && $hide != NULL){
$error = 1;
}
?>

<script type="text/javascript">
var err = "<?php echo $error ?>";
var stop1 = "<?php echo $stop ?>";
var hid = "<?php echo $hide ?>";
if(err == 1)
{
alert("ERROR: You can not send friend request to yourself !!");
}
if(stop1 == 1)
{
alert("Your request to "+hid+" is already sent !!");
}
</script>


</body>
</html>