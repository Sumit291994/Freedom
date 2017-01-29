<html>
<head>
<link rel="stylesheet" href="css/style.css"/>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <link href="css/back.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">


<script type="text/javascript" scr="registration1.php" language="javascript">
function check()
{
var name=document.reg.user.value;
var pass=document.reg.pass.value;
var re=document.reg.re.value;
var full =document.reg.full.value;

if(name == "" || pass == "" || re == "" || full == ""){
document.getElementById('txt').innerHTML="All fields are compulsory !" ;
setTimeout("",60);
}
}

function back()
{
window.location.href="index.php";
window.close();
}
</script>
</head>
<body style="background-image:url(img/blue4.jpg)">

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="img/logo.png" style= "height:35px; width:35px">&nbsp <img src="img/logo1.png" style= "height:35px; width:110px"></a>
        </div>
        <div class="navbar-collapse collapse">
         <ul class="mainnavi">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
            
            <li><a href="about/about.php">About Us</a></li>
            
          </ul>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li >
            <!--  if u want to add anything on the right side of the navbar then do it u ****er..  -->        
         </li> 
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
</div>


<div>


<!--<input type="button" value="Back" onClick="javascript:back()" style="margin:0 ; position:absolute ; top:600 ; left:600 ; width: 15% ; height: 5%"/>-->
</div>





  <div class="container">
<br>
<br>
<br>
<br>
<div class="row">
       
        <div class="col-lg-4">
		
      <form class="form-signin" name="reg" role="form" action="#" method="POST">
       <div id="myown2"> <h2 class="form-signin-heading">Please sign up</h2> </div><br>
        <input type="text" class="form-control" name="full"  placeholder="Full Name" ><br>
        
        <input type="text" class="form-control" id="name" name="user" placeholder="User Name"><br>
       
        <input type="password" class="form-control" name="pass" placeholder="Password" ><br>
        <input type="password" class="form-control" name="re" placeholder="Confirm Password" > <br>
		<div id="myoo"> <b>Please Enter The Caption Given ..  &nbsp ( Ignoring cases )</b></div> 
		<img src="captcha.jpg" style="margin:0 ; position:absolute  ; height : 50px ; width : 200px"/>
<br>
<br>

<br>
		 <input class="form-control" type="text" name="captcha" ><br>
        <input type="submit" name="reg" value="Sign Up" onClick="check()"  >
      </form>
<h2 id="txt" style="color:red"></h2>
<h2 id="confirm" style="color:green"></h2>

</div>

 <div class="col-lg-8">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/Group-Chat.jpg" style= "height:500px" alt="First slide">
          
        </div>
        <div class="item">
          <img src="img/frr12.jpg" style= "height:500px" alt="Second slide">
          
        </div>
        <div class="item">
          <img src="img/aa1.jpg" style= "height:500px" alt="Third slide">
            
        </div>
      </div>
    
    </div><!-- /.carousel -->

    </div>

</div>
</div>

<!--

<form name="reg" style="position:absolute; top:170; left:525 ; color : #008FB2  " id="myform" method="post" action="registration.php">
<fieldset style="height:400 ; width:300">
Full Name:&nbsp &nbsp<input type="text" name="full" size="25"/><br/><br/><br/>
<fieldset style="width:250">
<legend>Registration Form:</legend>
<table style = "color : #008FB2">
<tr>
<td>User name: &nbsp   &nbsp<input type="text" id="name" name="user" size="20"/></td>
</tr>
<tr></tr><tr></tr>
<tr>
<td>Password:&nbsp  &nbsp &nbsp<input type="password" name="pass" size="20"/></td>
</tr>
<tr></tr><tr></tr>
<tr>
<td>  Confirm:&nbsp &nbsp &nbsp &nbsp <input type="password" name="re" size="20"/></td>
</tr>
</table>
</fieldset><br/>
<br>
<td>  Captcha:&nbsp &nbsp &nbsp &nbsp

<img src="captcha.jpg" style="margin:0 ; position:absolute  ; height : 18% ; width : 25 %"/>
<br>
<br>
<br>
<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 <input type="text" name="captcha" size="20"/></td>
 <br>
 <hr>
 
<input type="image" value="" style = "margin:0 ; position:absolute ; left: 110 ; width: 35% ; height: 8%" onClick="check()" id="cheeck" src="register_button.png" />

</fieldset>
</form>



-->






<?php
error_reporting(0);

$name = $_POST['user'];
$pass = $_POST['pass'];

//$encrypt_password=md5($pass);
$re = $_POST['re'];
if($name=="admin")
{
$pass = md5($pass);
$re = md5($re);
}
$full = $_POST['full'];
$captcha = $_POST['captcha'];
$concat = "database/".$name.".txt";
$check = file_exists("database/".$name.".txt");
$result=1;
$flag=0;

if($pass != $re)
{
$result = 0;
}
if($captcha == "zvogqp")
{	
$flag=1;
}

if(!($check)){
if($name != NULL && $pass != NULL && $re != NULL && $full != NULL && $result != 0 ) 
{
$confirm = 1 ;
if( $flag == 1)
{
$f = fopen($concat,"x");
fwrite($f,"$pass");
$h = fopen("support/tmp_d.txt","a");
fwrite($h,"$full\n");
fwrite($h,"$name\n");
fclose($h);


$mn = fopen("database/full/".$name.".txt","w");
fwrite($mn,"$full");
fclose($mn);
}
}
}
else if($check)
{
$var = 2 ;
}
fclose($f);
?>

<script type="text/javascript" language="javascript">

var res = "<?php echo $result  ?> ";
var rest = "<?php echo $var  ?> ";
var confirm = "<?php echo $confirm ?> ";
var flag = "<?php echo $flag ?> ";


if(rest == 2)
{
document.getElementById('txt').innerHTML = "User already exists. Try another user name ! " ;
}

if(res == 0)
{
document.getElementById('txt').innerHTML = "Password do not match!" ;
}
if(confirm == 1)
{
if(flag == 0)
{
document.getElementById('txt').innerHTML = "Captcha do not match " ;
}
else
document.getElementById('confirm').innerHTML = "You are successfully registered !" ;
}


rest="";
res="";
confirm="";
flag="";
setTimeout("",60);
</script>

<script src="js/jquery.min.js"></script>
	<script>
	  $(document).ready(function () {
		$( "#btn-booknow" ).click(function() {
		  $( "#movieform" ).submit();
		});
		$( "#name" ).focus();
		
		$( "#movieform" ).submit(function( event ) {
			if ( $( "$name" ).val() == "" ) {
				alert("Please enter your name");
				$( "#name" ).focus();
				return false;
			}
			if ( $( "#email" ).val() == "" ) {
				alert("Please enter your email");
				$( "#email" ).focus();
				return false;
			}else{
			     var email = $("#email").val();
			     var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
					var valid = emailReg.test(email);

					if(!valid) {
					    alert("Please enter valid email id.");
						$( "#email" ).focus();
						return false;
					
					}
			}
			if ( $( "#mobile" ).val() == "" ) {
				alert("Please enter your mobile no.");
				$( "#mobile" ).focus();
				return false;
			}else{
			   var mobile = $("#mobile").val().replace(/\D+/g,'');
		       //alert(mobile);
			   if (mobile.length != 10) {
					alert("Please enter your 10 digit mobile no. (9876543210)");
					$( "#mobile" ).focus();
					return false;
			   }
			}
		});
		
		
		
		return false;
	});


</body>
</html>