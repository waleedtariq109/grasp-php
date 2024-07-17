<?php

$listings = [
    [
        'id' => 1,
        'title' => 'Software Engineer',
        'description' => 'We are seeking a skilled software engineer to develop high-quality software solutions.',
        'salary' => 80000,
        'location' => 'Lahore',
        'tags' => ['Software Development', 'Java', 'Python', 'SEO']
    ],
    [
        'id' => 2,
        'title' => 'Marketing Specialist',
        'description' => 'We are looking for a marketing specialist to develop and implement effective marketing strategies.',
        'salary' => 60000,
        'location' => 'Multan',
        'tags' => ['Marketing', 'SEO', 'Content Creation']
    ],
    [
        'id' => 3,
        'title' => 'Data Scientist',
        'description' => 'We need a data scientist to analyze large amounts of raw information to find patterns.',
        'salary' => 90000,
        'location' => 'Karachi',
        'tags' => ['Data Analysis', 'Machine Learning', 'Python', 'SEO']
    ],
    [
        'id' => 4,
        'title' => 'Frontend Developer',
        'description' => 'Join our team as a frontend developer to create visually appealing and user-friendly web applications.',
        'salary' => 70000,
        'location' => 'Islamabad',
        'tags' => ['HTML', 'CSS', 'JavaScript', 'SEO']
    ],
    [
        'id' => 5,
        'title' => 'Project Manager',
        'description' => 'We are looking for an experienced project manager to lead projects from inception to completion.',
        'salary' => 85000,
        'location' => 'Peshawar',
        'tags' => ['Project Management', 'Agile', 'Scrum', 'SEO']
    ]
];

function formatSalary($salary)
{
    return '$' . number_format($salary);
}

function highlightTag($tagsArr, $searchString)
{
    $tagStr = implode(', ', $tagsArr);
    return str_replace($searchString, "<span class='bg-yellow-300'>$searchString</span>", $tagStr);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-6">
    <div class="max-w-md mx-auto">
        <h1 class="text-2xl font-bold mb-6">Job Listings</h1>
        <?php foreach ($listings as $index => $job) : ?>
            <div class="mb-4 p-4 shadow-md rounded-lg <?= $index % 2 === 0 ? 'bg-blue-100' : 'bg-white' ?>">
                <h2 class="text-xl font-semibold"><?= $job['title'] ?></h2>
                <p class="mt-2"><?= $job['description'] ?></p>
                <div class="mt-4">
                    <p class="font-semibold">Salary: <span class="font-normal"><?= formatSalary($job['salary']) ?></span></p>
                    <p class="font-semibold">Location: <span class="font-normal"><?= $job['location'] ?> <span class="text-green-600"><?= $index % 2 === 0 ? 'Remote' : 'Local' ?></span></span></p>
                    <p class="font-semibold">Tags: <span class="font-normal"><?= highlightTag($job['tags'], 'SEO') ?></span></p>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</body>

</html>