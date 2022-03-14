<?php
include('server.php');
// eventually we will place 'header.php' here
// include('header.php');
?>

<h1>Register Today</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>

  <!-- Careful with name='x' and $_POST['x'] variables: Those will connect to server.php -->
  <label for="first_name">First Name</label>
  <input id="first_name" name="first_name" type="text" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ?>">

  <label for="last_name">Last Name</label>
  <input id="last_name" name="last_name" type="text" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ?>">

  <label for="email">Email</label>
  <input id="email" name="email" type="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ?>">

  <label for="username">User Name</label>
  <input id="username" name="username" type="text" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']) ?>">

  <label for="password_1">Password</label>
  <input id="password_1" name="password_1" type="password" value="<?php if(isset($_POST['password_1'])) echo htmlspecialchars($_POST['password_1']) ?>">

  <label for="password_2">Confirm Password</label>
  <input id="password_2" name="password_2" type="password" value="<?php if(isset($_POST['password_2'])) echo htmlspecialchars($_POST['password_2']) ?>">

  <button type="submit" name="reg_user" class="btn">Register</button>

  <button type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>' ">Reset</button>
</fieldset>

</form>