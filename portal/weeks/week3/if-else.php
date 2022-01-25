<?php

// if-else statements
$temp = 90;


if ($temp <= 50)
{
  echo 'It\'s a little chilly. (Temp='.$temp.')';
}
elseif ($temp <= 60)
{
  echo 'Getting warmer (Temp='.$temp.')';
}
elseif ($temp <= 70)
{
  echo 'We may go to the park! (Temp='.$temp.')';
}
else if ($temp <= 85)
{
  echo 'We are going to the beach (Temp='.$temp.')';
}
else
{
  echo 'It is definitely going to be hot! (Temp='.$temp.')';
}

echo '<br>';


$salary = 200000; // salary
$some_bonus = .10;
$med_bonus = .20;
$big_bonus = .30;

$sales =  98000;
$sales = 150000;

// sales > $99,999 'some' bonuse
// sales > $120,000  'medium' bonus
// sales > $150,000 ' 'big bonus'

if ($sales <= 99999)
{
  echo 'No bonus';
}
elseif ($sales <= 120000) 
{
  $salary *= (1 + $some_bonus);
  echo 'I just made 10% over my salary and I made '.$salary.'';
}
elseif ($sales <= 150000)
{
  $salary *= (1 + $med_bonus);
  echo 'I just made 20% over my salary and I made '.$salary.'';
}
else
{
  $salary *= (1 + $big_bonus);
  echo 'I am retiring because I made '.$salary.'';
}

?>
