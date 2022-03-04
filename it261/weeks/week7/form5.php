<?php
ob_start();

// initalize form variables (beyond the errors?)
// Scenario is is selcting

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$gender_err = '';
$phone_err = '';
$wines_err = '';
$regions_err = '';
$comments_err = '';
$privacy_err = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Copy form data from $_POST superglobal into variables, or generate errors

  if (empty($_POST['first_name'])) {
    $first_name_err = 'Please enter your first name';
  } else {
    $first_name = $_POST['first_name'];
  }

  if (empty($_POST['last_name'])) {
    $last_name_err = 'Please enter your last name';
  } else {
    $last_name = $_POST['last_name'];
  }

  if (empty($_POST['email'])) {
    $email_err = 'Please enter your email';
  } else {
    $email = $_POST['email'];
  }

  if (empty($_POST['gender'])) {
    $gender_err = 'Please choose your gender';
  } else {
    $gender = $_POST['gender'];
  }


  if (empty($_POST['phone'])) {
    $phone_err = 'Your phone number please!';
  } 
  else  if (!preg_match( '/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/' , $_POST['phone'])) {

    // If the phone doesn't match our Regular Expression 
    // for format: ddd-ddd-dddd where 'd' is digit [0-9]
    $phone_err = 'Invalid phone number format.';
  }
  else
  {
    $phone = $_POST['phone'];
  } // end pre_match

  if (empty($_POST['wines'])) {
    $wines_err = 'What... no wines...???';
  } else {
    $wines = $_POST['wines'];
  }

  // NULL is the the 'empty' select item
  if ($_POST['regions'] == NULL) {
    $regions_err = 'Please select your region';
  } else {
    $regions = $_POST['regions'];
  }

  if (empty($_POST['comments'])) {
    $comments_err = 'Your comments, please!';
  } else {
    $comments = $_POST['comments'];
  }

  if (empty($_POST['privacy'])) {
    $privacy_err = 'You cannot pass go!';
  } else {
    $privacy = $_POST['privacy'];
  }

  if (isset(
    $first_name,
    $last_name,
    $email,
    $gender,
    $phone,
    $wines,
    $regions,
    $comments,
    $privacy)) {

    $imploded_wines = implode(', ', $wines);

    // Only once all values are TRUTHY ...
    // Note: a variable can be SET but still have an empty value
    if ($first_name
      && $last_name
      && $email
      && $gender
      && $phone
      && $imploded_wines
      && $regions
      && $privacy
      && $comments) {

      $to = 'MostPuzzled <mostpuzzled@outlook.com>';
      $subject = 'Test email ' . date('m/d/y, h i A');
      $body ='
First Name: ' . $first_name . ' ' .PHP_EOL. '
Last Name: ' . $last_name . ' ' .PHP_EOL. '
Email: ' . $email . ' ' .PHP_EOL. '
Gender: ' . $gender . ' ' .PHP_EOL. '
Phone Number: ' . $phone . ' ' .PHP_EOL. '
Regions: ' . $regions . ' ' .PHP_EOL. '
Wines : ' . $imploded_wines . ' ' .PHP_EOL. '
Comments: ' . $comments . ' ' .PHP_EOL. '
';

    $headers = array(
      'From' => 'CodeWithJeremy <noreply@codewithjeremy.dev>',
      'Reply-To' => $email,
      'X-Mailer' => 'PHP/' . phpversion()
    );

      mail($to, $subject, $body, $headers);
      header('Location: ../week6/thx.php');

    } // end - if(form_data_variablies ... )
  } // isset($_POST ...)
} // end server request is POST
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Exercise w/Includes</title>
  <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<?php
include('../../website/includes/contact-form.php');
?>

</body>
</html>