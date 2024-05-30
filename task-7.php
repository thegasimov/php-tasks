<?php
/**
 * 1. Bir funksiya yaradın iki paramter qəbul eləsin. Göndərilən iki paramteri toplayıb və nəticəni geri qaytarsın(return).
 */

function plus($a, $b)
{
    return $a + $b;
}

//echo plus(5, 10); //15

/**
 * 2. Bir funksiya yaradın bir paramter qəbul eləsin. Arrayın elementlərinin cəmin hesablasın nəticəni geri qaytarsın(return).
 */

function sum($arr)
{
    $sum = 0;
    foreach ($arr as $a) {
        $sum += $a;
    }
    return $sum;
}

//echo sum([1,5,9,10]); //25

/**
 * 3. Bir funksiya yaradın bir paramter qəbul eləsin. Stringin tərsinə çevrib və nəticəni geri qaytarsın.
 */

function reverse($str)
{
    $name = '';
    $i = strlen($str);
    while ($i >= 0) {
        $name .= $str[$i];
        $i--;
    }
    return $name;
}

//echo reverse('Tural'); //laruT

/**
 * 4. Bir funksiya yaradın iki paramter qəbul eləsin array və uzunuluğu böyük olan arrayin ən böyük elimentini tapsın.
 */

function maxValue($arr1, $arr2)
{
    $max = 0;
    if (count($arr1) > count($arr2)) {
        foreach ($arr1 as $a) {
            if ($a > $max) {
                $max = $a;
            }
        }
    } else {
        foreach ($arr2 as $a) {
            if ($a > $max) {
                $max = $a;
            }
        }
    }
    return $max;
}

//echo maxValue([1,5,9,10], [1,5,9,10,15]); //15

/**
 * 5. Bir funksiya yaradın bir paramter qəbul eləsin. Parametr string olduqda true dəyərin geri qaytarsın.
 */

function checkString($a)
{
    if (is_string($a)) {
        return true;
    }
    return false;
}

//echo checkString('Salam'); //true

/**
 * 6. Bir funksiya yaradın iki paramter qəbul eləsin array və uzunuluğu kiçik olan arrayin ən kiçik elimentini tapsın.
 */

function minValue($arr1, $arr2)
{
    $min = 30;
    if (count($arr1) < count($arr2)) {
        foreach ($arr1 as $a) {
            if ($a < $min) {
                $min = $a;
            }
        }
    } else {
        foreach ($arr2 as $a) {
            if ($a < $min) {
                $min = $a;
            }
        }
    }
    return $min;
}

//echo minValue([3,5,9,10], [1,5,9,10,15]); //3


/**
 * 7. Bir funksiya yaradın bir paramter qəbul eləsin(array) və həmin parametrin 2-3-cü elementini yeni array kimi geri qaytarsın
 */

function generateArray($arr)
{
    $arr2 = [];
    for ($i = 0; $i < count($arr); $i++) {
        if ($i == 2 || $i == 3) {
            $arr2[] = $arr[$i];
        }
    }
    return var_dump($arr2);
}
//generateArray(['salam','php','dersleri','eladir']); //array(2) { [0]=> string(8) "dersleri" [1]=> string(6) "eladir" }

/**
 * 8. Bir funksiya yaradın bir paramter qəbul eləsin(array), içində müxtəlif stringlər olsun və onları ASC order ilə sortlayın və nəticəni geri qaytarsın
 */

function sortList($arr)
{
    sort($arr);
    return $arr;
}

//var_dump(sortList(['el','bilirki','sen','menimsen','azerbaycan'])); // array(5) { [0]=> string(10) "azerbaycan" [1]=> string(7) "bilirki" [2]=> string(2) "el" [3]=> string(8) "menimsen" [4]=> string(3) "sen" }


/**
 * 9. Bir funksiya yaradın bir paramter qəbul eləsin array, Arrayda Key kimi ad, soyad, yaş və value kimi müvafiq sizə aid məlumatlar olsun. Sonra isə həmin arrayda adınızı axtarın və hansı key-ə aid olduğunu tapıb, Nəticəni geri qaytarin.
 */

function findkey($personalInfo)
{
    $key = array_search('Tural', $personalInfo);
    return $key;
}

// echo findkey(['name' => 'Tural', 'age' => 25]); //name

/**
 * 10. Bir funksiya yaradın bir paramter qəbul eləsin. Gələm paramterin array olub olmadığın yoxlayın əgər arraydirsa sonuncu elementi silin. Paramteri geri qaytarın.
 */

function checkArray($arr)
{
    if (is_array($arr)) {
        array_pop($arr);
        return var_dump($arr);
    }
    return 'Array daxil edin.';
}

//echo checkArray('salam'); // Array daxil edin.
//echo checkArray(['bmw','ford']); // array(1) { [0]=> string(3) "bmw" }
