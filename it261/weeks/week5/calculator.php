<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/styles.css" rel="stylesheet">
  <!-- Title -->
  <title>Travel Calculator</title>
  <style>
  </style>
</head>
<body>
  <main>
  <div id="wrapper">

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="post">
      <label for="driver-name">Driver's Name</label>
      <input id="driver-name" type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>">

      <label for="distance">What is the total distance for the trip?</label>
      <input id="distance" type="number" name="distance" value="<?php if(isset($_POST['distance'])) echo $_POST['distance']; ?>">

      <label for="avg-speed">How fast will you drive on average?</label>
      <input id="avg-speed" type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo $_POST['speed']; ?>">

      <label for="daily-duration">How many hours a day will you drive?</label>
      <input id="daily-duration" type="number" name="daily" value="<?php if(isset($_POST['daily'])) echo $_POST['daily']; ?>">

      <legend>Price of gas:</legend>
      <ul>
        <li>
        <!-- NOTE: First item will be checked if previously selected... OR if $_POST['fuel-price'] is not set at all -->
        <input type="radio" name="fuel-price" value="3.00" <?php if(isset($_POST['fuel-price']) && ($_POST['fuel-price'] == 3.00)){echo 'checked="checked"';} ?>>$3.00
        </li>
        
        <li>
        <input type="radio" name="fuel-price" value="3.50" <?php if(isset($_POST['fuel-price']) && ($_POST['fuel-price'] == 3.50)){echo 'checked="checked"';} ?>>$3.50
        </li>
        
        <li>
        <input type="radio" name="fuel-price" value="4.00" <?php if(isset($_POST['fuel-price']) && ($_POST['fuel-price'] == 4.00)){echo 'checked="checked"';} ?>>$4.00
        </li>
      </ul>

      <select name="efficiency">

      <!-- Note -->
      <option value="" NULL <?php if(isset($_POST['efficiency']) && ($_POST['efficiency'] == NULL)) echo 'selected ="unselected"' ?> >Select One</option>
      <option value="7" <?php if(isset($_POST['efficiency']) && ($_POST['efficiency'] == '7')) echo 'selected="selected"' ?> >Horrid (7 gph)</option>
      <option value="12" <?php if(isset($_POST['efficiency']) && ($_POST['efficiency'] == '12')) echo 'selected="selected"' ?> >Bad (12 gph)</option>
      <option value="19" <?php if(isset($_POST['efficiency']) && ($_POST['efficiency'] == '19')) echo 'selected="selected"' ?> >OK (19 gph)</option>
      <option value="26" <?php if(isset($_POST['efficiency']) && ($_POST['efficiency'] == '26')) echo 'selected="selected"' ?> >Passable (26 gph)</option>

      </select>


      <input type="submit" value="calculate">
      <p><a href="">Reset</a></p>
    </form>
  </div>   <!-- end wrapper -->
  </main>

  <?php

// $_SERVER[REQUEST_METHOD]
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

if (empty($_POST['name'])) {
  echo '<span class="error">Please enter the driver\'s name.</span>';
}

if (empty($_POST['distance'])) {
  echo '<span class="error">Please enter the total distance for the trip.</span>';
}

if (empty($_POST['speed'])) {
  echo '<span class="error">Please enter the average driving speed.</span>';
}

if (empty($_POST['daily'])) {
  echo '<span class="error">Please enter the number of hours per day you will be driving.</span>';
}

if (empty($_POST['fuel-price'])) {
  echo '<span class="error">Please enter the average fuel cost.</span>';
}

if (empty($_POST['efficiency']) || ($_POST['efficiency'] == NULL)) {
  echo '<span class="error">Please enter your typical fuel efficiency.</span>';
}

if (isset($_POST['name']
          , $_POST['distance']
          , $_POST['speed']
          , $_POST['daily']
          , $_POST['fuel-price']
          , $_POST['efficiency']
          )) 
{

  $name = $_POST['name'];
  $distance = $_POST['distance'];
  $speed = intval($_POST['speed']);
  $daily_duration = intval($_POST['daily']);
  $fuel_price = floatval($_POST['fuel-price']);
  $mpg = $_POST['efficiency'];

// Only echo fields it will be success
if (!empty($name && $distance && $speed && $daily_duration && $fuel_price && $mpg)) {

  $hours = round($distance / $speed, 1);
  $days = ceil($hours/$daily_duration);  // Round number of days up 
  $fuel_gallons = round($distance / $mpg, 2);
  $fuel_cost = round($fuel_gallons * $fuel_price, 2);

  echo"
  <div class=\"box2\">
  <h2>Hello <b>$name</b>,</h2>
  <h3>Here are the details of your upcoming trip:</h3>
  <ul>
  <li>Your trip will take $hours hours over $days days.</li>
  <li>You will use $fuel_gallons gallons of fuel which should cost \$$fuel_cost.</li>
  </ul>
  </div>
  ";

} // end !empty

} // end isset

} // close $_SERVER['REQUEST_METHOD']

?>

</body>
</html>