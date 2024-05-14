<?php

// for($i = 0; $i <= 100; $i++){
//     echo $i.'<br/>';
// }


$simplename = 'Tural';
$name = str_split($simplename);


for ($i = count($name) - 1; $i >= 0; $i--) {
    echo $name[$i];
}
echo '<hr>';

for ($i = strlen($simplename) - 1; $i >= 0; $i--) {
    echo $simplename[$i];
}


echo '<hr>';

/**
 *  Task 2
 */


$numbers = [1, 5, 7, 9, 10, 15, 3];

$a = 0;
for ($i = 0; $i <= count($numbers); $i++) {
    if ($a < $numbers[$i]) {
        $a = $numbers[$i];
    }
}

echo $a;

echo '<hr>';

/**
 *  Task 3
 */

$numbers = [1, 2, 3, 4, 5, 6, 7];
$arr = [];

for ($i = 0; $i <= count($numbers); $i++) {

    if ($i <= 1) {
        $arr[] = $i;
    }

}

for ($i = 0; $i <= count($arr); $i++) {
    echo $arr[$i];
}
echo '<hr>';

$numbers = range(1, 100);
$myNewArr = [];
$sum = 0;
for ($i = 0; $i <= 100; $i++) {
    if ($i >= 50 && $i <= 70 && $i % 2 == 0) {
        $myNewArr[] = $i;
        $sum += $i;
    }
}
echo 'CEM:' . $sum . '<br/>';

for ($i = 0; $i <= count($myNewArr); $i++) {
    echo $myNewArr[$i] . '<br/>';
}