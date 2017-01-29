<html>
<head>
</head>
<body>


<hr>
<?php
include_once('simple_html_dom.php');
$target_url = "http://wallpaperscraft.com/tag/art";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('img') as $img)
{
//echo $img->src."<br />";
echo $img."&nbsp &nbsp &nbsp ";
}
?>


<hr>
<?php
include_once('simple_html_dom.php');
$target_url = "http://wallpaperscraft.com/tag/breaking%20bad";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('img') as $img)
{
//echo $img->src."<br />";
echo $img."&nbsp &nbsp &nbsp ";
}
?>

<hr>
<?php
include_once('simple_html_dom.php');
$target_url = "http://wallpaperscraft.com/tag/game%20of%20thrones";
$html = new simple_html_dom();
$html->load_file($target_url);
foreach($html->find('img') as $img)
{
//echo $img->src."<br />";
echo $img."&nbsp &nbsp &nbsp ";
}
?>

</body>
</html>