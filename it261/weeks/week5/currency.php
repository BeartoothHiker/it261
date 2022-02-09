<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>First Currency Form</title>
</head>

<body>
<h1>My currency converter</h1>

<!-- FORM -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="post">

<label>Name</label>

<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" >
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" >
<input type="amount" name="number" value="<?php if(isset($_POST['number'])) echo $_POST['number']; ?>" >


<!-- 
canadian = .80;
rubles = 0.013;
pounds = 1.37;
euros = 1.14;
yen = 0.0087;
--> 
  
<!-- Logic for stickiness in radio button is:  If Post Currency is set AND if Post Currency Is set to conversion value -->
<!-- and 'echo checked == checked> -->
<label>Currency</label>
<ul>
<li>
<input type="radio" name="currency" value="0.0013" <?php echo 'checked="checked"' ?> > Rubles
</li>

<li>
<input type="radio" name="currency" value="0.80" > Candian
</li>
</ul>


<!-- choose bank -->
<select name="bank">
<option value="" NULL <?php  if(isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected = unselected' ?> >Select One</option`>

<option value="boa" <?php  if(isset($_POST['bank']) && $_POST['bank'] == 'boa') echo 'selected = selected' ?> >Bank of America</option>

<option value="becu" <?php  if(isset($_POST['bank']) && $_POST['bank'] == 'becu') echo 'selected = selected' ?> >BECU</option>

<option value="wells fargo" <?php  if(isset($_POST['bank']) && $_POST['bank'] == 'becu') echo 'selected = selected' ?> >BECU</option>

</select>


<input type="submit" value="Convert it!">
</form>

<p><a href="">Reset</a></p>

<?php
// if name is not filled out, give me message
// if each of the input fields are not filld, give me as specific message
// Name, email, amount, currency, bank

// $_SERVER[REQUEST_METHOD]
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

}

if (empty($_POST['name'])) {
  echo 'Please fill out yourname!';
}

if (empty($_POST['email'])) {
  echo 'Please fill out email!';
}

if (empty($_POST['amount'])) {
  echo 'Please fill out amount!';
}

if (empty($_POST['currency'])) {
  echo 'Please choose a currency!';
}

if (isset($_POST['name'],
          $_POST['email'],
          $_POST['amount'],
          $_POST['currency'],
          $_POST['bank'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];
            $email = $_POST['email'];
            $bank = $_POST['bank'];

$total = $amount * $currency;


// Only echo fields it will be success
if (!empty($name && $email && $amount && $currency && $bank)) {

  echo'
  <p>.$name.<p>
  <p>.$email.<p>
  <p>.$amount.<p>
  <p>.$currency.<p>
  <p>.$total.  in Aerical dollars <p>
  <p>.$name.<p>
  <p>.$bank.<p>
  ';

} // end isempty

} // end isset

?>

</body>
</html>