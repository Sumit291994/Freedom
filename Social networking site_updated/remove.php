<?php

$profile = "profilesee.txt";
  $fp = fopen($profile, "r");
  $t = fgets($fp);
  fclose($fp);


 array_map('unlink', glob("database/".$t.".txt")); 
 
 ?>
 <html>
 <body style="background-image:url(img/blue4.jpg)">

<div>
<h1 style="font-family:Comic Sans MS;color:red;"> This User Successfully removed<br>
<img src="cross.png" style="margin:0 ; position:absolute; left: 200 ;height:100 ; width:100"/>

</body>
</html>