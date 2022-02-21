<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/styles.css" rel="stylesheet">
  <title>First Currency Form</title>
</head>

<body>
<h1>My currency converter</h1>

<!-- FORM -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="post">

<label>Name</label>
<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" >

<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" >

<label>Amount</label>
<input type="number" name="amount" value="<?php if(isset($_POST['amount'])) echo $_POST['amount']; ?>" >

<!-- 
canadian = .80;
rubles = 0.013;
pounds = 1.37;
euros = 1.14;
yen = 0.0087;
--> 
  
<!-- Logic for stickiness in radio button is:  
  -- If Post[Currency] is set AND 
  -- if Post[Currenc] = value (e.g. exchange rate) echo checked='checked' -->
<!-- and 'echo checked == checked> -->
<label>Currency</label>
<ul>
<li>
<input type="radio" name="currency" value="0.013" <?php if(isset($_POST['currency']) && ($_POST['currency'] == 0.013)) {echo 'checked="checked"';} ?> >Rubles
</li>

<li>
<input type="radio" name="currency" value="0.80" <?php if(isset($_POST['currency']) && ($_POST['currency'] == 0.80)) {echo 'checked="checked"';} ?> >Canadian
</li>

<li>
<input type="radio" name="currency" value="1.37" <?php if(isset($_POST['currency']) && ($_POST['currency'] == 1.37)) {echo 'checked="checked"';} ?> >Pounds
</li>

<li>
<input type="radio" name="currency" value="1.14" <?php if(isset($_POST['currency']) && ($_POST['currency'] == 1.14)) {echo 'checked="checked"';} ?> >Euros
</li>

<li>
<input type="radio" name="currency" value="0.0087" <?php if(isset($_POST['currency']) && ($_POST['currency'] == 0.0087)) {echo 'checked="checked"';} ?> >Yen
</li>
</ul>


<!-- checkbox works same way as radio button -->
<select name="bank">

<!-- You cannot select 'select One -->
<option value="" NULL <?php  if(isset($_POST['bank']) && ($_POST['bank'] == NULL)) echo 'selected ="unselected"' ?> >Select One</option>
<option value="boa" <?php  if(isset($_POST['bank']) && ($_POST['bank'] == 'boa')) echo 'selected="selected"' ?> >Bank of America</option>
<option value="chase" <?php  if(isset($_POST['bank']) && ($_POST['bank'] == 'chase')) echo 'selected="selected"' ?> >Chase</option>
<option value="wells" <?php  if(isset($_POST['bank']) && ($_POST['bank'] == 'wells')) echo 'selected="selected"' ?> >Wells Fargo</option>
<option value="becu" <?php  if(isset($_POST['bank']) && ($_POST['bank'] == 'becu')) echo 'selected="selected"' ?> >BECU</option>

</select>

<input type="submit" value="Convert it!">
</form>

<div>
<button><a href="">Reset</a></button>
</div>

<?php
// if name is not filled out, give me message
// if each of the input fields are not filld, give me as specific message
// Name, email, amount, currency, bank

// canadian = .80;
// rubles = 0.013;
// pounds = 1.37;
// euros = 1.14;
// yen = 0.0087;

// $_SERVER[REQUEST_METHOD]
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

if (empty($_POST['name'])) {
  echo 'Please fill out yourname!';
}

if (empty($_POST['email'])) {
  echo 'Please fill out email!';
}

if (empty($_POST['amount'])) {
  echo 'Please fill out amount with non-zero value.';
}

if (empty($_POST['currency'])) {
  echo 'Please choose a currency!';
}

if ($_POST['bank'] == NULL) {
  echo 'Please choose your banking institution.';
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

  echo"
  <div class=\"box\">
  <h2>Hello <b>$name</b></h2>
  <p>We have confirmed your email as <b>$email</b>, and we will be sending you the following information:<p>
  <p>You have deposited $amount in foreign currency<p>
  <p>And this will equal $ $total US Dollars<p>
  <p>depositied at your account at: $bank<p>
  </div>
  ";

} // end isempty

} // end isset

} // close $_SERVER['REQUEST_METHOD']

?>

</body>
</html>