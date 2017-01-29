<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Freedom </title>
<meta name="keywords" content="Freedom , chat , friend , message" />
<meta name="description" content="FreeDom  : Make Friends , chat , Hangout with friends" />
<link href="style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/coda-slider.css" type="text/css" media="screen" charset="utf-8" />

<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>

<?php include ("vidb.php")?>

<div id="slider" >
	
    <div id="sidebar" >
        
        <ul class="navigation" >
            <li><a href="#home">Home<span class="ui_icon home"></span></a></li>
            <li><a href="#aboutus">About Us<span class="ui_icon aboutus"></span></a></li>
            <li><a href="#services">Services<span class="ui_icon services"></span></a></li>
            <li><a href="#gallery">Gallery<span class="ui_icon gallery"></span></a></li>
            <li><a href="#contactus">Contact Us<span class="ui_icon contactus"></span></a></li>
        </ul>
    </div> <!-- end of sidebar -->

	<div id="main">
    	<ul id="social_box">
            <li><a href="https://www.facebook.com/freedomeventi?ref=br_rs"><img src="images/facebook.png" alt="facebook" /></a></li>
            <li><a href="https://twitter.com"><img src="images/twitter.png" alt="twitter" /></a></li>
            <li><a href="https://www.linkedin.com"><img src="images/linkedin.png" alt="linkin" /></a></li>
        </ul>
        
        <div id="content">
        
        <!-- scroll -->
        
        	
            <div class="scroll">
                <div class="scrollContainer">
                
                    <div class="panel" id="home">
                        <h2>Introducing Freedom website</h2>    
                        <div class="image_wrapper image_fl"><img src="images/image_01.png" style="height:20%; " alt="image" /></div>
                        <p><em>To design a social networking site through which one user can be connected with other, view the information and share it. With an android application to chat on the go!! </em></p>
                        <p>Freedom is a Social networking site. </p>
                      <div class="cleaner_h40"></div>
                        
                        <h2>Our Background</h2> 
                        <p><em>Development of a social networking site which can fulfil requirements like:</em></p>
                        <p>
1. Make friend .
<br>
2. personal information.
<br>
3. Crawl youtube videos and google images.
<br>
4. Chat , hangout with friends.
<br>
5. locate your friends.
<br>
6. play games.

</p>
                        <div class="btn_more"><a href="#aboutus">More <span>&raquo;</span></a></div>
                    </div> <!-- end of home -->
                    
                    <div class="panel" id="aboutus">
                        <h2>ABOUT US :</h2>
                    	<div class="image_wrapper image_fl"><img src="images/image_02.png" style="height:8%; " alt="image" /></div>
						<br>
						<br>
						<br>
						<p><em>Web developers : </em></p>
                        <p><em><a href="resume.html">Sumit Bansal:</a></em></p>
						<p>3rd year , CSE , B.TECH , Jaypee institute of information technology.</p>
                      <p><em><a href="resume2.html">Dhruv Singh</a></em> </p>
					  <p>3rd year , CSE , B.TECH , Jaypee institute of information technology.</p>
					  <p><em><a href="resume4.html">Hamza Khan</a></em> </p>
					  <p>3rd year , CSE , B.TECH , Jaypee institute of information technology.</p>
					  <p><em><a href="resume3.html">Vrishti Gahlaut </a></em></p>
					  <p>3rd year , CSE , B.TECH , Jaypee institute of information technology.</p>
                    </div>
                    
                    <div class="panel" id="services">
                        <h2>Our Services</h2>
                		<p>
? Simple and attractive<br>
? Secure login<br>
? Make friends<br>
? Login and registration form<br>
? Password changing form<br>
? User friendly interface<br>
? Group Discussion<br>
? Friends Activity display<br>
? Contact information<br>
? View friend’s Personal information<br>
? Chat with friends<br>
? Locate Friends<br>
? Crawl youtube videos<br>
? Crawl Google images.<br>
? Play Games.<br>
? Feedback form<br>
? About Me<br>
</p>
                        
                        
                    </div>
                
                    <div class="panel" id="gallery">
                        <h2>Our Gallery</h2>
						<img src="gal.jpg" style="height:90% ; width:100%"/></a>
                    </div>
					 
                    <div class="panel" id="contactus">
                        <h2>Feel free to send us a message</h2>
                        <div id="contact_form">
                            <form name="pro" action="about.php" method="post">
                                
                                <label for="author">Your Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                                <div class="cleaner_h10"></div>
                                
                                <label for="email">Your Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                                <div class="cleaner_h10"></div>
                                
                                <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                                <div class="cleaner_h10"></div>
                                
                                <input type="submit" class="submit_btn" name="submit" id="submit" value="Send" />
                                <input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" />
                            
                            </form>
							
							
<?php
error_reporting(0);
$s1 = $_POST['author'];
$s2 = $_POST['email'];
$s3 = $_POST['text'];
$concats = "database/problems/problems.txt";


$data =  "<br>$s1";
file_put_contents($concats, $data, FILE_APPEND);
$data =  "<br>$s2";
file_put_contents($concats, $data, FILE_APPEND);
$data =  "<br>$s3<hr>";
file_put_contents($concats, $data, FILE_APPEND);



?>

							
							
							
							
						</div>
                    </div>
                
                </div>
			</div>
            
        <!-- end of scroll -->
        
        </div> <!-- end of content -->
        
    </div> <!-- end of main -->
</div>
</body>
</html>