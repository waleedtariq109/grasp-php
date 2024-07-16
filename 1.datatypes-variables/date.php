<?php

$output = null;

/*
 - `Y` - The year
 - `m` - The month
 - `d` - The day
 - `D` - The day of the week short name
 - `l` - The full day of the week name
 - `h` - The hour
 - `i` - The minute
 - `Y` - The second
 - `a` - AM/PM
*/

// Get Year
$output = date('Y');

// Get Date with timestamp
$output = date('Y', 936345600);

// Get timestamp from strtotime
$output = date('Y', strtotime('1999-06-12'));

// Get month
$output = date('m');

// Get day
$output = date('D');
$output = date('l');

// Get full Date

$output = date('d-m-Y');

// Get Hour
$output = date('h');

// Get minutes
$output = date('i');

// Get second
$output = date('s');

// Get AM/PM
$output = date('a');

// Get date with with time

$output = date('d-m-Y h:i:s a');

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