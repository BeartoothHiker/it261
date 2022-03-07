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
     $headline = 'Welcome to the Home Page';
     break;
  case 'daily.php':
    $title = 'JeremyRo\'s Daily Page';
    $body_class = 'daily inner'; // class
    $headline = 'Welcome to the Daily Page';
    break;

  case 'about.php':
    $title = 'JeremyRo\'s About Page';
    $body_class = 'about inner'; // class
    $headline = 'About';
    break;

  case 'project.php':
    $title = 'JeremyRo\'s Project Page';
    $body_class = 'project inner'; // class
    $headline = 'TODO:';
    break;

  case 'contact.php':
    $title = 'JeremyRo\'s Contact Page';
    $body_class = 'contact inner'; // class
    $headline = 'Contact Us';
    break;

  case 'gallery.php':
    $title = 'JeremyRo\'s Gallery';
    $body_class = 'gallery inner'; // class
    $headline = 'Beyond Books: Seattle Public Library Card Benefits';
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

//
// Contact form logic
//

// initalize form variables (beyond the errors?)
// Scenario is is selcting

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$features_err = '';
$contact_reason_err = '';
$comments_err = '';
$privacy_err = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Copy form data from $_POST superglobal into variables, or generate errors

  if (empty($_POST['first_name'])) {
    $first_name_err = 'Please enter your first name';
  } else {
    $first_name = $_POST['first_name'];
  }

  if (empty($_POST['last_name'])) {
    $last_name_err = 'Please enter your last name';
  } else {
    $last_name = $_POST['last_name'];
  }

  if (empty($_POST['email'])) {
    $email_err = 'Please enter your email';
  } else {
    $email = $_POST['email'];
  }

  if (empty($_POST['phone'])) {
    $phone_err = 'Your phone number please!';
  } 
  else  if (!preg_match( '/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/' , $_POST['phone'])) {

    // If the phone doesn't match our Regular Expression 
    // for format: ddd-ddd-dddd where 'd' is digit [0-9]
    $phone_err = 'Invalid phone number format.';
  }
  else
  {
    $phone = $_POST['phone'];
  } // end pre_match

  if (empty($_POST['features'])) {
    $features_err = 'Please select the features your site uses/requires.';
  } else {
    $features = $_POST['features'];
  }

  // NULL is the the 'empty' select item
  if ($_POST['contact-reason'] == NULL) {
    $contact_reason_err = 'Please help us direct your request.';
  } else {
    $contact_reason = $_POST['contact-reason'];
  }

  if (empty($_POST['comments'])) {
    $comments_err = 'Please provide any additional information.';
  } else {
    $comments = $_POST['comments'];
  }

  if (empty($_POST['privacy'])) {
    $privacy_err = 'Please verify that you accept the privacy notice.';
  } else {
    $privacy = $_POST['privacy'];
  }

  if (isset(
    $first_name,
    $last_name,
    $email,
    $phone,
    $features,
    $contact_reason,
    $comments,
    $privacy)) {

    $imploded_features = implode(', ', $features);

    // Only once all values are TRUTHY ...
    // Note: a variable can be SET but still have an empty value
    if ($first_name
      && $last_name
      && $email
      && $phone
      && $imploded_features
      && $contact_reason
      && $privacy
      && $comments) {

      $to = 'MostPuzzled <mostpuzzled@outlook.com>, Olga <szemeo@mystudentswa.com>';
      $subject = 'Test email ' . date('m/d/y, h i A');
      $body ='
First Name: ' . $first_name . ' ' .PHP_EOL. '
Last Name: ' . $last_name . ' ' .PHP_EOL. '
Email: ' . $email . ' ' .PHP_EOL. '
Phone Number: ' . $phone . ' ' .PHP_EOL. '
Contact Reason: ' . $contact_reason . ' ' .PHP_EOL. '
Features of Interest: ' . $imploded_features . ' ' .PHP_EOL. '
Comments: ' . $comments . ' ' .PHP_EOL. '
';

    $headers = array(
      'From' => 'CodeWithJeremy <noreply@codewithjeremy.dev>',
      'Reply-To' => $email,
      'X-Mailer' => 'PHP/' . phpversion()
    );

      mail($to, $subject, $body, $headers);
      header('Location: ./thx.php');

    } // end - if(form_data_variablies ... )
  } // isset($_POST ...)
} // end server request is POST

//
// Random photo logic
//

$photos_formation[0] = 'photo0_Author and \'Tigger\' in preparing to land in Yakima.';
$photos_formation[1] = 'photo1_Photo from #3 in a four ship fingertip formation.';
$photos_formation[2] = 'photo2_Two Mooneys flying fingertip formation over Pendleton.';
$photos_formation[3] = 'photo3_\'Clippy\' over Crater Lake, Oregon.';
$photos_formation[4] = 'photo4_Beech Bonanza in echelon formation over Pendleton, OR.';
$photos_formation[5] = 'photo5_\'Fugawi\' joining up after takeoff at Astoria, OR.';

function random_images($photo_list)
{
  $count = sizeof($photo_list);
  $index = rand(0, $count-1);

  $photo_info = $photo_list[$index];
  $sepIndex = strpos($photo_info, "_");
  
  $selected_base = substr($photo_info, 0, $sepIndex);
  $selected_image = $selected_base . '.jpg';
  $selected_caption = substr($photo_info, $sepIndex+1);

  return '<img src="' . './images/' . $selected_image . '" alt="'. $selected_base .'"><div class="gallery-caption">'.$selected_caption.'</div>';
}

//
// Gallery Images
//

$services["SPL Museum Pass"] = [
  'description' => 'The Seattle Public Library helps you get free admission to participating local museums. Enjoy exhibits on aviation, sciene, nature, and industry for free! Do you have a favorite museum you’d like to revisit? You can reserve one pass to a museum once every 30 days.\n\nMuseum Pass includes entrance to: Burke Museum, Museum of Flight, MOHAI, Museum of Pop Culture, Nordic Museum,  Seattle Aquarium, and the Wing Luke Museum.',
  'logo' => './images/gallery/spl-museum-pass.png',
  'image' => './images/gallery/seattle-museums.jpg'];
$services["LinkedIn Learning"] = [
  'description' => 'Learn a new skill at your own pace, with thousands of courses covering animation, business skills, marketing, design, photography, programming and much more.',
  'logo' => './images/gallery/linked-in-learning-square.jpg',
  'image' => './images/gallery/linkedinlearning.webp'];
$services["O'Reilly Complete"] = [
  'description' => 'Online access to Business, Software, and Programming Books.\nAccess online anytime, with no due dates, or print pages for offline access.',
  'logo' => './images/gallery/oreilly-logo-2.jpg',
  'image' => './images/gallery/oreilly-books-.jpg'];
$services["Kanopy"] = [
  'description' => 'Enjoy Thoughtful Entertainment.\nStream thousands of films for free.',
  'logo' => './images/gallery/kanopy-icon.svg',
  'image' => './images/gallery/kanopy_3_full_trunc.jpg'];
$services["Libby"] = [
  'description' => "Thousands of ebooks, audiobooks, magazines, and more - hand-selected by your public library - are available for free. From NYT best-sellers to classics, you're sure to find something great to read!",
  'logo' => './images/gallery/libby.svg',
  'image' => './images/gallery/libby-header-splash3.webp'];
$services["Morningstar Investment Research"] = [
  'description' => 'Get up-to-date information about stocks, funds and other investment options, plus calculators and tools to help you manage your portfolio.',
  'logo' => './images/gallery/morningstar.jpg',
  'image' => './images/gallery/morningstar-website.jpg'];