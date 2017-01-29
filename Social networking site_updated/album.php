<html>
<head>
<meta http-equiv="Content-Type" content="text/html">
<title>My Album</title>
<style type="text/css">
body {
    margin: 0 auto 20px;
    padding: 0;
    background: #acacac;
    text-align: center;
}
td {
    padding: 0 0 50px;
    text-align: center;
    font: 9px sans-serif;
}
table {
    width: 100%;
}
img {
    display: block;
    margin: 20px auto 10px;
    max-width: 500px;
    outline: none;
}
img:active {
    max-width: 100%;
}
a:focus {
    outline: none;
}
</style>
</head>
<body>
 <h1><b><u>FILE UPLOAD</u></b></h1>
 <a href="features.php"><img src="arrow.png" style="margin:0 ; position:absolute ; left:0 ; top : 0 ; height:60 ; width:100"/></a>
 <!-- Form for multiple Upload fields -->
<form id="uploadform" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post" enctype="multipart/form-data">
  <input type="file" class="file_up" name="file_up[]" /><br />
  <input type="file" class="file_up" name="file_up[]" /><br />
  <input type="file" class="file_up" name="file_up[]" /><br />
  <input type="file" class="file_up" name="file_up[]" /><br />
  <input type="file" class="file_up" name="file_up[]" /><br />
  <input type="submit" value="UPLOAD" id="submit" />
</form>
<hr>
 
</body>
</html>


<?php
/*** Multi-Upload Script, from: http://coursesweb.net/php-mysql/ ***/
//session_start();     // Enables the possibility of working with Sessions

$t = $_COOKIE['users'];

$updir = 'database/album/'.$t;     // sets the folder
$max_size = 50000;       // maximum file size allowed (in KB)

// file types allowed
$allowtype = array('bmp', 'flv', 'gif', 'jpg', 'jpeg', 'mp3', 'pdf', 'png', 'rar', 'zip');

$rezultat = array();     // Variable to store the messages that will be returned by the script

// If the folder from $updir not exists, attempts to create it (with CHMOD 0777)
if (!is_dir($updir)) mkdir($updir, 0777);

/** Code for. Uploading files to server **/

// If is received a valid file from the form
if (isset($_FILES['file_up'])) {
  // Traverse the array elements, with data from the form fields with name="file_up[]"
   // Check the files received for upload
  for($f=0; $f<count($_FILES['file_up']['name']); $f++) {
    $nume_f = $_FILES['file_up']['name'][$f];     // get the name of the current file

    // if the name has minimum 4 characters
    if (strlen($nume_f)>3) {
      // get and checks the file type (its extension)
      $type = end(explode('.', strtolower($nume_f)));
      if (in_array($type, $allowtype)) {
        // check the file size
        if ($_FILES['file_up']['size'][$f]<=$max_size*1000) {
          // if there aren't errors in the copying process
          if ($_FILES['file_up']['error'][$f]==0) {
            // Set location and name for uploading file on the server
            $thefile = $updir . '/'. $nume_f;
            // if the file can't be uploaded, returns a message
            if (!move_uploaded_file ($_FILES['file_up']['tmp_name'][$f], $thefile)) {
              $rezultat[$f] = 'The file '. $nume_f. ' could not be copied, try again';
            }
            else {
              // stores the name of the file
              $rezultat[$f] = '<b>'.$nume_f.'</b>';
            }
          }
        }
        else { $rezultat[$f] = 'The file <b>'. $nume_f. '</b> exceeds the maximum permitted size, <i>'. $max_size. 'KB</i>'; }
      }
      else { $rezultat[$f] = 'The file <b>'. $nume_f. '</b> is not an allowed file type'; }
    }
  }

  // To avoid resending data on refresh will do a redirect to itself, with re=up
  // Adding in a session takes messages returned by the script
  $_SESSION['rezultat'] = implode('<br />', $rezultat);
  header('Location: '. basename($_SERVER['PHP_SELF']). '?re=up');
}

// If $_GET['re'] and $_SESSION['rezultat'] are set, displays data from the session, then delete it
if (isset($_GET['re']) ) {
  echo '<h2><b><u>Uploaded files:</b></u></h2>';
 
}


$folder = 'database/album/'.$t.'/';
$filetype = '*.*';
$files = glob($folder.$filetype);
$count = count($files);
echo '<table>';
for ($i = 0; $i < $count; $i++) {
    echo '<tr><td>';
    echo '<a name="'.$i.'" href="#'.$i.'"><img src="'.$files[$i].'" /></a>';
    echo substr($files[$i],strlen($folder),strpos($files[$i], '.')-strlen($folder));
    echo '</td></tr>';
}
echo '</table>';
?>
