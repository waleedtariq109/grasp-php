<?php

$names = array('Waleed', 'Zeeshan', 'Watto');
$numbers = [1, 2, 3, 4, 5, 6, 7];

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

// inspect($names);
// inspect($numbers);

// echo $names[0];

// Add element to array

$numbers[] = 8;
$numbers[] = 9;

unset($numbers[8]);

$numbers[] = 9;

$numbers = array_values($numbers);

inspect($numbers);
