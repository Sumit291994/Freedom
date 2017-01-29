<html>
<body style = "background-image:url(blue4.jpg)">
<?php
    
													
include "crawl2.php";
$url1="world";
function addhttp($url1) {
        $url = "http://timesofindia.indiatimes.com/".$url1;
    return $url;
}

function article($url,$head)
{
	$html=file_get_html($url);
	foreach ($html->find('strong') as $node) {
	    $node->outertext = '';
	}
	foreach ($html->find('div[class=Normal] a') as $node) {
	    $node->outertext = $node->innertext;
	}
	foreach ($html->find('div[id=gads]') as $node) {
	    $node->outertext = '';
	}
	$data=$html->find('div[class=Normal]');
	$data1=$html->find('div[id=LeftData] img');
	
	$x=1;
	foreach($data as $i )
	{
		$article=$i->innertext;
			
		foreach($data1 as $i)
		{
			
			$img=$i->src;	//LINK TO IMAGE
			$image=addhttp($img);
			
			//$query="INSERT INTO topic_news (topic_id,headline,article,image) VALUES('$_REQUEST[url1]','$headl','$art','$img')";
			//$result = mysql_query($query) or die('Query failed: ' . mysql_error());
			
			
			echo $head->plaintext."<br/>";
			echo $article."<br/>";	//ARTICLE
		
			echo "<img src=".$image." />";
			
			
		//	$url1 = addhttp($url1);
		//	echo $url1;
		
		break;
		}	
		break;
	}
	echo "<br><br>-----------------------------------------------------------------------------------------------------------------------------------------------------<br><br>";
}
function headings($url)
{
	$html=file_get_html($url);
	$data=$html->find('div[id=fsts] a');
	
	foreach($data as $i)
	{
		$url2="http://timesofindia.indiatimes.com".$i->href;	//LINK TO ARTICLE
		article($url2,$i);
	}
}
//$url1=addhttp($_GET['url1']);

$url=addhttp($url1);
headings($url);


?>
</html>
</body>