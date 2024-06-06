<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require './vendor/autoload.php';



define('FILE','./data.csv');

$file = fopen(FILE,'r');
while($row = fgetcsv($file,filesize(FILE))){
    $data[] = $row;
}
fclose($file);



$file = fopen(FILE,'a+');
fputcsv($file,['Test-'.rand(1,100)]);
fclose($file);




$newfile = fopen('test.txt','w');

fwrite($newfile,'Salam');

fclose($newfile);



dd($data, $newfile);