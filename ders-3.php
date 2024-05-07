<?php


$myArrOne = ['one', 'two', 'three'];
$myArrOne[] = 'four';

// 'one','two','three', 'four'

array_push($myArrOne, 'five');

// 'one','two','three', 'four' , 'five'


array_unshift($myArrOne, 'ooop');

// 'ooop','one','two','three', 'four' , 'five'

array_pop($myArrOne);

// 'ooop','one','two','three', 'four'

unset($myArrOne[2]);

// 'ooop','one','three', 'four'


$myArrOne[0] = 'Tural';

// 'Tural','one','three', 'four'


echo '<pre>';
var_dump($myArrOne);
unset($myArrOne[count($myArrOne)]);



echo '<pre>';
var_dump($myArrOne);


/****
 * 
 *  ---------
 * 
 */

$myNewArr = [
    'name' => 'Tural',
    'surname' => 'Gasimov'
];

var_dump(array_key_exists('myname', $myNewArr));

$key = array_search('Tural', $myNewArr);
$value = $myNewArr[$key];

echo $value;

echo '<hr>';
/**
 * 
 *  ----------
 * 
 */


$randArray = [
    rand(1, 5),
    rand(1, 5),
    rand(1, 5)
];

var_dump($randArray);
echo '<br/>';
var_dump(array_sum($randArray));
echo '<br/>';

$value = 0;
foreach ($randArray as $value) {
    $value += $value;
}

echo $value;


$ArrayOne = [
    'name',
    'surname',
    'age'
];

$ArrayTwo = [
    'Tural',
    'Gasimov',
    25
];
echo '<hr>';


$myNewArr = array_combine($ArrayOne,$ArrayTwo);

var_dump($myNewArr);


$valueExists = in_array('Tural',$myNewArr);

var_dump($valueExists);


$mergedArray = array_merge($ArrayOne,$ArrayTwo);

var_dump(count($mergedArray));



$fruits = [
    'apple','orange','banane','limon'
];

sort($fruits);

var_dump($fruits);

rsort($fruits);

var_dump($fruits);


$firstArr = ['fullname'];
$secondArr = ['Tural Gasimov'];

$combinedArr = array_combine($firstArr,$secondArr);
var_dump($combinedArr['fullname']);



