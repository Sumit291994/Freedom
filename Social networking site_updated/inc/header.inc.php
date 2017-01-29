<?php 
include("connect.inc.php");
session_start();
if(!isset($_SESSION["user_login"])){
    $username = "";
}
else{
   $username = $_SESSION["user_login"];
}
?>
<!doctype html> 
<html>
<head>
    
  

    <title>front page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/form.css" rel="stylesheet">
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
  </head>

    
                <?php 
                    if(!$username){
                        echo ' <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="main.php"><img src="img/logo2.jpg" height=60px></a>
        </div>
        <div class="navbar-collapse collapse">
         <ul class="mainnavi">
          <ul class="nav navbar-nav">
            <li class="active"><a href="main.php">Home</a></li>
            
            <li><a href="aboutus.php">About Us</a></li>
            
          </ul>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li ><div class="searchbox">
                    <form id="cse-search-box" action="http://www.google.com/cse">
					
					<input type="text" size="19" name="q">
					<input type="submit" value="Search" name="sa">
					</form> 
          </div></li> 
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </div>  ';
                    }else{
                        echo ' <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php"><img src="img/logo2.jpg" height=60px></a>
        </div>
        <div class="navbar-collapse collapse">
         <ul class="mainnavi">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Profile</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="logout.php">Log Out</a></li>
            
          </ul>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li ><div class="searchbox">
                    <form id="cse-search-box" action="http://www.google.com/cse">
					<input type="text" size="19" name="q">
					<input type="submit" value="Search" name="sa">
					</form> 
          </div></li> 
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </div>  ';
                    }
                ?>
            </html>