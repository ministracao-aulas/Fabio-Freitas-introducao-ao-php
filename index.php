<?php
$courses = [
    [
        'title' => 'Intro I',
        'lessons' => [
            [
                'title' => 'Arrays Intro',//target
                'file'  => 'arrays/01-arrays-intro.php',
            ],
            [
                'title' => 'Arrays Loops',
                'file'  => 'arrays/02-arrays-loops.php',
            ],
        ],
    ],
    [
        'title' => 'Intro II',
        'lessons' => [
            [
                'title' => 'Arrays Intro',
                'file'  => 'array/01-arrays-intro.php',
            ],
            [
                'title' => 'Arrays Loops',
                'file'  => 'array/01-arrays-loops.php',
            ],
            [
                'title' => 'Arrays Loops',
                'file'  => 'array/01-arrays-loops.php',
            ],
            [
                'title' => 'Arrays Loops',
                'file'  => 'array/01-arrays-loops.php',
            ],
            [
                'title' => 'Arrays Loops',
                'file'  => 'array/01-arrays-loops.php',
            ],
            [
                'title' => 'Arrays Loops',
                'file'  => 'array/01-arrays-loops.php',
            ],
            [
                'title' => 'Arrays Loops',
                'file'  => 'array/01-arrays-loops.php',
            ],
            [
                'title' => 'Arrays Loops',
                'file'  => 'array/01-arrays-loops.php',
            ],
            [
                'title' => 'Arrays Loops',
                'file'  => 'array/01-arrays-loops.php',
            ],
        ],
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <?php foreach($courses as $course): ?>
        <div class="course-container">
            <h6><?= $course['title'] ?></h6>
            <ul class="lessons">
                <?php foreach($course['lessons'] as $lesson): ?>
                <li><a href="<?="{$lesson['file']}"?>"><?= "{$lesson['title']}"?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <hr>
        <?php endforeach; ?>
    </div>
</body>
</html>
