
<?php

function getMultipleVals() {
  return ['red', 'blue'];
}

define('PI', '3.1416');

function sphereVolumeAndShadowArea($radius) {
  $a = PI * $radius * $radius;
  $v = (4 / 3) * PI * $radius * $radius * $radius;
  
  return [$a, $v];
}

[$area, $volume] = sphereVolumeAndShadowArea(1);
echo "Area: {$area} - Volume: {$volume} <br>";

list($area2, $volume2) = sphereVolumeAndShadowArea(2);
echo "Area: {$area2} - Volume: {$volume2} <br>";

$colors = getMultipleVals();
echo "Area: {$colors[0]} - Volume: {$colors[1]} <br>";

[$val1, $val2] = getMultipleVals();
echo "arr1: {$val1} - arr2: {$val2} <br>";

echo '<h2>What will be the answer? A is not NULL, the answer is no</h2>';
$a = 0;
echo 'a is ' . is_null($a) . '';

echo '<h2>What will be the answer? B is NULL, because 1 is yes</h2>';
$b = null;
echo 'b is ' . is_null($b) . '';

echo '<h2>What will be the answer? C is not NULL</h2>';
$c = "null";
echo 'c is ' . is_null($c) . '';

echo '<h2>What will be the answer? D is NULL, because we see the number 1</h2>';
$d = NULL;
echo 'd is ' . is_null($d) . '';

echo '<h2>What will be the answer? E is not NULL!</h2>';
$e = "";
echo 'e is ' . is_null($e) . '';

echo '<h2>Play with empty() and boolean operators</h2>';


$s0 = null;
$s1 = '';
$s2 = "text";

echo '$s0 = ('. $s0 .')';
echo '$s1 = ('. $s1 .')';
echo '$s2 = ('. $s2 .')';

echo '$s0 = ('. $s0 .') => (bool)$s0 = ['. (bool)$s0 .'] => empty($s0) = ['. empty($s0) .']<br>';
echo '$s1 = ('. $s1 .') => (bool)$s1 = ['. (bool)$s1 .'] => empty($s1) = ['. empty($s1) .']<br>';
echo '$s2 = ('. $s2 .') => (bool)$s2 = ['. (bool)$s2 .'] => empty($s2) = ['. empty($s2) .']<br>';
echo '($s1 && $s2) = ('. ($s1 && $s2) .') => (bool)($s1 && $s2) = ['. (bool)($s1 && $s2) .'] => empty($s1 && $s2) = ['. empty($s1 && $s2) .']<br>';

echo '<br>';
echo 'var_dump($s0)';
echo '<br>';
var_dump($s0);

echo '<br><br>';
echo 'var_dump($s1)';
echo '<br>';
var_dump($s1);

echo 'var_dump($s2)';
echo '<br>';
var_dump($s2);

echo '<br><br>';
echo 'var_dump($s1 && $s2)';
echo '<br>';
var_dump($s1 && $s2);

echo '<br><br>';
echo 'var_dump(empty(false))';
echo '<br>';
var_dump(empty(false));

echo '<br><br>';
echo'var_dump(empty($s1 && $s2))';
echo '<br>';
var_dump(empty($s1 && $s2));

  
?>