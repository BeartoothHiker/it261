<?php
include('includes/header.php');

date_default_timezone_set('America/Los_Angeles');
$today = date('l');

if (isset($_GET['today'])) {
  // Prefer Query String day
  $today = $_GET['today'];
}

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

// $aircraft_info = array(
//   'image' => './images/mooney201.jpg',
//   'image-alt' => 'mooney airplane',
//   'description' => '',
//   '' 
// );

// $aircraft_info = array(
//   'type' => 'Mooney M20-J',
//   'image' => './images/mooney201-800-600.jpg',
//   'image-alt' => 'mooney airplane',
//   'seats' => '4',
//   'cruise' => '155 knots (178 mph)',
//   'fuel-burn' => '10 gallons/hour',
//   'description' => 'Fast, efficient, good payload, smaller interior'
// );


switch ($aircraft_make) {
case 'Swift':
  $aircraft_info = array(
    'type' => 'Globe Swift',
    'image' => './images/globe-swift-flight-800-500.jpg',
    'image-alt' => 'swift airplane',
    'seats' => '2',
    'cruise' => '155 knots (178 mph)',
    'fuel-burn' => '10 gallons/hour',
    'range' => '900 nautical miles',
    'description' => 'small, fast, ...',
    'credit' => ''
  );
  break;

case  'Mooney':
  $aircraft_info = array(
    'type' => 'Mooney M20/J',
    'image' => './images/mooney201-800-500.jpg',
    'image-alt' => 'mooney airplane',
    'seats' => '4',
    'cruise' => '155 knots (178 mph)',
    'fuel-burn' => '10 gallons/hour',
    'range' => '900 nautical miles',
    'description' => 'The M20/J is a well balanced airplane.  It can carry 4 adults and bags 400 nautical miles in under 3 hours.  With 2 people and full fuel the ragne extends to over 900 nm.',
    'credit' => ''
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
    'description' => 'Two seat light airplane that is fun to fly when you\'re not in a hurry to get anywhere specific.',
    'credit' => ''
  );
  break;
  
case  'Waco':
  $aircraft_info = array(
    'type' => 'Waco XXX',
    'image' => './images/waco-biplane-flight.jpg',
    'image-alt' => 'waco airplane',
    'seats' => '2',
    'cruise' => '95 knots (109 mph)',
    'fuel-burn' => '5 gallons/hour',
    'range' => '300 nautical miles',
    'description' => 'Open cockpit 2-seat tandem seating',
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

  <div id="wrapper">
    <h1><?php echo $today. ' is ' . $aircraft_make . ' Day'; ?></h1>
    <div class="daily-detail">
      <img class="daily-image" <?php echo 'src="' . $aircraft_info['image'] . '" alt="' . $aircraft_info['image-alt'] . '"'; ?> >
      <h3 class="daily-image-title"><?php echo $aircraft_info['type']; ?></h3>
      <ul class="listWrapper">
        <li>Seats: <?php echo $aircraft_info['seats']; ?></li>
        <li>Cruise Speed: <?php echo $aircraft_info['cruise']; ?></li>
        <li>Fuel Burn: <?php echo $aircraft_info['fuel-burn']; ?></li>
        <li>Description: <?php echo $aircraft_info['description']; ?></li>
        <br>
        <p><?php echo $aircraft_info['credit']; ?></p>
      </ul>
      <br>
    </div> <!-- end aircraft-detail -->
    <h3>Want to see the Daily Menu?</h3>
    <div class="daily-menu-class">
      <ul class="daily-wrapper">

<?php // List of daily links
foreach ($weekly_items as $key => $value) {

  //if ('project.php' == $key) {    // for testing
  $link_styles = '"daily-link"';
  if (THIS_PAGE == $key) {
    // Highlight current page
    $link_styles .= " current";
  }
  echo '<li><a class="'. $link_styles . '" href="./daily.php?today='.$key.'">'.$key.'</a></li>';

} // end foreach
?>
      </ul>
    </div> <!-- end daily-list class -->
  </div> <!-- end wrapper -->
  <div class="daily-list">

  <div id="footer-clear"></div>

<?php
include('includes/footer.php');
?>
