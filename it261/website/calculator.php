<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/styles.css" rel="stylesheet">
  <title>Travel Calculator</title>
  <style>
  </style>
</head>
<body>
  <main>
    <form action="" method="post">
      <div>
        <label for="driver">Name</label>
        <input id="driver" type="text" name="driver_name">

        <label for="distance">What is the total distance for your trip?</label>
        <input id="distance" type="number" name="distance">

        <label for="avg-speed">How fast will you drive on average?</label>
        <input id="avg-speed" type="number" name="speed">

        <label for="daily">How many hours a day will you drive?</label>
        <input id="daily" type="number" name="dialy-time">
      </div>
      <legend>Price of gas:</legend>
      <div>
        <input type="radio" id="first" name="fuel_price" value="3.00" checked>
        <label for="first">$3.00</label>
        <input type="radio" id="second" name="fuel_price" value="3.50">
        <label for="second">$3.50</label>
        <input type="radio" id="third" name="fuel_price" value="4.00">
        <label for="third">$4.00</label>
      </div>

      <input type="submit" value="calculate">
      <p><a href="">Reset</a></p>
    </form>

  </main>
</body>
</html>