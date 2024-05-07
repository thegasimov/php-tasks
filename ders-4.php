<?php

$bool = false;

if ($bool) {
    echo true;
} else {
    echo 'not found';
}
echo '<br />';

echo $bool == true ? 'yes' : 'there is not';


echo '<br/>';

$arrayOne = [
    rand(),
    rand(),
    rand(),
    rand(),
];

$arrayTwo = [
    rand(),
    rand(),
    rand(),
];

if (count($arrayOne) > count($arrayTwo)) {
    echo count($arrayOne);
} else {
    echo count($arrayTwo);
}
echo '<br/>';

echo count($arrayOne) > count($arrayTwo) ? count($arrayOne) : count($arrayTwo);

echo '<hr>';

$value = rand(0, 100);

echo 'Bal:' . $value . '<br/>';
if ($value < 50) {
    echo 'F';
} elseif ($value >= 51 && $value < 60) {
    echo 'E';
} elseif ($value >= 61 && $value < 70) {
    echo 'D';
} elseif ($value >= 71 && $value < 80) {
    echo 'C';
} elseif ($value >= 81 && $value < 90) {
    echo 'B';
} else {
    echo 'A';
}


echo '<br/>';

switch ($value) {
    case $value < 50:
        echo 'F';
        break;
    case $value >= 51 && $value < 60:
        echo 'E';
        break;
    case $value >= 61 && $value < 70:
        echo 'D';
        break;
    case $value >= 71 && $value < 80:
        echo 'C';
        break;
    case $value >= 81 && $value < 90:
        echo 'B';
        break;
    default:
        echo 'A';
}

echo '<br/>';
echo match (true) {
    $value < 50 => 'F',
    $value >= 51 && $value < 60 => 'E',
    $value >= 61 && $value < 70 => 'D',
    $value >= 71 && $value < 80 => 'C',
    $value >= 81 && $value < 90 => 'B',
    default => 'A',
};
echo '<hr>';

$day = rand(1, 8);
echo $day . '-cü gün: ';
switch ($day) {
    case '1':
        $day = 'Bazar ertəsi';
        break;
    case '2':
        $day = 'Çərşənbə axşamı';
        break;
    case '3':
        $day = 'Çərşənbə';
        break;
    case '4':
        $day = 'Cümə axşamı';
        break;
    case '5':
        $day = 'Cümə';
        break;
    case '6':
        $day = 'Şənbə';
        break;
    case '7':
        $day = 'Bazar';
        break;
    default:
        $day = 'Belə gün yoxdur';
        break;
}
echo $day;



echo '<hr>';

$key = 5;

echo match ($key) {
    'salam' => 'Aleykum',
    '5' => 'String 5',
    5 => 'Integer 5',
    default => 'Hello word'
};


echo '<hr>';

$var1 = rand(50, 100);
$var2 = rand(10, 60);

function hesabla($var1, $var2, $emeliyyat)
{
    $netice = 0;
    switch ($emeliyyat) {
        case '+':
            $netice = $var1 + $var2;
            break;
        case '-':
            if ($var1 >= $var2) {
                $netice = $var1 - $var2;
            } else {
                $netice = $var2 - $var1;
            }
            break;
        case '/':
            $netice = $var1 / $var2;
            break;
        case '*':
            $netice = $var1 * $var2;
            break;
        default:
            $netice = 'Yalnış əməliyyat';
    }
    return $netice;

}

echo 'Birinci eded: ' . $var1 . '<br/>';
echo 'Ikinci eded:' . $var2 . '<br/>';
echo hesabla($var1, $var2, '+') . '<br/>';
echo hesabla($var1, $var2, '-') . '<br/>';
echo hesabla($var1, $var2, '*') . '<br/>';
echo hesabla($var1, $var2, '/') . '<br/>';


echo '<hr>';
