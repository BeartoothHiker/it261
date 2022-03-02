<?php

// str_replace, and substr functions:
// substr(string, start, length)

$statement = 'Presently, I am reading the Looming Tower';
echo '<h3>Statement:</h3>';
echo $statement . '<br>';

echo '<h3>Substrings</h3>';
echo substr($statement, 0) . '<br>';
echo substr($statement, 1) . '<br>';
echo substr($statement, 10) . '<br>';

echo '<h3>Now I would like to display "I am reading" </h3>';
echo substr($statement, 11, 12) . '<br>';
echo substr($statement, 11, 13) . '<br>';
echo substr($statement, 11, 14) . '<br>';

echo '<h3>What if I owuld like to display "Looming" </h3>';
echo substr($statement, -14) . '<br>';
echo substr($statement, -13) . '<br>';
echo substr($statement, -12) . '<br>';

echo substr($statement, -13, 8) . '<br>';
echo substr($statement, -13, 7) . '<br>';
echo substr($statement, -13, 6) . '<br>';

echo '<br>Now looking for? <br>';
echo substr($statement, 5, 12) . '<br>';
echo substr($statement, 5, 13) . '<br>';
echo substr($statement, 5, 14) . '<br>';

echo '<br>Try the negative again <br>';
echo substr($statement, -20) . '<br>';
echo substr($statement, -20, 2) . '<br>';

echo '<h2>Now for the str_replace function!</h2>';

$statement2 = 'Hulu\'s rendition for the Looming Tower is based on the book named the Looming Tower';
echo $statement2 . '<br>';
echo str_replace('the', 'The', $statement2) . '<br>';