<?php
namespace vasif;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



class Name{


    public $name;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function getName()
    {
        return 'Vasif ppakasindan ' . $this->name;
    }


}
