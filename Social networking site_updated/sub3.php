<html>
<head>

</head>
<body>

<?php
error_reporting(0);
$cook = $_COOKIE['users'];
$chk1 = file_exists("database/request/".$cook.".txt");
$chk2 =  file_exists("database/notification/".$cook.".txt");
$entries1=0;
$entries=0;
if($chk2)
{
$f = fopen("database/notification/".$cook.".txt","r");
$i = 0;
while(!(feof($f)))
{
$usr_tmp = fgets($f);
$length = strlen($usr_tmp)-1;
$note[$i] = substr($usr_tmp,0,$length);
	if ($note[$i] != NULL )
	{
	$entries = $entries + 1 ; 
	}
	$i = $i + 1;
}
fclose($f);

}



if($chk1)
{
$g = fopen("database/request/".$cook.".txt","r");
$j = 0;
while(!(feof($g)))
{
$usr1_tmp = fgets($g);
$length1 = strlen($usr1_tmp)-1;
$req[$j] = substr($usr1_tmp,0,$length1);
	if ($req[$j] != NULL )
	{
	$entries1 = $entries1 + 1 ; 
	}
	$j = $j + 1;
}
fclose($g);
}
?>

<?php
$i= 0;
$done=0;
echo "<p>Requests which are on waiting:</p><hr/>";
while($i < $entries)
{
echo "<ul style=\"background-color:orange\"><li>YOU ---> $note[$i] </li></ul>";
$i = $i+1;
}
echo "<hr/>";

$j=0;
while($j < $entries1)
{
echo "<form name=\"frm$j\" action=\"sub3.php\" method=\"post\" style=\"background-color:#AEE655\"><ul><li>$req[$j] ---> YOU</li></ul><select name=\"opt\">&nbsp &nbsp<option value=\"accept\">Accept</option><option value=\"Ignore\">Ignore</option></select><input type=\"hidden\" name=\"hide\" /><input type=\"submit\" value=\"Save\"/><hr/></form>";
echo "<script type=\"text/javascript\">";
echo " document.frm$j.hide.value=\"$req[$j]\" ; ";
echo "</script>";
$j = $j+1;
}
?>

<?php
$hide = $_POST['hide'];
$opt = $_POST['opt'];
$garb = 0 ;

$avail = file_exists("database/friend/".$cook.".txt");
$stop = 0;

if($avail){
$x = fopen("database/friend/".$cook.".txt","r");
while(!(feof($x))){
$y=fgets($x);
if($y == $hide."\n"){
$stop = 1;
break; 
}
}
}

if($opt == "accept" && $stop == 0)
{
$l = fopen("database/friend/".$cook.".txt","a");
$ll = fopen("database/friend/".$hide.".txt","a");
fwrite($l,"$hide\n");
fwrite($ll,"$cook\n");
fclose($l);
fclose($ll);
$garb = 1 ;
}

if($garb == 1){
$y= fopen("database/request/garb_".$cook.".txt","w");
fclose($y);
$x= fopen("database/request/".$cook.".txt","r");
$y= fopen("database/request/garb_".$cook.".txt","a");
$new_var = $hide."\n";
while(!(feof($x))){
$xx = fgets($x);

if($xx != $new_var)
{
fwrite($y,"$xx");
}

}
fclose($x);
fclose($y);
rename("database/request/garb_".$cook.".txt","database/request/".$cook.".txt");
$done=1;
}

?>
</body>
</html>