<?php

$tipe = [
    "burst" => ["Eudora", "Lunox", "Luo Yi"],
    "crowd control" => ["Kufra", "Franco", "Minotaur"]
];

foreach ($tipe as $key => $value){
    foreach ($value as $val) {
        echo $val;
        echo "</br>";
    }
    echo "</br>";
}

?>