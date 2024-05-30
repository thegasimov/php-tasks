<?php
//require_once('datas.php');

// echo '<hr>';
// $posts = [
//     [
//         'id' =>1,
//         'title' => 'First Title'
//     ],
//     [
//         'id' => 2,
//         'title' => 'Second title'
//     ]
// ];
// // while ($i < count($posts)) {
// //     echo $posts[$i]['title'].'<br/>';
// //     $i++;
// // }


// function sumArray($array, $i = 0)
// {
//     $sum = 0;

//     while($i < count($array)){
//         $sum += $array[$i];
//         $i++;
//     }

//     return $sum.'<br/>';
// }

// echo sumArray([1,4,6,8,9,15,rand(1,100)]);

// $newNumbers = [1,3,6,8,64,10,32];
// echo sumArray($newNumbers);

// echo '<hr>';

// function getMaxNumberOnArray($array,$i = 0){
//     $maxNumber = 0;
//     while($i < count($array)){
//         if($maxNumber < $array[$i]){
//             $maxNumber = $array[$i];
//         }
//         $i++;
//     }
//     return $maxNumber;
// }

// echo 'Max: '.getMaxNumberOnArray($newNumbers);
// echo '<hr>';

// function getFullName($name,$surname){
//     return $name.' '.$surname;
// }


// $firstName = 'Tural';
// echo getFullName($firstName,'Gasimov');

// echo '<hr>';

// function posts($posts,$i = 0){
//     while($i < count($posts)){
//         echo $posts[$i]['title'].'<br/>';
//         $i++;
//     }
// }

// posts($posts);


// function reverseString($string){
//     $i = strlen($string)-1;
//     $letter = '';
//     while($i >= 0){
//         $letter .= $string[$i];
//         $i--;
//     }
//     return $letter;
// }

// echo reverseString('Tural');

// function checkType($value){
//     $type = null;
//     if(is_int($value)){
//        $type = 'int';
//     }elseif(is_array($value)){
//         $type = 'array';
//     }elseif(is_string($value)){
//         $type = 'String';
//     }
//     return $type.'<br>';
// }

// $datas = [1,['salam','qaqa'],'Tural',['sa','dsa'],50];

// foreach($datas as $data){
//     echo checkType($data);
// }


function matchOperation($firstNumber, $secondNumber, $operation = '+') {
    $return = 0;
    switch($operation) {
        case '+':
            $return = $firstNumber + $secondNumber;
            break;
        case '-':
            $return = $firstNumber - $secondNumber;
            break;
        case '*':
            $return = $firstNumber * $secondNumber;
            break;
        case '/':
            $return = $firstNumber / $secondNumber;
            break;
        default:
            $return = 'Əməliyyat daxil edilməyib.';
            break; 
    }
    return $return;
}


echo matchOperation(5,20,'+');