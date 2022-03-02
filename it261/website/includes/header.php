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
<?php
foreach ($nav as $key => $value) {
  //if ('project.php' == $key) {    // for testing
  if (THIS_PAGE == $key) {
    echo '<li><a class="current" href="'.$key.'"> '.$value.'</a></li>';
  } else {
    echo '<li><a href="'.$key.'"> '.$value.'</a></li>';
  }
}   // end foreach
?>
        </ul>
      </nav>
    </div> <!-- end inner-header -->
  </header>
