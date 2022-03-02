<?php

$people['Donald_Trump'] = 'trump_Former President from NY.';
$people['Joe_Biden'] = 'biden_President from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Vice President from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Former Housing/Urban from TX.';

// $people - Variable (assoc array)
// $key
// $value --> leads with 5-letter filename + _ + description

// variable    key           value
// $name                     $image


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week 7 Class Exercises - Pictures</title>
  <style>
    table {
      border: 1px solid red;
      border-collapse: collapse;
    }

    td {
      border: 1px solid red;
    }
  </style>
</head>
<body>

<table>
<?php
$ext = '.jpg';
$fname_len = 5;
foreach($people as $name => $image) :
  //Notice : (colon) which is used with 'endforeach' below
?>
<tr>
  <td><img src="./images/<?php echo substr($image, 0, 5).$ext;?>" ></td>
  <td><?php echo str_replace('_', ' ', $name); ?></td>
  <td><?php echo substr($image, $fname_len+1);?></td>
</tr>
<?php endforeach; ?>
</table>
  
</body>
</html>