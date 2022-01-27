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
}
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
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="daily.php">Daily</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="gallery.php">Gallery</a></li>
        </ul>
      </nav>
<!--

foreach ($nav as $key => $value) {

  #TODO:  build menu using PHP 

  echo '<a href="'.$key.'"> '.$value.'</a><br>';
}
echo "<br>";
?>

<nav>
<ul>

<?php /*echo '<li style="list-style-type:none;"><a style="text-decoration:none; color=red' ... ?*/ ?>


</ul>
</nav>        
-->
    </div> <!-- end inner-header -->
  </header>
