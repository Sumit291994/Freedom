<body style="background-image:url(img/blue4.jpg)">

<div id="twits">
<h1 style="font-family:Comic Sans MS;color:red;"> Top Twitter Trends Worldwide ( Past 30 Days) 


</div>
<?php

include_once('simple_html_dom.php');
$target_url = "http://www.whatthetrend.com/top10";
$html = new simple_html_dom();
$t=0;
$html->load_file($target_url);
foreach($html->find('<td style="font-size:120%">') as $twits)
{
$t=$t+1;
if($t>1)
break;

echo $twits."&nbsp &nbsp &nbsp ";
}


//
?>
</body>