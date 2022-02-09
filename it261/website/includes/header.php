<?php

// we need to define the title/body
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
  case 'index.php':
     $title = 'JeremyRo\'s Homepage';
     $body_class = 'home';  // class 
     break;
  case 'daily.php':
    $title = 'JeremyRo\'s Daily Page';
    $body_class = 'daily inner'; // class
    break;

  case 'about.php':
    $title = 'JeremyRo\'s About Page';
    $body_class = 'about inner'; // class
    break;

  case 'project.php':
    $title = 'JeremyRo\'s Project Page';
    $body_class = 'project inner'; // class
    break;

  case 'contact.php':
    $title = 'JeremyRo\'s Contact Page';
    $body_class = 'contact inner'; // class
    break;

  case 'gallery.php':
    $title = 'JeremyRo\'s Gallery';
    $body_class = 'gallery inner'; // class
    break;

}

//Associative Array $nav
// $nav: $key --> $value
$nav['index.php'] = 'Index';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- what do we do here with homepage -->
  <title><?php echo $title ?></title>
  <link href="css/styles.css" rel="stylesheet">
</head>

<body class="<?php echo $body_class ?>">
  <header>
    <div id="inner-header">
      <a href="index.php">
        <img id="logo" src="images/New-Mooney-Logo-Flipped.png" alt="Mooney Logo">
      </a>
<!--
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="daily.php">Daily</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="gallery.php">Gallery</a></li>
        </ul>
      </nav>
-->


      <nav>
        <ul>
<?php

foreach ($nav as $key => $value) {
  //if ('project.php' == $key) {    // for testing
  if (THIS_PAGE == $key) {
    echo '<li><a class="current href="'.$key.'"> '.$value.'</a></li>';
  } else {
    echo '<li><a href="'.$key.'"> '.$value.'</a></li>';
  }
}   // end foreach
?>
        </ul>
      </nav>
<!-- 
      <nav>
        <ul>
<?php
foreach ($nav as $key => $value) {
  // echo '<li style="list-style-type:none;"><a style="text-decoration:none; color:red;" href="'.$key.'"> '.$value.'</a></li>';
}
?>
        </ul>
      </nav>
 -->
    </div> <!-- end inner-header -->
  </header>
