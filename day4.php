<?php

$role = array("Midlaner", "Fighter", "Jungler", "Goldlaner", "Roamer");

$tipe = [
    "burst" => ["Eudora", "Lunox", "Luo Yi"],
    "crowd control" => ["Kufra", "Franco", "Minotaur"]
];

$role[5] = "Troublemaker";
var_dump($role);

echo "</br>";
echo "</br>";

for ($i=0; $i < count($role); $i++) { 
    echo $role[$i]. " | ";
}

echo "</br>";
echo "</br>";

$tipe["burst"][3] = "Cecilion";

var_dump($tipe);
?>