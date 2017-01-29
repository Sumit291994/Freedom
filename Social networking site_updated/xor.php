

<?php
//error_reporting(0);
$t = $_COOKIE['users'];
if($t == "admin")
{
include 'profileAdmin.php' ; 
}


else
{
include 'profile.php' ;
}


?>