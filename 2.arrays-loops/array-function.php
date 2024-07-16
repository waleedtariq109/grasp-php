<?php
$output = null;

$ids = [10, 2, 33, 14, 15];
$users = ['user2', 'user1', 'user3'];

// Count array element
$output = count($ids);

// Sort Array
sort($ids);
sort($users);

// Reverse sort array `rsort`
rsort($ids);
rsort($users);

// array_push
array_push($ids, 100);
array_push($users, 'users4');

// array_pop
array_pop($ids);
array_pop($users);

// array_shift
array_shift($ids);
array_shift($users);

// array_unshift
array_unshift($ids, 100);
array_unshift($users, 'user3');

// array_slice
$ids2 = array_slice($ids, 1, 3);
// var_dump($ids2)

// array_splice
array_splice($ids, 1, 1, 'New ID');

// array_sum
$output = "The sum is: " . array_sum($ids);

// array_search
$output = "User 2 is at index: " . array_search('user2', $users);

// in_array
$output = "User 2 exist: " . in_array('user2', $users);

// explode
$tags = 'tech,code,programming';
$tagsArr = explode(',', $tags);
// var_dump($tagsArr);

// Implode
$output = implode(',', $users);

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
            <p class="text-xl">
                <?= $output ?>
            </p>
            <h2 class="text-xl font-semibold">
                IDs Array:
            </h2>
            <p>
            <pre>
                    <?php print_r($ids); ?>
                </pre>
            </p>
            <h2 class="text-xl font-semibold">
                Users Array:
            </h2>
            <p>
            <pre>
                    <?php print_r($users); ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>