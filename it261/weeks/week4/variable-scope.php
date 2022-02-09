
<?php

echo 'what the hey';
$first_name = 'John';
$last_name = 'Hancock';

// the logic if I do not enter anything inside the input field, something will show up
if (isset( $_POST['first_name'],
            $_POST['last_name'],
            $_POST['email'],
            $_POST['comments']) )
{
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $comments = $_POST['comments'];


  if (empty( $_POST['first_name'] &&
              $_POST['last_name'] &&
              $_POST['email'] &&
              $_POST['comments']))
  {
    echo 'Please fill out the fields';
  }
  else
  {
    echo $first_name;
    echo '<br>';
    echo $last_name;
    echo '<br>';
    echo $email;
    echo '<br>';
    echo $comments;
    echo '<br>';
  }

}
else
{

echo '
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
';
}
?>


<h2> The in between two PHP Blocks</h2>


<?php
echo '
<div>
<p>The NAME is: ' . $first_name . ' ' . $last_name . '</p>
</div>
';

?>