<html>
<head>
<link rel="stylesheet" href="css/style.css"/>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
  
<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body style = "Background-color :#000000">



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
            <li class="active"><a href="home1.php">Home</a></li>
            <li><a href="features.php">Features</a></li>
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


		
		<!-- /.col-lg-4 -->
        <div class="col-lg-4">
         	
			<br>
			
			 
		<div style = "margin:0 ; position:absolute; top:250 ; left:20">
<form name="pro" action="all.php" method="post">
<b>Comment</b>:<br>
<textarea name="st" rows="3" cols="45" value="" style="font-size:20 ; font-style:bold">
</textarea>
<input type="submit" value="Send"/><br/>
<hr/>
<br/><br/>
</form>

</div>	 
                       
		
        </div>



<div class="container">
	
<h3 id="status" Style="color:purple ; font-family:Arial; font-size:17 ;top : 80 ; left: 700 ;margin:0 ; position:absolute;">

<?php
$file = "database/allcomment/common.txt";
$f = fopen($file, "r") or exit("Unable to open file!");
// read file line by line until the end of file (feof)
while(!feof($f))
{
  echo fgets($f)."<br />";
}
 
fclose($f);
?>


</h3>

</div>

		


<?php
error_reporting(0);
$t = $_COOKIE['users']; 
$sta = $_POST['st'];
$concats = "database/allcomment/common.txt";

$data =  "<br><b><u>$t</u></b>";
file_put_contents($concats, $data, FILE_APPEND);
$data =  "<br>$sta<hr>";
file_put_contents($concats, $data, FILE_APPEND);



?>




</body>
</html>