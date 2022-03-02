<?php 
// rand() function
echo '<h2>Playing with one die</h2>';
$die = rand(1, 6);
echo $die;

echo '<h2>Playing with one die</h2>';

$die1 = rand(1, 6);
$die2 = rand(1, 6);
echo 'Die1: ' . $die1 . '<br>';
echo 'Die2: ' . $die2 . '<br>';

echo '<h2>Palying with 2 dice!</h2>
<p>If you get 2 sixes you are a big winner!<br>
If you get doubles you still a winner.
If not, you LOSE!</p>';

$die1 = rand(1, 6);
$die2 = rand(1, 6);

if (($die1 == 6) && ($die2 == 6)) {
  echo '<p>You are a BIG winner! You rolled '. $die1 .' and '. $die2 .'!</p>';
} elseif ($die1 == $die2) {
  echo '<p>You win. You rolled '. $die1 .' and '. $die2 .'!</p>';
} else {
  echo '<p>Sorry, you Lose this one. You rolled '. $die1 .' and '. $die2 .'!</p>';
}

echo '<h2>Display Random Photo Images</h2>';

$photos[0] = 'photo5';
$photos[1] = 'photo1';
$photos[2] = 'photo2';
$photos[3] = 'photo3';
$photos[4] = 'photo4';

$i = rand(0, 4);

$selected_base = $photos[$i];
$selected_image = '' . $photos[$i] . '.jpg';
echo '<img src="images/' . $selected_image . '"  alt="' . $selected_image . '"> <br>';

function random_images($photo_list)
{
  $my_return = '';
  $i = rand(0, 4);

  $selected_base = '' . $photo_list[$i];
  $selected_image = $selected_base . '.jpg';
  $my_return = '<img src="images/' . $selected_image . '" alt="'. $selected_base .'"> <br>' /* more stuf here */;
  
  // more stuff in here, get from video
  return $my_return;
}

echo random_images($photos);
echo random_images($photos);


