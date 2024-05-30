<?php

$cars = [];
for($i = 1; $i<= 20; $i ++){
    $newArr = [
        'id' => $i,
        'title' => 'Car No:'.$i
    ];
    $cars[] = $newArr;
}

