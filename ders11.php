<?php

$news = [
    [
        'id' => 1,
        'title' => 'ChatGBP hacklandi',
        'slug' => 'chatgbt-hacklandi'
    ],
    [
        'id' => 2,
        'title' => 'yeni bmw satyisa cixdi',
        'slug' => 'yeni-bmw-satisa-cixdi'
    ],
    [
        'id' => 3,
        'title' => 'Bakida qeza',
        'slug' => 'bakida-qeza'
    ]
];

    foreach ($news as $value) {
       echo '<a href="?slug='. $value['slug'].'">'.$value['title'].'</a><br/>';
    }


    echo '<hr>';


// Function to find news by slug
function findNewsBySlug($news, $slug)
{
    foreach ($news as $item) {
        if ($item['slug'] == $slug) {
            return $item;
        }
    }
    return null;
}

// Find the news item
$newsItem = findNewsBySlug($news, $_GET['slug']);


echo $_GET['slug'];

if(isset($newsItem)){
        echo 'Xeber basligi: '.$newsItem['title'].'<br/>';
        echo 'Xeber id:' . $newsItem['id'] . '<br/>';
        echo 'Xeber sekli';
    
    }