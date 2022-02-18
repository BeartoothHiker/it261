<?php

// class Coffee exercise
// Thursday --> pumpkin latte day
// use 'isset' to determine if a variable exists
// introduce GLOBAL variable
// our switch statement

$variable = 'Hooray';
if (isset($variable)) {
echo 'Yippee skippy!';
} else {
echo 'Not!';
}

// starting the switch
// if something is set, ($today), use that,
// else $today is (set to?) TODAY

// GLOBAL variables:
// are CAPITALIZED ???
// start with '$_GET'

if (isset($_GET['today'])) {
  $today = $_GET['today'];
} else {
  date_default_timezone_set('America/Los_Angeles');
  $today = date('l');
}

echo '<br>' . $today;

// switch
$coffee = 'a Tea';

switch ($today) {
case 'Saturday':
  $coffee = 'Bloody Mary';
  break;

case  'Thursday':
  $coffee = 'Pumpkin Latte';
  break;
  
case  'Wednesday':
  $coffee = 'Americano';
  break;
  
case  'Tuesday':
  $coffee = 'Regular Joe';
  break;

case 'Monday':
  $coffee = 'Triple Shot Espresso';
  break;

case 'Sunday':
  $coffee = 'Mimosa';
  break;

default:
  $coffee = 'a Tea';
}

echo '<br><h2>' . $today. ' is ' . $coffee . ' Day'. '</h2><br>';

?>

<!-- 
TODO: More days, for the whole week.

This also needs to be attached to some other portion of the real website. 
 -->