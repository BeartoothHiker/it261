<?php
  // we have travelled the world that we need to exchange
  // $CAD - $USD  - CAD$ 1.00 = USD$0.80
  // Rubles - $USD 0.013 
  // Brit Pounds - $USD - 1.37
  // Euros - $USD - 1.14
  // yen - $USD - 0.0087
  //
  // We have 2,000 of currency -> conver to to USD:
  // $2000

  $for_amount = 2000;

  $canadian_rate = 0.80;
  $candian_us = $for_amount/$canadian_rate;

  $rubles_rate = 0.013;
  $rubles_us = $for_amount/$rubles_rate;

  $pounds_rate = 1.37;
  $pounds_us = $for_amount/$pounds_rate;

  $euros_rate = 1.14;
  $euros_us = $for_amount/$euros_rate;

  $yen_rate = 0.0087;
  $yen_us = $for_amount/$yen_rate;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currency Logic</title>
  <style>
    table {
      width: 400px;
      margin:0 auto;
    }
  </style>


</head>
<body>
  <table>
    <tr>
      <th>Currency</th>
      <th>US Dollars</th>
    </tr>

    <tr>
      <td>Rubles</td>
      <td><?php echo number_format($rubles_us, 2); ?>
      </td>
    </tr>
  </table>  

</body>
</html>



  


