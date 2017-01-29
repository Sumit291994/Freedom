<html>
<head/>
<body>
<?php
error_reporting(0);
$cook = $_COOKIE['users'];
$avail = file_exists("database/friend/".$cook.".txt");
if($avail){
$f = fopen("database/friend/".$cook.".txt","r");
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


$i = 0;
while($i < $entries){
echo "<form name=\"frm$i\" action=\"sub1.php\" method=\"post\" style=\"margin:0 ;position:absolute ; left:0 \"><table cellpadding=\"5\"><tr><td align=\"center\"><a href=\"profile.php\"><img name=\"image\" style=\"height:75 ; width:75 \" /></a></td><td></td><td align=\"right\" style=\"color:blue ; text-size:18\">     $usr[$i]</td></tr></table></form><br/><br/><br/><br/><hr/>";
echo "<script type=\"text/javascript\">";
echo " document.frm$i.image.src=\"database/pics/\"+\"$usr[$i]\"+\".jpg\" ";
echo "</script>";
$i=$i+1;
}}
?>

</body>
</html>