<?php

// first & second tasks

$name = "Tural";
$surname = "Qasimov";
$age = 25;

$fullinfo = $name . ' ' . $surname . ' ' . $age . ' yaş';
echo '1-2) ' . $fullinfo . '<br />';


// third task

$cars = ["Ford", "BMW", "Mercedes", "Chevrolet", "Lada"];
echo '3) ' . $cars[2] . '<br />';

// task four

$aboutMe = [
    "name" => "Tural",
    "surname" => "Qasimov",
    "age" => 25,
];

echo '4) ' . $aboutMe['name'] . ' ' . $aboutMe['surname'] . ' ' . $aboutMe['age'] . '<br />';



// task five

$product = [
    "name" => "Rich dad, pool dad",
    "price" => 9.9,
    "currency" => "azn",
    "count" => 10
];

var_dump($product);
echo '<br />';

// task six

$books = ['Şahmat', 'Varlı ata kasıb ata', 'İnandırma psixologiyası'];
echo '6) ' . count($books) . '<br />';

// task seven

$fullname = "Tural Qasimov";
echo '7) ' . strlen($fullname) . '<br />';

// task eight

$fullname = "Tural Qasimov";
echo '8) ' . strtoupper($fullname);

