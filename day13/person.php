<?php

class Person {
    public $name = "default";
    public $age = 0;
    public $birthDate = "00-00-0000";
    public $hobby = "default hobby";

    public function __construct($namaOrang, $ageOrang, $birthDateOrang, $hobbyOrang){

        $this->name = $namaOrang;
        $this->age = $ageOrang;
        $this->birthDate = $birthDateOrang;
        $this->hobby = $hobbyOrang;

        
    }
    public function printPerson() {
        echo $this->name. "\n";
        echo $this->age. "\n";
        echo $this->birthDate. "\n";
        echo $this->hobby. "\n";
        echo "-----------\n";
    }
}

$fadhil = new Person("Fadhil", 21, "04-09-2002", "Ngoding");
$fadhil->printPerson();

$farraz = new Person("Farraz", 23, "01-01-2001", "Mancing");
$farraz->printPerson();

?>