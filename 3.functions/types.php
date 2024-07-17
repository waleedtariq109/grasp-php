<?php

declare(strict_types=1);

function sum(int $val1, int $val2): int
{
    return $val1 + $val2;
}

function printName(string $firstname, string $lastname): string
{
    return $firstname . $lastname;
}

function doingStuff(string $param1): void
{
    echo $param1;
}

echo sum(1, 3);
echo printName('Waleed', 'Tariq');
doingStuff('Hello');
