<?php
$html = "";

$url = "http://gdata.youtube.com/feeds/api/users/movieclipsTRAILERS/uploads";  
$xml = simplexml_load_file($url);
for($i = 0; $i < 20; $i++)
{
	$id=$xml->entry[$i]->id;
	$id=str_replace("http://gdata.youtube.com/feeds/api/videos/","",$id);
	
	$html .= "<iframe width='320' height='240' align='center' src='http://www.youtube.com/embed/$id'></iframe>&nbsp" ;
}
echo $html;
?>