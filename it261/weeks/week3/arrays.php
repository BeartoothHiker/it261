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
// key  => value
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

//Associative Array $nav
// $nav: $key --> $value
$nav['index.php'] = 'Index';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

echo "<br>";
//  you can echo  associative loop by using foreach loop
foreach ($nav as $key => $value) {

  echo ' Link '.$key.' Visual '.$value.' <br>';
}
echo "<br>";


// we can use this for creating links/tags

foreach ($nav as $key => $value) {

  echo '<a href="'.$key.'"> '.$value.'</a><br>';
}
echo "<br>";
?>



<!-- Now add this into a NAV UL with generated list items -->

<nav>
<ul>
<?php
foreach ($nav as $key => $value) {

  echo '<li style="list-style-type:none;"><a style="text-decoration:none; color:red;" href="'.$key.'"> '.$value.'</a></li>';
}
echo '<br>';
?>
</ul>
</nav>



<nav>
<ul>
<?php
// Don't really need to re-generate this list, I did for some reason I don't understand
// I think this was here because I didn't understand what we were doing in class
// I figured out my mistake after going back to the video
$nav['index.php'] = 'Index';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';



echo '<li style="list-style-type:none;"><a style="text-decoration:none; color:red;" href="index.php">Index</a></li>';

// Now do that with a loop, by iterating over array with both: (a) link file, and (b)
//foreach ($nav as $key => $value) {
// }

?>

</ul>
</nav>

