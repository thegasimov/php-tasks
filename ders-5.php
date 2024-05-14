<?php

// $cars = [
//     [
//         'name' => 'BWM',
//         'motor' => '2'
//     ],
//     [
//         'name' => 'Audi',
//         'motor' => '4'
//     ],
//     [
//         'name' => 'Mercedes',
//         'motor' => '6'
//     ],
//     [
//         'name' => 'Volvo',
//         'motor' => '8'
//     ],

// ];

// foreach ($cars as $car) {
//     echo $car['name'] . ':' . $car['motor'] . '<br/>';
// }

// echo '<hr>';

// $numbers = range(1, 100);

// foreach ($numbers as $value) {
//     echo $value . '<br/>';
// }

// echo '<hr>';


$arr1 = range(1, 10);
$arr2 = [];
$arrGreaterThanFive = [];


foreach ($arr1 as $value) {
    array_push($arr2, $value);
    if ($value === 5) {
        break;
    }
}

foreach ($arr1 as $value) {
    if ($value <= 5) {
        continue;
    }
    array_push($arrGreaterThanFive, $value);

}

echo '<pre>';
print_r($arr2);
echo '</pre>';


echo '<pre>';
print_r($arrGreaterThanFive);
echo '</pre>';



$arr = [1, 5, 30, 8, 20];

$sum = 0;
foreach ($arr as $v) {
    $sum += $v;
}

echo $sum;

echo '<hr>';

$newSum = 0;
foreach ($arr as $key => $value) {
    $newSum = $newSum + $key + $value;
}

echo $newSum;

echo '<hr>';

$max = 10;
foreach ($arr as $key => $value) {
    if ($value < $max) {
        $max = $value;
    }

}

echo $max;


echo '<hr>';

$arr1 = range(1, 10);
$arr2 = [];

foreach ($arr1 as $var) {

    if ($var >= 4 && $var <= 7) {
        $arr2[] = $var;
    }

}

echo '<pre>';
print_r($arr2);
echo '</pre>';



$posts = array(
    array(
        'title' => 'The Art of Cooking Pasta',
        'author' => 'Chef Julia',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut odio sed libero sollicitudin maximus vel nec ipsum.',
        'date' => '2024-05-01',
        'category' => 'Food',
        'tags' => array('cooking', 'pasta', 'italian')
    ),
    array(
        'title' => '10 Must-Visit Travel Destinations in 2024',
        'author' => 'Traveler123',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut odio sed libero sollicitudin maximus vel nec ipsum.',
        'date' => '2024-04-25',
        'category' => 'Travel',
        'tags' => array('travel', 'destinations', '2024')
    ),
    array(
        'title' => 'Introduction to Machine Learning',
        'author' => 'AI Enthusiast',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut odio sed libero sollicitudin maximus vel nec ipsum.',
        'date' => '2024-04-20',
        'category' => 'Technology',
        'tags' => array('machine learning', 'AI', 'technology')
    ),
);


foreach($posts as $post){
    echo $post['title'].'<br/>';
}