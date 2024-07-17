<?php

function add($a = 1, $b = 2)
{
    return $a + $b;
}

echo add(1, 4);
echo "</br>";
echo add(99, 11);
echo "</br>";
echo add();
echo "</br>";

function sayHello($name)
{
    return "Hello $name";
}

echo sayHello('Waleed');
echo "</br>";

function addAll(...$numbers)
{
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}

echo addAll(1, 2, 3, 4, 5, 6, 7, 8);
