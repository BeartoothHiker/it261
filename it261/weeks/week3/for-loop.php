<?php
// demonsrate a for loop
//and placing PHP in our HTML

// celcius and farenheit
$celcius = 15;
$farenheit = $celcius * 9/5 + 32;


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
  table {
    width: 300px;
    margin: 20px auto;
    border: 3px solid green;
  }
  th, td {
    padding: 0 1em;
    text-align: right;
  }
  td {
    border: 1px dashed green;
  }
  h1, h2 {
    margin-top: 10px;
    text-align: center;
  }

  </style>
</head>
<body>
  <h1>Building tables using PHP & For Loops</h1>
  <h2>Celcius/Farenheit Conversion Table</h2>
  <table>
    <tr>
      <th>Celcius</th>
      <th>Farenheit</th>
    </tr>
<?php
for($cel = 0; $cel <= 100; $cel += 5) {
  $far = ($cel * 9 / 5) + 32;
  echo '<tr>';
  echo '<td>'.$cel.' degrees</td>';
  echo '<td>'.$far.' degrees</td>';
  echo '</tr>';
}
?>
  </table>
  <h2>Kilometers/Miles Conversion Table</h2>
  <table>
    <tr>
      <th>Kilometers</th>
      <th>Miles</th>
    </tr>
<?php
$inc = 10;
$kmPerMile = 1.609;

for($kms = $inc; $kms <= 200; $kms += $inc) 
{
  $miles = ($kms / $kmPerMile);
  echo '<tr>';
  echo '<td>'.$kms.' km</td>';
  echo '<td>'.number_format($miles, 1).' miles</td>';
  echo '</tr>';
}
?>
  </table>
</body>
</html>