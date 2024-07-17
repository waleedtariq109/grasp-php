<?php
$output = null;

$fruits = [
    ['Apple', 'Red'],
    ['Orange', 'Orange'],
    ['Bananna', 'Yellow']
];

$output = $fruits[0][0];

$fruits[] = ['Watermelon', 'Green'];
array_push($fruits, ['Grapes', 'Green']);

$users = [
    [
        'name' => 'Waleed Tariq',
        'email' => 'waleed@gmail.com',
        'password' => '123456',
        'hobbies' => ['Book Reading', 'Games']
    ],
    [
        'name' => 'Esha Tariq',
        'email' => 'esha@gmail.com',
        'password' => '123456',
        'hobbies' => ['Book Reading', 'Games']
    ],
    [
        'name' => 'Dua Tariq',
        'email' => 'dua@gmail.com',
        'password' => '123456',
        'hobbies' => ['Book Reading', 'Games']
    ],
];

$users[] = [
    'name' => 'Kainat Tariq',
    'email' => 'kainat@gmail.com',
    'password' => '123456',
    'hobbies' => ['Book Reading', 'Games']
];

$output = $users[0]['name'];

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
                Fruits Array:
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