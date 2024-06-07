<?php

require_once "database.php";

$db = new Database();
$db->connect();

$data = $db->insert("Tigreal", "Crowd Control", 99);
var_dump($data);

$heroes = $db->getAll();

if ($heroes->num_rows > 0) {
    while ($row = $heroes->fetch_assoc()) {
        var_dump($row);
    }
}

$rawQuery = $db->rawQuery("SELECT * FROM table_hero_tank WHERE id = 1");

if ($rawQuery->num_rows > 0) {
    while ($row = $rawQuery->fetch_assoc()) {
        var_dump($row);
    }
}

?>