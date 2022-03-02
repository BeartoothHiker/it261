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

          <!-- Nav defined in links  -->
          <?php echo make_nav_links($nav); ?>

        </ul>
      </nav>
    </div> <!-- end inner-header -->
  </header>
