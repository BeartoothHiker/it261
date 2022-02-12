<?php //adder-wrong.php

if (isset($_POST['num1'], $_POST['num2'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;
echo '<h2>You added "'. $num1. '" and "' . $num2 . '"';
echo '<p>and the answer is <br><span style="color:red;"> "' . $myTotal . '"!</span></p>';
echo '<p><a href="">Reset page</a>';
} ?>

<html>
<head>
<title>My Adder Assignment</title>
<style>

</style>
</head>
<body>
<h1>Adder.php</h1><form action="" method="post">
<label>Enter the first number:</label><input type="text" name="num1"><br>
<label>Enter the second number:</label><input type="text" name="num2"><br>
<input type="submit" value="Add Em!!"> </form>

<!--here are my errors--> <!--here are my errors--><!--here are my errors--><!--here are my errors--><!--here are my errors--><!--here are my errors-->

<!--  ERRORS: -->
<h2>Errors fixed</h2>
<ul>
  <li>Line 1: Syntax: need space between opening PHP marker (< ?php) and comment</li>
  <li>Line 3: Functional: Need to check 'isset' for both 'num1' and 'num2' args</li>
  <li>Line 6: Functional: use operator = instead of -=, typo: $Num2 should be $num2</li>
  <li>Line 7: Syntax: Fixed leading space.  Mismatched quotes.  There's a couple of options to fix, depending on authors intent. (show double quotes in string, or use double quote syntax.)</li>
  <li>Line 8-9: Fix some spacing. Syntax: Unexpected carriage return added, Add 'span' tag so color format works, add quotes contacatenation operators to fix string, and add missing trailing single quote (from what was line 9).  Added trailing semi-colon.</li>
  
  <li>NOTE: Line numbers are now shifted, due to removed CR</li>
  <li>Line 10: Syntax: Missing closing PHP (? >) marker.   (lines are shifted again</li>
  <li>Line 20: Syntax: Remove backshlash in FORM tag.  Add 'method="post"'</li>
  <li>Line 21: Syntax: Missing beginning LABEL tag, fix case of "Num1" to "num1"</li>
  <li>Line 22: Syntax: extra slash in beginning LABEL tag, missing end LABEL tag</li>
  <li>Line ???: Label for 'num1' has typo ('Num1' instead of 'num1')</li>
  <li>Line 23: Syntax Submit button 'value=' is missing trailing double quote</li>
  <li>Line #Last: remove extra [ ;;{?> ] characters after HTML tag.</li>
</ul>
<!-- -->

</body>
</html>

