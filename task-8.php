<?php 
declare(strict_types=1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function getInfo(string $name, string $surname, int $age) : array 
{
    return [
        'name' => $name,
        'surname' => $surname,
        'age' => $age
    ];
}


$info = getInfo('Tural','Qasimov',25);


function makeValues(array $info) : void
{
    echo $info['name'].'<br/>';
    echo $info['surname'] . '<br/>';
    echo $info['age'] . '<br/>';
}
//makeValues($info);



function makeCarModel(string $brand, int $price, string $color = 'Black', int $count = 100) : array
{
    return [
        'brand' => $brand,
        'color' => $color,
        'price' => $price,
        'count' => $count
    ];
}

//var_dump(makeCarModel('Bmw','Red',200));

//var_dump(makeCarModel('Bmw', 200, count:57));


function tryMatch(int $price, int $quantity, string $operation) : int {
    try{
        return match($operation){
            '+' => $price + $quantity,
            '-' => ($price > $quantity) ? $price - $quantity : $quantity - $price,
            '*' => $price * $quantity,
            '/' => ($price > $quantity) ? $price / $quantity : $quantity / $price,
            'default' => 'Privet'
        };
    }catch(Exception $e){
     return $e;
    }
}
//echo tryMatch(5,7,'*');


function toFullInfo(string $name, string $surname, int $age = null) : string
{
    try{
        return $age ? $name.' '.$surname.' '. $age : $name.' '. $surname; 
    }
    catch(Exception $e)
    {
        return $e;
    }
}
//echo toFullInfo('Tural','Gasimov');

function newArray(array $arr1 = null, array $arr2 = null) : array
{
    try{
        if($arr1 && $arr2){
            return array_merge($arr1,$arr2);
        }else{
            if($arr1){
                return array_merge($arr1,['Boş Array']);
            }
            return array_merge(['Boş Array'], $arr2);
        }
    }
    catch(Exception $e)
    {
        return $e;
    }
}

echo '<pre>';
var_dump(newArray(arr2: ['necesen','ne var','ne yox']));
echo '</pre>';




function sum(array $a, array $b, string $loopType) : string
{
    $mergedArrays = array_merge($a, $b);
    return match($loopType){
        'foreach' => sumWithForeach($mergedArrays),
        'for' => sumWithFor($mergedArrays),
        'while' => sumWithWhile($mergedArrays),
        'default' => sum(array_merge($a,$b))
    };
}

function sumWithForeach(array $mergedArrays) : string
{
   $sum = 0;
   foreach($mergedArrays as $number){
    $sum += $number;
   }
   return 'Foreach: '.$sum;
}
function sumWithFor(array $mergedArrays) : string
{
   $sum = 0;
   for($i = 0; $i < count($mergedArrays); $i++){
    $sum += $mergedArrays[$i];
   }
   return 'For: '.$sum;
}
function sumWithWhile(array $mergedArrays) : string
{
   $sum = 0;
   $i = 0;
   while($i < count($mergedArrays)){
    $sum += $mergedArrays[$i];
    $i++;
   }
   return 'While: '.$sum;
}

echo sum([1,5,4],[10,20,25],'for');

