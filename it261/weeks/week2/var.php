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
  echo 'The temperature today is/was ' .$body_temp. 'degrees.';

  $body_temp = 98.6;
  // anything with a decimal is called a float
  echo $body_temp;

  // another data type is boolean --> true or false
  // another data type is NULL

  // In HTML we ahd option for '<select></select>
  // <select>
  //   <option value="" NULL>Select one</option>  // which means we cannot select this 
  // </select>

  // strings
  $vehicle = 'truck';
  
  // numbers & arithmetic
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
  $celcius = 4;
  $far = 32 + ($celcius * 9 / 5);
  $friendly_far = ceil($far); // ceil - rounds up, floor rounds down
  echo 'The temperature is ' . $friendly_far . ' degrees farenheit ';
  echo '<br>';

  $money = 10330;
  $divide = 71;
  $amount = $money / $divide;
  $friendly_amount = number_format($amount, 2);
  echo '<p>The calculated amount is: $' . $amount . " - And friendly num is $". $friendly_amount . "</p>";

  // number_format(var, places)
  echo '<p>I now have <b>' . number_format($amount, 2) . '</b> dollars!</p><br>';
  echo '<br>';
  echo 'Bye!';
