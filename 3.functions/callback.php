<?php

$numbers = [1, 2, 3, 4, 5];

$square = function ($num) {
    return $num * $num;
};

$squaredNumber = array_map($square, $numbers);


// print_r($squaredNumber);

function applyCallback($callback, $value)
{
    return $callback($value);
}

$double = function ($number) {
    return $number * 2;
};

$result = applyCallback($double, 5);

echo $result;
