<?php
// Using $_GET global Variable

// ask for name/email in the form
// if it is NOT set, then show form to enter

if (isset($_GET["name"],
          $_GET["email"])) {

  $name = $_GET["name"];
  $email = $_GET["email"];

} else {
  echo '
<form action="" method="get">
<input type="text" name="name">
<label>NAME</label>

<input type="email" name="email">
<label>E-MAIL</label>

<input type="submit" value="Confirm">
</form>
';
}

