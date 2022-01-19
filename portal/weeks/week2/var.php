<?php 
  // introduction to our variables
  // as well as syntax !!!

  // what is a variable

  $name = 'Jeremy'; 
  echo $name; 
  echo '<br>';

  $name = 'Anthony';
  echo $name;
  echo '<br>';

  echo 'My first name is $name';
  echo '<br>';

  echo "My first name is $name";
  // I like singe quotes because I will be placing PHP in our HTML values
  echo '<br>';

  echo 'My first name is ' . $name  . ' ';
  echo '<br>';

  $body_temp = 98.6;
  echo 'The temperature today is/was ' .$temp. 'degrees.';

  $body_temp = 98.6;
  // anything with a decimal is called a float
  echo $body_temp;

  // another data type is boolean --> true or false
  // another data type is NULL

  $vehicle = 'truck';
  
  $x = 20;
  $y = 30;
  $z = $x * $y;
  echo $z;
  echo '<br>';

  // circumference 2*pi*r
  $pie = 3.14;
  $radius = 7;
  $circumference = 2 * $pie * $radius;
  echo $circumference;
  echo '<br>';

  // Make an error (for assignment, comment this out)
  //$celcius = 4;
  $far = (32 + $celcius * 9 / 5);
  echo 'The temperature is ' . ceil($far) . 'degrees farenheit';
  
  // $friendly_far = ceil($far);
  // echo 'The temperature is ' . $frendly_far . 'degrees farenheit';
  // echo '<br>';

  $money = 100;
  $divide = 7;
  $amount = $money / $divde;
  echo $amount;
  // $friendly_amount = number_format($amout, 2);
  // echo $friendly_amount;

  // number_format(var, places)
  $echo '<p>I now have <b>' . number_format($amount, 2) . '</b> dollars!</p>';
  $echo '<br>';







                              