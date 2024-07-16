<?php

$output = null;

$string = "Hello World";

// strlen
$output = strlen($string);

// str_word_count
$output = str_word_count($string);

// strpos
$output = strpos($string, 'r');

// Get specific Character
$output = $string[4];

// substr
$output = substr($string, 6, 5);

// str_replace
$output = str_replace('World', 'Waleed', $string);

// strtolower
$output = strtolower($string);

// strtoupper
$output = strtoupper($string);

// ucwords
$output = ucwords($string);

// trim
$output = trim('    Hello World     ');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Learn PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl">
                <?= $output ?>
            </h2>
        </div>
    </div>
</body>

</html>