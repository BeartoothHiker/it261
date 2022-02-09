<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/styles.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>

<div>
  <form action="" method="post">
  <label>First Name</label>
  <input type="text" name="first_name">

  <label>Last Name</label>
  <input type="text" name="last_name">

  <label>Email Address</label>
  <input type="email" name="email">

  <label>Comments</label>
  <textarea name="comments"></textarea>

  <input type="submit" value="confirm">
  <p><a href="">Reset</a></p>

<?php
  // Firstname, Lastname, Email, Comments

  if (isset($_POST['first_name'],
            $_POST['last_name'],
            $_POST['email'],
            $_POST['comments'],)) {
  

    if (empty($_POST['first_name']
              && $_POST['last_name']
              && $_POST['email']
              && $_POST['comments']
              ))
    {
      echo '<p class="error">Please fill out the fields<p>';
    }
    else
    {
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $email = $_POST['email'];
      $comments = $_POST['comments'];
    
      echo '
      <div class="box">
      <h2>Hello' . $first_name . ' ' .$last_name. '</h2>
      <p>We have received your email as: ' . $email . 'and we also have your comments as the following: <br>' . $email. '
      </div>
      ';

      echo '<br>';
      echo $first_name;
      echo '<br>';
      echo $last_name;
      echo '<br>';
      echo $email;
      echo '<br>';
      echo $comments;
      echo '<br>';

      

    } // end empty()
  
  }
  else
  {





  } // end isset
?>
<div>

</body>
</html>