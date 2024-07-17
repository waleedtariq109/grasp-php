<?php

// Sum of array

echo "<h3>Sum of an array</h3>";

$numberArray = [1, 2, 3, 4, 5];

$sum = array_sum($numberArray);
$count = count($numberArray);

echo "The sum of the $count number is: $sum";

// Colors Array
$colors = ['red', 'blue', 'green', 'yellow'];

$colors = array_reverse($colors);
$colors = array_merge($colors, ['purple', 'orange']);

array_splice($colors, 1, 1, 'Pink');
array_pop($colors);

echo '<pre>';
var_dump($colors);
echo '</pre>';
