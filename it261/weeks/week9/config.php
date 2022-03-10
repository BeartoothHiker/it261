<?php
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');
 
function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
}

$washigton_images = array(
    'fdr-memorial.jpg',
    'lincoln-memorial.jpg', 
    'mlk-memorial.png', 
    'washington-monument-whitehouse.jpg');

function random_image_tag($photo_list, $folder_path = '')
{
    // find random photo
  $len = count($photo_list);
  $i = rand(0, $len-1);
  $selected_image = $photo_list[$i];

  // append path/folder if exists
  if (!empty($folder_path)) {
      // ensure we have 
      $image_path = rtrim($folder_path, '/') . '/';
  }
  $image_path .= $selected_image;

  // trim extension for ALT
  $alt = pathinfo($selected_image, PATHINFO_FILENAME);

  return '<img src="' . $image_path . '" alt="'. $alt .'">';
}
?>