<?php 

include './tural/name.php';
include './vasif/name.php';


use tural\Name;
$name= new Name();
$name-> setName('vasif');
echo $name-> getName ();
