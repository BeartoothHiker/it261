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
  $today = date('l');
}

// switch

echo '<br>' . $today;

switch ($today) {

  case  'Thursday':
    $coffee = '<h2>' . $today . ' is Pumpkin Latte Day</h2>';
    break;
  
case  'Wednesday':
  $coffee = '<h2>' . $today . ' is Americano Day</h2>';
  break;
  
case  'Wednesday':
  $coffee = '<h2>' . $today . ' is Regular Joe Day</h2>';
  break;

default:
  $coffee = '<h2> I didn\'t remember today.';
}

echo '<br>' . $coffee . '<br>';
?>

<!-- 
TODO: More days, for the whole week.

This also needs to be attached to some other portion of the real website. 
 -->