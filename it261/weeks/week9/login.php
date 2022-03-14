<?php
// our login page
include('server.php');
//include('./includes/header.php);
?>

<h1>Login Page</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

<fieldset>
  <label for="user">Username</label>
  <input id="user" type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>">

  <label for="pwd">Password</label>
  <input id="pwd" type="password" name="password">

  <button type="submit" class="btn" name="login_user">Login</button>
  <button type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>' ">Reset</button>

</fieldset>

</form>