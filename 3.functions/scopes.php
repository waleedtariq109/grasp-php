<?php

// Global Scope
$name = 'Waleed';

function sayHello()
{
    global $name;
    echo "Hello " . $name;
    $name = "Waleed Tariq"; // This will change the global $name value
}

sayHello();

echo '</br>';

function sayGoodBye()
{
    $names = ['Waleed', 'Tariq'];
    echo 'Goodbye ' . $names[0];
}
sayGoodBye();
