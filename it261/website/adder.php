<html lang="en">
<head>
<title>My Adder Assignment</title>
<style>
</style>
</head>

<body>
<h1>Adder.php</h1><form action="" method="post">
<label>Enter the first number:</label><input type="number" name="num1"><br>
<label>Enter the second number:</label><input type="number" name="num2"><br>
<input type="submit" value="Add Em!!"> </form>

<?php //adder-wrong.php

if (isset($_POST['num1'], $_POST['num2'])){
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  if (empty($num1 && $num2)) {
    echo '<h2>Please enter both numbers </h2>';
  } else {
    $myTotal = 0;
    $myTotal = $num1 + $num2;
    echo '<h2>You added "'. $num1. '" and "' . $num2 . '"';
    echo '<p>and the answer is <br><span style="color:red;"> "' . $myTotal . '"</span>!</p>';
    echo '<p><a href="">Reset page</a>';
  }
}?>


<!--  ERRORS: -->
<!-- Line 1: Syntax: need space between opening PHP marker (< ?php) and comment -->
<!-- Line 3: Functional: Need to check 'isset' for both 'num1' and 'num2' args -->
<!-- Lines 6-7: Need to properly handle cases where $num1 or $num is empty -->
<!-- Line 10: Functional: use operator = instead of -=, typo: $Num2 should be $num2 -->
<!-- Line 11: Syntax: Fixed leading space.  Mismatched quotes.  There's a couple of options to fix, depending on authors intent. (show double quotes in string, or use double quote syntax.) -->
<!-- Line 12-13: Fix some spacing. Syntax: Unexpected carriage return added, Add 'span' tag so color format works, add quotes contacatenation operators to fix string, and add missing trailing single quote (from what was line 10).  Added trailing semi-colon. -->
  
<!-- NOTE: Line numbers are now shifted, due to removed CR -->
<!-- Line 15: Syntax: Missing closing PHP (? >) marker.   (line #'s are shifted again -->
<!-- Line 24: Syntax: Remove backshlash in FORM tag.  Add 'method="post"' -->
<!-- Line 25: Syntax: Missing beginning LABEL tag, fix case of "Num1" to "num1" -->
<!-- Line 26: Syntax: extra slash in beginning LABEL tag, missing end LABEL tag -->
<!-- Line 25-26: Input type to NUMBER -->
<!-- Line 25: Label for 'num1' has typo ('Num1' instead of 'num1') -->
<!-- Line 27: Syntax Submit button 'value=' is missing trailing double quote -->
<!-- Line #Last: remove extra [ ;;{?> ] characters after HTML tag. -->

</body>
</html>
