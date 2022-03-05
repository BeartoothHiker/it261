<?php

// initalize form variables (beyond the errors?)
// Scenario is is selcting

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$features_err = '';
$contact_reason_err = '';
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

  if (empty($_POST['features'])) {
    $features_err = 'Please select the features your site uses/requires.';
  } else {
    $features = $_POST['features'];
  }

  // NULL is the the 'empty' select item
  if ($_POST['contact-reason'] == NULL) {
    $contact_reason_err = 'Please help us direct your request.';
  } else {
    $contact_reason = $_POST['contact-reason'];
  }

  if (empty($_POST['comments'])) {
    $comments_err = 'Please provide any additional information.';
  } else {
    $comments = $_POST['comments'];
  }

  if (empty($_POST['privacy'])) {
    $privacy_err = 'Please verify that you accept the privacy notice.';
  } else {
    $privacy = $_POST['privacy'];
  }

  if (isset(
    $first_name,
    $last_name,
    $email,
    $phone,
    $features,
    $contact_reason,
    $comments,
    $privacy)) {

    $imploded_features = implode(', ', $features);

    // Only once all values are TRUTHY ...
    // Note: a variable can be SET but still have an empty value
    if ($first_name
      && $last_name
      && $email
      && $phone
      && $imploded_features
      && $contact_reason
      && $privacy
      && $comments) {

      $to = 'MostPuzzled <mostpuzzled@outlook.com>, Olga <szemeo@mystudentswa.com>';
      $subject = 'Test email ' . date('m/d/y, h i A');
      $body ='
First Name: ' . $first_name . ' ' .PHP_EOL. '
Last Name: ' . $last_name . ' ' .PHP_EOL. '
Email: ' . $email . ' ' .PHP_EOL. '
Phone Number: ' . $phone . ' ' .PHP_EOL. '
Contact Reason: ' . $contact_reason . ' ' .PHP_EOL. '
Features of Interest: ' . $imploded_features . ' ' .PHP_EOL. '
Comments: ' . $comments . ' ' .PHP_EOL. '
';

    $headers = array(
      'From' => 'CodeWithJeremy <noreply@codewithjeremy.dev>',
      'Reply-To' => $email,
      'X-Mailer' => 'PHP/' . phpversion()
    );

      mail($to, $subject, $body, $headers);
      header('Location: ./thx.php');

    } // end - if(form_data_variablies ... )
  } // isset($_POST ...)
} // end server request is POST