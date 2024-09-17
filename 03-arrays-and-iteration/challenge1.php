<?php
$numbers = [1, 2, 3, 4, 5];
$sum = $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3] + $numbers[4];
$amount = count($numbers);
echo 'The sum is ' . $amount . ' numbers is: ' . $sum;


$colors = ['red', 'blue', 'green', 'yellow'];
$colors = array_reverse($colors);
$colors = array_merge($colors, ['purple', 'orange']);
array_splice($colors, 1, 0, 'pink');
array_pop($colors);

echo '<pre>';
print_r($colors);
echo '</pre>';


$listings = [
    [
        'id' => 1,
        'job_title' => 'PHP Developer',
        'company' => 'ABC Company',
        'contact_email' => 'john@gmail.com',
        'contact_phone' => '123-456-7890',
        'skills' => ['PHP', 'MYSQL', 'JavaScript']
    ],
    [
        'id' => 2,
        'job_title' => 'Web Designer',
        'company' => '123 Company',
        'contact_email' => 'jane@gmail.com',
        'contact_phone' => '555-456-7890',
        'skills' => ['Photoshop', 'Illustrator', 'CSS']
    ],
    [
        'id' => 3,
        'job_title' => 'Web Developer',
        'company' => 'ABC Company',
        'contact_email' => 'john@gmail.com',
        'contact_phone' => '123-456-7890',
        'skills' => ['PHP', 'MYSQL', 'JavaScript']
    ]
];

array_push($listings, ['id' => 4,
    'job_title' => 'Graphic Designer',
    'company' => '123 Company',
    'contact_email' => 'beth@gmail.com',
    'contact_phone' => '123-456-7890',
    'skills' => ['Photoshop', 'Illustrator', 'CSS']
]);

echo $listings[1]['job_title'];

echo '<br>';

echo $listings[2]['skills'][0];