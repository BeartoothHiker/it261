<?php
//our functions page

function sayHello() {
  echo 'Hello PHP function!!!';
}

sayHello();

function cube($value) {
  $cubing = $value * $value * $value;
  echo $cubing;
}



echo '<h2>Arithmetic problems - cube</h2>';
cube(5);


echo '<h2>Area - Width * Height</h2>';

function area ($width, $height) {
  return $width * $height;
}

$get_area = area(5, 12);
echo $get_area;


echo '<h2>Celcius Converter</h2>';

function celcius_converter($celcius) {
  echo ($celcius * 9 / 5 + 32);
}

celcius_converter(100);


echo '<h2>How do we deal with arrays?</h2>';

function areaVolume($a, $b, $c) {
  $area = $a * $b;
  $volume = $area * $c;

  // indexed array
  return [$area, $volume];
}

$my_array = areaVolume(10, 5, 20);
echo '<b>This is my area:</b> '. $my_array[0] . '<br>';
echo '<b>This is my volume:</b> '. $my_array[1] . '<br>';


echo '<h2>Now we will use the LIST function </h2>';

function areaVolume2($a, $b, $c) {
  $area = $a * $b;
  $volume = $area * $c;

  // indexed array
  return [$area, $volume];
}

list($area, $volume) = areaVolume2(5, 10, 30);

echo '<b>This is my area:</b> '. $area . '<br>';
echo '<b>This is my volume:</b> '. $volume . '<br>';


echo '<h2>Our Navigation (for Website)</h2>';

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function make_links($nav) {

  $return_val = '';

  foreach ($nav as $key => $value) {

    if (THIS_PAGE == $key) {
      $return_val .= '<li><a class="current" href="'.$key.'"> '.$value.'</a></li>';
    } else {
      $return_val .= '<li><a href="'.$key.'"> '.$value.'</a></li>';
    }
  } // end foreach

  return $return_val;
} // end function

echo '<h2>Our Navigation (for Website) created with a function!</h2>';

echo make_links($nav);


echo '<h2>The IMPLODE function</h2>';
echo '<p>Take an array and turn it into a string with delimeters.</p>';

$cars = ['toyota', 'ford', 'subaru', 'audi', 'bmw', 'mercedes', 'lexus'];
$my_cars = implode(' - ', $cars);

echo $my_cars;

echo '<h2>The logic behind the wines on our form </h2>
<p>if POST wines is not empty, take POST wines and implode them, and create a new variable named $my_wines</p>';