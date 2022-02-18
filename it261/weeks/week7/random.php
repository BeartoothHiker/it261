<?php 

echo '<h2>Display Random Photo Images</h2>';

$photos[0] = 'photo0';
$photos[1] = 'photo1';
$photos[2] = 'photo2';
$photos[3] = 'photo3';
$photos[4] = 'photo4';
$photos[5] = 'photo5';

$i = rand(0, 4);

$selected_image = '' . $photos[$i] . '.jpg';
echo '<img src=images/' . $selected_image . '"  alt="' . $selected_image . '">';

function random_images($photos)
{
  $my_return = '';
  $i = rand(0, 4);

  $selected_image = '' . photos[$i] . '.jpg';
  $my_return = '<img src="images/' . $selected_image . ' alt=' /* more stuf here */;

  // more stuff in here, get from video
}

