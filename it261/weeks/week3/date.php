<?php

echo date('l');
// l = day
// j = month day number, no leading zero
// F = month, e.g. January
// Y = year

echo '<br>' . date('l F j, Y');
echo '<br>' . date('l F j, Y, h:i');
echo '<br>' . date('l F j, Y, h:i A');  // notice that time isn't same as my local... timezone?

// Playing with the date function
echo '<br>' . "GMT " . date("l");
echo '<br>' . "GMT " . date('l F j, Y, h:i A');;

// set timezone
date_default_timezone_set('America/Los_Angeles');

echo '<br>' . "PST" . date("l") ;
echo '<br>' . "GMT " . date('l F j, Y, h:i A');;

echo '<br>';


$our_date = date('H:i A'); // 'A' shows AM or PM Odd because we also show AM/PM 
echo $our_date . '<br>';
$our_date = date('H:i') . ' --> AM/PM not needed for 24-hour time'; // 'A' shows AM or PM, CAP H is 24 hour timezone, leading zeros
echo $our_date . '<br>';
$our_date = date('h:i A'); // 'A' shows AM or PM, CAP H is 24 hour timezone, leading zeros
echo $our_date . '<br>';

$friendly_time = date('h:i a');
$name = 'Jeremy';

// How can we have it print out something like:  Good morning, Good Afternoon, Good Night.

if ($our_date < 12)
{
  echo '<h1>Good Morning '.$name .'!</h1>';
}
elseif ($our_date < 17)
{
  echo '<h1>Good Afternoon '.$name .'!</h1>';
}
else
{
  echo '<h1>Good Evening '.$name .'!</h1>';
}
echo '<p>It is '.$friendly_time.'.</p>';

?>

<!--
For extra credit, I you could make this look much more appealing, and for example:
Have a background image, and then make a transarent over the background with the text, nand
potentially give a "what you could do" based on time of day?
-->

