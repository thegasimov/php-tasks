<?php

$intValue = 57;

$toString = (string) $intValue;

var_dump($toString);

var_dump(is_string($toString));


echo '<hr>';
/*********************************/

$firstValue = 2;
$secondValue = 5;

$firstValue += $secondValue;


echo $firstValue;

echo '<hr>';
/*********************************/

$myInfo = [
    'name' => 'Tural',
    'surname' => 'Qasimov',
    'age' => 25,
    'favoriteNumber' => 100,
    'salary' => 64
];

echo $myInfo['age'] * $myInfo['favoriteNumber'] + rand(5, 15) + sqrt($myInfo['salary']) + pow(4, 3) . '<br/>';
echo $myInfo['name'] . ' ' . $myInfo['surname'] . ' ' . $myInfo['salary'];


echo '<hr>';
/*********************************/

$first = 1;
$second = 2;
$threed = 3;
$fourth = 4;

var_dump($first < $second && $threed < $fourth);

echo '<hr>';
/*********************************/

var_dump($first < $second || $threed < $fourth);

echo '<hr>';
/*********************************/

$first = '25 salam';
$second = explode(' ',$first);

echo '<pre>';
print_r($second);
echo '</pre>';



var_dump(is_int((int)$first));
echo '<hr>';
/*********************************/

$string = 'Hello word';
$rand = [
    rand(),
    rand(),
    rand(),
    rand()
];
echo '<pre>';
print_r($rand);
echo '</pre>';
echo '<hr>';
echo strlen($string) * max($rand) + min($rand);

echo '<hr>';

$string = 'Salam';
$stringToArray = (array)$string;
echo count($stringToArray);
for($i = count($stringToArray); $i <= 0; $i--){
    echo $i;
}