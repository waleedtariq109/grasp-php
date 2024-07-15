<?php

$number1 = 88;
$number2 = 12;
$number3 = '10';

// Implicit Conversion
$result = $number1 + $number2; // int
$result = $number2 + $number3; // string to int conversion
$result = $number3 + $number3; // string to int conversion
$result = $number1 . $number2; // int to string

// Explicit Conversion
$result = (string) $number1;
$result = (int) $number3;

var_dump($result);
