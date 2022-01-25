<?php

// Playing with the date function
echo "GMT" . date("l") . '<br>';

// set timezoned
date_default_timezone_set('America/Los_Angeles');

echo "PST" . date("l") . '<br>';
echo date("l, F, j, Y h:i") . '<br>';

echo '<br>';

$our_date = date('H:i A'); // 'A' shows AMor PM
echo $our_date . '<br>';
$our_date = date('H:i'); // 'A' shows AMor PM
echo $our_date . '<br>';

// How can we have it print out something like:  Good morning, Good Afternoon, Good Night.

if ($our_date <= 12)
{
  echo '<h1>GoodMorning</h1>';
}
else
{
  echo '<h1>Good Evening</h1>';
}

?>