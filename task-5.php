<?php
/**
  * 1. Bir dəyişən götürün tipi array olsun içərsində 5 element olsun bütün elementləri çapa verin. 
*/

    $arr = ['apple', 'orange', 'BMW', 'Mercedes', 'FORD'];

    foreach ($arr as $value) {
        echo $value . '<br />';
    }

    echo '<hr>';
/**
  * 2. Bir dəyişən götürün tipi Associative Array olsun adınız, yaşınız, soyadınız olsun. Key və value-ları çapa verin
*/
    $personalInfo = [
        'name' => 'Tural',
        'surname' => 'Gasimov',
        'age' => 25
    ];
    foreach ($personalInfo as $key => $value) {
        echo 'KEY: ' . $key . ' - Value:' . $value . '<br />';
    }

    echo '<hr>';

/**
  * 3. Bir dəyişən götürün tipi array 1-100 qədər cüt rəqəmləri toplayıb cəmin çıxışa verin.
*/

    $numbers = range(1, 100);
    $sum = 0;
    foreach ($numbers as $number) {
        if ($number % 2 == 0) {
            $sum += $number;
        }
    }
    echo $sum;
    echo '<hr>';

/**
  * 4. Bir dəyişən götürün tipi array 1-100 qədər tək rəqəmləri toplayıb cəmin çıxışa verin.
*/

    $numbers = range(1, 100);
    $sum = 0;
    foreach ($numbers as $number) {
        if ($number % 2 == 1) {
            $sum += $number;
        }
    }
    echo $sum;
    echo '<hr>';


/**
  * 5. Bir dəyişən götürün tipi array 1-100 qədər 3-ə tam bölünən ədədləri toplayıb cəmin çıxışa verin.
*/


    $numbers = range(1, 100);
    $sum = 0;
    foreach ($numbers as $number) {
        if ($number % 3 == 0) {
            echo $number;
        }
    }
    echo $sum;
    echo '<hr>';

/**
  * 6. Bir dəyişən götürün tipi array olsun və elmentləridə array olsun key kimi id,title olsun value kimi də müvafiq valuelar. İd və title çapa verin.
*/


    $posts = [
        [
            'id' => 1,
            'title' => 'PHP?',
        ],
        [
            'id' => 2,
            'title' => 'What is Value?',
        ],
        [
            'id' => 3,
            'title' => 'What is Array?',
        ],
        [
            'id' => 4,
            'title' => 'What is loops?',
        ],
    ];

    foreach ($posts as $post) {
        echo $post['id'] . ') ' . $post['title'] . '<br/>';
    }

    echo '<hr>';

/**
  * 7. İki dəyişən götürün tipi array olsun. Birində 1-10 qədər rəqəmlər digər isə boş olsun. İkinci array-a birinci arrayin ilk 5 ədədin push edin. Ikinci arrayi çapa verin
*/

    $numbers = range(1, 10);
    $arr2 = [];
    foreach ($numbers as $number) {
        if ($number <= 5) {
            array_push($arr2, $number);
        }
    }

    var_dump($arr2);

    echo '<hr>';
/**
  * 8. İki dəyişən götürün tipi array olsun. Birində 1-10 qədər rəqəmlər digər isə boş olsun. İkinci array-a birinci arrayin son 5 ədədin push edin. Ikinci arrayi çapa verin
*/

    $numbers = range(1, 10);
    $arr2 = [];
    foreach ($numbers as $number) {
        if ($number <= count($numbers) - 5) {
            continue;
        }
        array_push($arr2, $number);
    }

    var_dump($arr2);


    echo '<hr>';

/**
  * 9. İki dəyişən götürün tipi array olsun. Birində 1-10 qədər rəqəmlər digər isə boş olsun. İkinci array-a birinci arrayin 4-7 daxil olmaqla ədədləri push edin. Ikinci arrayi çapa verin (4,5,6,7).
*/


    $numbers = range(1, 10);
    $arr2 = [];
    foreach ($numbers as $number) {
        if ($number >= 4 && $number <= 7) {
            array_push($arr2, $number);
        }
    }

    var_dump($arr2);


    echo '<hr>';



/**
  * 10. Bir dəyişən götürün tipi array 1-20 qədər ədədlər olsun. İlk 10 rəqəmi çapa verin.
*/


    $numbers = range(1, 20);
    foreach ($numbers as $number) {
        echo $number . '<br/>';
        if ($number >= 10) {
            break;
        }
    }




    echo '<hr>';
/**
  * 11. Bir dəyişən götürün tipi array 1-20 qədər ədədlər olsun. İlk 10 rəqəmdən başqa digərlərin çapa verin.
*/

    $numbers = range(1, 20);
    foreach ($numbers as $number) {
        if ($number < 11) {
            continue;
        }
        echo $number . '<br/>';

    }

