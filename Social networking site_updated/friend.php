<html>
<head>
<meta http-equiv="refresh" content="3600;url=friend.php">
<script type="text/javascript">
function logout()
{
window.location.href="index.php";
window.close();
}
</script>
<link rel="stylesheet" href="css/slider.css"/>
</head>
<body style="border: 50px white;background-image:url(img/blue4.jpg);  background-size: 100% 100%;; background-origin: content-box;background-repeat: no-repeat;">
<!--<input type="button" value="Logout" onClick="javascript:logout()" style="margin:0 ; position:absolute ; left:10 ; top : 10"/>-->
<a href="index.php"><img src="logout.png" style="margin:0 ; position:absolute ; left:1250 ; top : 1 ; height:50 ; width:50"/></a>
<a href="features.php"><img src="arrow.png" style="margin:0 ; position:absolute ; left:0 ; top : 0 ; height:60 ; width:100"/></a>
<br>
<br>
<form style="margin:0 ; position:absolute ; left:285 ; top : 0" action="friend.php" method="post">
<br/>
<div style="margin:0 ; position:absolute ; color:green ; left:125 ; top:20">
<b>Search By: </b>&nbsp &nbsp
<select name=filter>
<option value="0">Full name</option>
<option value="1">User</option>
</select>
&nbsp 
<input type="text" name="name" size="40"/>
&nbsp &nbsp
<input type="submit" value="  Find Friend  " />
</div>
<br/><br/>
<iframe border = "0" src="sub2.php" style="background-color:#CBE4F4 ; height:75 ; width:740"></iframe>
</form>



<div style="margin:0 ;position:absolute; left:1100 ; top:0">
<br>
<br>
<h3 style="color:green">Notifications:</h3><hr/>
<iframe src="sub3.php" style="background-color:#E3E3FF ; height:535; width:250 "></iframe>
</div>


<div style="margin:0 ;position:absolute; left:15 ; top:20">
<br>
<br>
<br>
<h3 style="color:green">Friend list:</h3>
<hr>
<iframe src="sub1.php" style="background-color:#E3E3FF ;height:535 ; width:200 "></iframe>
</div>
				
<div style="margin:0 ;position:absolute ; top:160 ; left:450">
<div id="slideshow-wrap" style="width:400; height:250">
        <input type="radio" id="button-1" name="controls" checked="checked"/>
        <label for="button-1"></label>
        <input type="radio" id="button-2" name="controls"/>
        <label for="button-2"></label>
        <input type="radio" id="button-3" name="controls"/>
        <label for="button-3"></label>
        <input type="radio" id="button-4" name="controls"/>
        <label for="button-4"></label>
        <input type="radio" id="button-5" name="controls"/>
        <label for="button-5"></label>
        <label for="button-1" class="arrows" id="arrow-1">></label>
        <label for="button-2" class="arrows" id="arrow-2">></label>
        <label for="button-3" class="arrows" id="arrow-3">></label>
        <label for="button-4" class="arrows" id="arrow-4">></label>
        <label for="button-5" class="arrows" id="arrow-5">></label>
        <div id="slideshow-inner">
            <ul>
                <li id="slide1">
                    <img src="img/0.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-1"/>
                        <label for="show-description-1" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Sumit Bansal</h2>
                            <p>MALE<br>DOB : 02/09/1994 <br> JIIT ,noida</p>
                        </div>
                    </div>
                </li>
                <li id="slide2">
                    <img src="img/1.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-2"/>
                        <label for="show-description-2" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Dhruv Singh</h2>
                            <p>MALE<br>DOB : 10/09/1994 <br> JIIT ,noida</p>
                        </div>
                    </div>
                </li>
                <li id="slide3">
                    <img src="img/2.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-3"/>
                        <label for="show-description-3" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Vrishti Gahlaut</h2>
                            <p>MALE<br>DOB : 13/10/1993 <br> JIIT ,noida</p>
                        </div>
                    </div>
                </li>
                <li id="slide4">
                    <img src="img/3.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-4"/>
                        <label for="show-description-4" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Rajat Sharma</h2>
                            <p>MALE<br>DOB : 18/09/1994 <br> Govt. Ajmer college , rajasthan</p>
                        </div>
                    </div>
                </li>
                <li id="slide5">
                    <img src="img/4.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-5"/>
                        <label for="show-description-5" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Hamza Khan</h2>
                            <p>MALE<br>DOB : 25/04/1995 <br> JIIT ,noida</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</div>


<div style="margin:0 ;position:absolute ; top:500 ; left:450">
<br>
<br>
<fieldset style="width:400; height:80">
<legend>Friends Location</legend>
<h3 class="letter_spacing">Locate <span>Friend!!</span></h2>
<form action="http://www.batchgeocode.com/map/">
<div class="wrapper">
<input type="hidden" name="i" value="f9fde3ceec5e068bcda38635b38b00f4">
<label><span>&nbsp &nbsp Search : &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span><input type="text" class="input" name="q" value=""></label>
&nbsp &nbsp 
<input type="submit" class="button1" value=" search ">	
</div>
</form>
</fieldset>
</div>
	
	
<?php
error_reporting(0);
$filter = $_POST['filter'];
$name = $_POST['name'];
$h = fopen("support/lst.txt","w");
if ($filter == "0")
{
$f = fopen("support/tmp_d.txt","r");

fclose($h);
$dummy1 = strtoupper($name)."\n";

while(!(feof($f))){
$var1 = fgets($f);
$var2 = fgets($f);
$dummy2 = strtoupper($var1);

if ($dummy2 == $dummy1 && $name != NULL){
$g= fopen("support/lst.txt","a");
fwrite($g,"$var2");
fclose($g);
}
}
}

if ($filter == "1")
{
$name = $_POST['name'];
$h = fopen("support/lst.txt","w");
$confirmed = file_exists("database/".$name.".txt");
if($confirmed && $name != NULL){
fwrite($h,"$name\n");
}
}
?>
</body>
</html>