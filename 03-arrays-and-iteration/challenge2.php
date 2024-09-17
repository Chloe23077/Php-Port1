<?php
/*
 * Challenge 1
 */

for($i = 1; $i <= 10; $i++){
    for($j = 1; $j <= 10; $j++){
        echo $i . 'x' . $j . '=' . $i * $j . '<br>';
    }
}

/*
 * Challenge 2
 */

$numbers = [1, 2, 3, 4, 5];
$sum = 0;

foreach($numbers as $number){
    $sum += $number;
}

echo $sum;
echo '<br>';

$sum2 = 0;

for ($i = 0; $i < count($numbers); $i++) {
    $sum2 += $numbers[$i];
}

echo $sum2;
echo '<br>';
/*
 * Challenge 3
 */

$students = [
    [
        'name' => 'John',
        'grades' => [85, 90, 92, 88]
    ],
    [
        'name' => 'Jane',
        'grades' => [75, 100, 72, 83]
    ],
    [
        'name' => 'Joe',
        'grades' => [56, 67, 60, 100]
    ],
];

foreach($students as $student){
    $name = $student['name'];
    $grades = $student['grades'];
    $avg = array_sum($grades) / count($grades);
    echo "{$name}: Average grade: {$avg}<br>";
}

