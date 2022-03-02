<?php

// We may need this for the emailable form
// ob_start();

//
// Site Navigation
//

// Nav & Page information
// Title
// Body
// Nav index
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$headline = 'DEFAULT HEADLINE - Add headline for page';

switch(THIS_PAGE) {
  case 'index.php':
     $title = 'JeremyRo\'s Homepage';
     $body_class = 'home';  // class
     $headline = 'Welome to the Home Page';
     break;
  case 'daily.php':
    $title = 'JeremyRo\'s Daily Page';
    $body_class = 'daily inner'; // class
    $headline = 'Welome to the Daily Page';
    break;

  case 'about.php':
    $title = 'JeremyRo\'s About Page';
    $body_class = 'about inner'; // class
    $headline = 'All about this site';
    break;

  case 'project.php':
    $title = 'JeremyRo\'s Project Page';
    $body_class = 'project inner'; // class
    break;

  case 'contact.php':
    $title = 'JeremyRo\'s Contact Page';
    $body_class = 'contact inner'; // class
    $headline = 'Contact us today';
    break;

  case 'gallery.php':
    $title = 'JeremyRo\'s Gallery';
    $body_class = 'gallery inner'; // class
    break;

  case 'thx.php':
    $title = 'Thank you Page';
    $body_class = "inner";
    $headline = 'Thank you for contacting us!';
    break;
}

//Associative Array $nav
// $nav: $key --> $value
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

// Function: make_nav_links
// Purpose: To generate the list of page links in our NAV 
// on the website
function make_nav_links($nav_array) {

  $return_val = '';

  foreach ($nav_array as $key => $value) {

    if (THIS_PAGE == $key) {
      $return_val .= '<li><a class="current" href="'.$key.'"> '.$value.'</a></li>';
    } else {
      $return_val .= '<li><a href="'.$key.'"> '.$value.'</a></li>';
    }
  } // end foreach

  return $return_val;
} // end function


//
// Daily Config File info
//

// First set value for $today
date_default_timezone_set('America/Los_Angeles');
$today = date('l');

if (isset($_GET['today'])) {
  // Prefer Query String day
  $today = $_GET['today'];
}

// Second, get value for $aircraft_make
$weekly_items = array(
  'Sunday' => 'Swift',
  'Monday' => 'Mooney',
  'Tuesday' => 'Taylorcraft',
  'Wednesday' => 'Waco',
  'Thursday' => 'Thorp',
  'Friday' => 'Fairchild',
  'Saturday' => 'Socata'
);

$aircraft_make = $weekly_items[$today];

// Third, fill out $aircraft_info based on $aircraft_make

switch ($aircraft_make) {
  case 'Swift':
    $aircraft_info = array(
      'type' => 'Globe Swift',
      'image' => './images/globe-swift-flight-800-500.jpg',
      'image-alt' => 'swift airplane',
      'seats' => '2',
      'cruise' => '134 knots (154 mph)',
      'fuel-burn' => '9 gallons/hour',
      'range' => '900 nautical miles',
      'description' => 'The Swift is often called the personal Mustang with its polished alumuminum finish and nose high stance. If you want to look fast while sitting still, the Swift is a good choice.',
      'credit' => ''
    );
    break;
  
  case  'Mooney':
    $aircraft_info = array(
      'type' => 'Mooney M20/J *',
      'image' => './images/mooney201-800-500.jpg',
      'image-alt' => 'mooney airplane',
      'seats' => '4',
      'cruise' => '155 knots (178 mph)',
      'fuel-burn' => '9 gallons/hour',
      'range' => '900 nautical miles',
      'description' => 'The M20/J is a well balanced airplane.  It can carry 4 adults and luggage a bit over 400 nautical miles in under 3 hours.  With 3 people and full fuel, its range extends to over 900 nm.',
      'credit' => '*[Picture by Charles Foisie]'
    );
    break;
    
  case  'Taylorcraft':
    $aircraft_info = array(
      'type' => 'Taylorcraft BC-12',
      'image' => './images/taylorcraft-800-500.jpg',
      'image-alt' => 'taylorcraft airplane',
      'seats' => '2',
      'cruise' => '80 knots (92 mph)',
      'fuel-burn' => '4.5 gallons/hour',
      'range' => '300 nautical miles',
      'description' => 'Two seat light airplane that is fun to fly when you\'re not in a hurry to get anywhere specific. The Taylorcraft is similar to the Piper Cub, but pilot and passnger sit next to each other.',
      'credit' => ''
    );
    break;
    
  case  'Waco':
    $aircraft_info = array(
      'type' => 'Waco YMF-5',
      'image' => './images/waco-biplane-flight.jpg',
      'image-alt' => 'waco airplane',
      'seats' => '2',
      'cruise' => '100 knots (115 mph)',
      'fuel-burn' => '14 gallons/hour',
      'range' => '300 nautical miles',
      'description' => 'The Waco YMF-5 is a classic open cockpit biplane whose design dates to the 1930\'s. This airplane is for the pilot (or passenger) who wants to experience flying low and slow and reaching their hand in the slipstream.',
      'credit' => ''
    );
    break;
  
  case 'Thorp':
    $aircraft_info = array(
      'type' => 'Thorp T-18 *',
      'image' => './images/thorp-t18-vh-otm.jpg',
      'image-alt' => 'thorp airplane',
      'seats' => '2',
      'cruise' => '160 knots (184 mph)',
      'fuel-burn' => '8 gallons/hour',
      'range' => '540 nautical miles',
      'description' => 'The T-18 is a two seat homebuilt that is quick, responsive and sips fuel.  The bubble canopy provides excellent visibility.  More than one Thorp pilot has mentioned feeling like a figher pilot in this sporty airplane.',
      'credit' => '*[Picture By: Nachoman-au - A digital photograph taken by myself., CC BY-SA 3.0, https://commons.wikimedia.org/w/index.php?curid=390212]'
    );
    break;
  
  case 'Fairchild':
    $aircraft_info = array(
      'type' => 'Fairchild Model 24',
      'image' => './images/fairchild-24-800-600.jpg',
      'image-alt' => 'fairchild 24 airplane',
      'seats' => '4',
      'cruise' => '104 knots (120 mph)',
      'fuel-burn' => '12 gallons/hour',
      'description' => 'Roomy, rugged, and stately.  Although the the Model 24 is not fast, its comforable cabin and good looks will will make you feel like a member of the jet set.',
      'credit' => ''
    );
    break;
  
  case 'Socata':
    $aircraft_info = array(
      'type' => 'Socata TBM 900',
      'image' => './images/socata-tbm-900.jpg',
      'image-alt' => 'socata airplane',
      'seats' => '6',
      'cruise' => '250 knots (287 mph)',
      'fuel-burn' => '365 pounds/hour at FL310',
      'range' => '1780 nautical miles',
      'description' => 'Comfort, range, and speed best describes the TBM 900.  It carries a pilot and up to 5 passengers.  Bring your pocketbook, because its turbine engine is thirsty, burning more than 50 gallons per hour.',
      'credit' => ''
    );
    break;
  }
  

?>