<?php
// Server.php - We need to start a session
// session is a way to store information (at runtime) in $_SESSION

session_start();
include('config.php');

// eventually we will include header
// include('header.php');

// server.php will connect to Database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,  DB_NAME)
or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// register the user using "if(isset()) --> _POST['reg_user'] is provided by teh form's submit button

$errors = array();

//
// Process Register User request
//

if (isset($_POST['reg_user'])) {

  $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
  $email = mysqli_real_escape_string($iConn, $_POST['email']);
  $username = mysqli_real_escape_string($iConn, $_POST['username']);
  $password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

  if(empty($first_name)) {
    array_push($errors, 'First name is required');
  }

  if(empty($last_name)) {
    array_push($errors, 'Last name is required');
  }

  if(empty($email)) {
    array_push($errors, 'Email is required');
  }

  if(empty($username)) {
    array_push($errors, 'User name is required');
  }

  if(empty($password_1)) {
    array_push($errors, 'Password is required');
  }

  if(empty($password_2)) {
    array_push($errors, 'Confirm password is required');
  }

  // if password_1 != password_2 We need to warn user
  if ($password_1 !== $password_2) {
    array_push($errors, 'Passwords must match');
  }

  // checking the username and password .. AND SELECTING iT FROM the table

  $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
  
  $result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

  $rows = mysqli_fetch_assoc($result);
  // if statement + additional if-statements ince main if-statement
  // cannot have either:
  // duplicate email, or username
  if ($rows) {
    if ($rows['username'] == $username) {
      array_push($errors, 'Username already exists');
    }

    if($rows['email'] == $email) {
      array_push($errors, 'Email already exists');
    }

  } // close if isset($_POST['reg_user'])

  // Check for errors

  if (count($errors) == 0) {
    
    // no errors, let's finish registration process

    // don't really use this --> easily cracked via lookup tables
    // on the internet.  Called 'rainbow' tables
    $password = md5($password_1);

    // Insert information into users table
    $query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";

    mysqli_query($iConn, $query); // ?? what, no error checking?

    $_SESSION['username'] = $username;
    $_SESSION['success'] = $success;   //??? is this a constant? $success

    // if successful direct to login page

    header('Location:login.php');

  } // close if count($errors)

} // end if isset(reg_user)


//
// Proces Login Request
//

if (isset($_POST['login_user'])) {

  $username = mysqli_real_escape_string($iConn, $_POST['username']);
  $password = mysqli_real_escape_string($iConn, $_POST['password']);

  if (empty($username)) {
    array_push($errors, 'Login: Username is required!');
  }

  if (empty($password)) {
    array_push($errors, 'Login: Password is required!');
  }

  // check for errors 

  if (count($errors) == 0) {

    $password = md5($password);

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    // RESULTS is a new variable from 'result'
    $results = mysqli_query($iConn, $query);
    if (mysqli_num_rows($results) == 1) {
      
      // Successful login
      $_SESSION['username'] = $username;
      $_SESSION['success'] = $success;

      // redirect user to home page
      header('Location:index.php');

    } else {

      array_push($errors, 'Login: Wrong username and password.');

    } // close num_rows == 1

  } // close count_errors == 0

} // end isset(login_user)

if (count($errors) > 0) {
  // TODO - something better than this
  print_r($errors);
}