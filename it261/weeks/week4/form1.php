<?php
// when we submitted the previous form, and we did not input any information
// no input


if (isset($_POST['name'],
          $_POST['email'])) 
{
  $name = $_POST['name'];
  $email = $_POST['email'];

  echo $name;
  echo '<br>';
  echo $email;
  echo '<br>';

}
else
{
  // echo?
  echo'

  <form action ="" method="post">
  
  <label>Name</label>
  <input type="text" name="name">

  <label>EMAIL</label>
  <input type="email" name="email">

  <input type="submit" value="confirm">
';


  echo'';
}

?>