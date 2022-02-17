 <?php
  // we have travelled the world that we need to exchange
  // 
  // Unit of Currency |  US$ 
  // CAD$ 1.00 = US$ 0.80
  // Rubles 1.00 = US$ 0.013
         
  // $CAD - $USD  - CAD$ 1.00 = USD$0.80
  // Rubles - $USD - 1 Ruble =  0.013 
  // Brit Pounds - 1 Brit.Pound = $USD - 1.37
  // Euros - $USD - 1 Euro = 1.14
  // yen - $USD - 1 Yen = $USD 0.0087
  //
  // We have 2,000 of currency -> conver to to USD:
  // $2000

  $for_amount = 2000;

  $canadian_rate = 0.80;
  $candian_us = $for_amount * $canadian_rate;

  $rubles_rate = 0.013;
  $rubles_us = $for_amount * $rubles_rate;

  $pounds_rate = 1.37;
  $pounds_us = $for_amount * $pounds_rate;

  $euros_rate = 1.14;
  $euros_us = $for_amount * $euros_rate;

  $yen_rate = 0.0087;
  $yen_us = $for_amount * $yen_rate;

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
      width: 600px;
      margin:0 auto;
      border-collapse: collapse;
    }
    th {
      font-size: 2em;
      padding: 10px;
    }

    td {
      padding: 10px;
      font-size: 1.2em;
    }

    h1, h2 {
      text-align: center;
    }
    
    td, table {
      border: 1px solid purple;
    }
  </style>


</head>
<body>
  <table>
    <tr>
      <th>Currency</th>
      <th>Amount</th>
      <th>US Dollars</th>
    </tr>

    <tr>
      <td>Canadian Dollars</td>
      <td><?php echo number_format($for_amount, 0); ?></td>
      <td><?php echo number_format($candian_us, 2); ?></td>
    </tr>
    <tr>
      <td>Russian Rubles</td>
      <td><?php echo number_format($for_amount, 0); ?></td>
      <td><?php echo number_format($rubles_us, 2); ?></td>
    </tr>
    <tr>
      <td>British Pounds</td>
      <td><?php echo number_format($for_amount, 0); ?></td>
      <td><?php echo number_format($pounds_us, 2); ?></td>
    </tr>
    <tr>
      <td>Euros</td>
      <td><?php echo number_format($for_amount, 0); ?></td>
      <td><?php echo number_format($euros_us, 2); ?></td>
    </tr>
    <tr>
      <td>Japanese Yen</td>
      <td><?php echo number_format($for_amount, 0); ?></td>
      <td><?php echo number_format($yen_us, 2); ?></td>
    </tr>
  </table>  

</body>
</html>



  


