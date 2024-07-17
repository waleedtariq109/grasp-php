<?php

$add = fn ($a, $b) => $a + $b;
echo $add(1, 2) . '<br>';

$numbers = [1, 2, 3, 4, 5];
$squaredNumber = array_map(fn ($val) => $val * $val, $numbers);
print_r($squaredNumber);
