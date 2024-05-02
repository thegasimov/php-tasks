<?php

// Task 1

$integerElements = [2, 5, 8, 10, 23, 20];
$sum = array_sum($integerElements);
var_dump($sum);
// 68

/*
 *******************************************************************************************************
 */

echo '<hr>';
// Task 2

$integerElemenstsFirst = [2, 5, 23, 54];
$integerElemenstsSecond = [3, 7, 9, 12, 25];
$mergedArray = array_merge($integerElemenstsFirst, $integerElemenstsSecond);
// 2,5,23,54,3,7,9,12,25

$sumMergedArray = array_sum($mergedArray);
var_dump($sumMergedArray);
// 140

/*
 *******************************************************************************************************
 */

echo '<hr>';
// Task 3

$cars = ['BMW', 'Mercedes-Benz', 'Aston Martin', 'Ford', 'Chevrolet', 'Changan', 'Cherry', 'Bently'];
sort($cars);
var_dump($cars);
// Aston Martin, BMW, Bently, Changan, Cherry, Chevrolet, Ford, Mercedes-Benz

/*
 *******************************************************************************************************
 */

echo '<hr>';
// Task 4

$fruits = ['apple', 'orange'];
$fruits[] = 'banane';
// apple, orange, banane
array_push($fruits, 'pomegranate');
// apple, orange, banane, banane

var_dump($fruits);

/*
 *******************************************************************************************************
 */

echo '<hr>';
// Task 5

$info = ['Gasim', 'Tural', 25];
$info[0] = 'Qasimov';
var_dump($info);
// Qasimov, Tural, 25

/*
 *******************************************************************************************************
 */

echo '<hr>';
// Task 6

$numbers = ['one', 'two', 'three'];
$names = ['tural', 'afiq', 'tofiq'];
$numbers[count($numbers) - 1] = $names[1];
var_dump($numbers);
// one, two, afiq

/*
 *******************************************************************************************************
 */

echo '<hr>';
// Task 7

$realEstateSites = ['evin.az', 'bina.az', 'emlak.az'];
array_pop($realEstateSites);
// evin.az, bina.az
unset($realEstateSites[1]);
// evin.az
var_dump($realEstateSites);

/*
 *******************************************************************************************************
 */

echo '<hr>';
// Task 8

$myInfo = [
    'name' => 'Tural',
    'surname' => 'Qasimov',
    'age' => 25
];

$key = array_search('Tural', $myInfo);
var_dump($key);
// name

/*
 *******************************************************************************************************
 */

echo '<hr>';
// Task 9

$keys = ['name', 'surname', 'age'];
$values = ['Tural', 'Gasimov', 25];

$info = array_combine($keys, $values);
var_dump($info);

//  [
//    'name'=>'Tural',
//    'surname'=>'Gasimov',
//    'age' =>25
//  ]

var_dump(in_array('Gasimov', $info));
// true

/*
 *******************************************************************************************************
 */

echo '<hr>';
// Task 10

$info = [
    'name' => 'Tural',
    'surname' => 'Gasimov',
    'age' => 25
];

unset($info['age']);
var_dump($info);
//  [
//    'name'=>'Tural',
//    'surname'=>'Gasimov',
//  ]

/*
 *******************************************************************************************************
 */

echo '<hr>';
// Task 11

$numbers = ['one', 'two', 'three'];
array_shift($numbers);
var_dump($numbers);
// two, three

/*
 *******************************************************************************************************
 */

echo '<hr>';
// Task 12

$numbers = ['one', 'two', 'three'];
array_shift($numbers);
var_dump($numbers);
// two, three

/*
 *******************************************************************************************************
 */

echo '<hr>';
// Task 13

$digitalMarketing = ['sem', 'smm',];
array_unshift($digitalMarketing, 'seo');

var_dump($digitalMarketing);

// seo, sem, smm

