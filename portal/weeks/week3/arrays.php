<?php
// arrays reminds Olga of a category, catetory of fruits, names, addresses ...
// ... or how about navigation elements on your site?

$fruits = array(
  'bananas',
  'strwberries',
  'blueberies',
  'oranges',
  'apples',
  'pineapple'  
);


// Use 'square' bracket syntax
$fruits = [
  'bananas',
  'strwberries',
  'blueberies',
  'oranges',
  'apples',
  'pineapple'  
];

// or set each individually
$fruits[0] = 'bananas';
$fruits[1] = 'strawberries';
$fruits[2] = 'blueberries';
$fruits[3] = 'oranges';
$fruits[4] = 'apples';
$fruits[5] = 'pineapple';

//$echo fruits; --> this iwll fail

echo $fruits[2];  // this should works
echo "<br>";

print_r($fruits);
echo "<br>";

var_dump($fruits);
echo "<br>";

echo "<pre>";
var_dump($fruits);
echo "</pre>";
echo "<br>";

// number of attributes of an object
$title = 'The Handmaid\'s Tale'; // title
$author = 'Margaret Atwood';  // author
$character = 'June'; // character
$actor = 'Elizabeth Moss'; // actor/actress

// can we describe this with a mapping of sorts? yes with an associative array
$book = array(
  'title' => 'The Handmaid\'s Tale',
  'author' => 'Margaret Atwood',
  'character' => 'June',
  'actor' => 'Elizabeth Moss'
);

echo "<pre>";
var_dump($book);
echo "</pre>";
echo "<br>";

$nav['index.php'] = 'Index';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

foreach ($nav as $key => $value) {

  echo ' Link '.$key.' visual '.$value.' <br>';
}
echo "<br>";


// we can use this for creating links/tags

foreach ($nav as $key => $value) {

  echo '<a href="'.$key.'"> '.$value.'</a><br>';
}
echo "<br>";
?>

<nav><ul>

<?php

$nav['index.php'] = 'Index';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';


echo '<li style="list-style-type:none;"><a style="text-decoration:none; color=red' // ... (get from video)
?>

</ul></nav>

