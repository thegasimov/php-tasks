<?php

$posts = [];
for ($i = 1; $i <= 20; $i++) {
    $newArr = [
        'id' => $i,
        'title' => 'Post no:' . $i
    ];
    $posts[] = $newArr;
}


