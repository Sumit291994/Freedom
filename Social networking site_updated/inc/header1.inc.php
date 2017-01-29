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
        <title>Freedom</title>
        <link href="../css/new.css" rel="stylesheet" />
        
        
    </head>
    <body>
        
            <div id="wrapper">
                <div id="logo">
                    <img src="./img/logo.png">
                </div>
                
                <?php 
                    if(!$username){
                        echo '<div id="top-left">
                                
								<a class="top1" href="x.php"/>Home</a>
                                <a class="top1" href="#"/>About Us</a>
                                
                              </div>';
                    }else{
                        echo '<div id="top_nav">
                                
								<a class="top1" href="home.php"/>Home</a>
                                <a class="top1" href="'.$username.'"/>Timeline</a>
                                <a class="top1" href="logout.php"/>Logout</a>
                              
							  </div>';
                    }
                ?>
                <br><br><br>
            </div>
        