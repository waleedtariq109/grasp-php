<?php

echo "<h1>For Loop</h1>";
for ($i = 0; $i < 10; $i++) {
    echo "$i </br>";
};

echo "<h1>While Loop</h1>";
$j = 0;
while ($j < 10) {
    echo "$j </br>";
    $j++;
};

echo "<h1>Do While Loop</h1>";
$k = 80;
do {
    echo "$k </br>";
    $k++;
} while ($k < 10);
