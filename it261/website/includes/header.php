<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/styles.css" rel="stylesheet">
  <title><?php echo $title ?></title>
</head>

<body class="<?php echo $body_class ?>">
  <header class="header-footer">
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
