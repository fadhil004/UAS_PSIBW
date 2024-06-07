<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$databaseName = "table_hero";

$connection = new mysqli($hostname, $user, $pass, $databaseName) or die("GAGAL KONEKSI WAK");

if ($connection->connect_error) {
    die("Connection failed: ". $connection->connect_error);
}

$sql = "UPDATE `table_hero`.`table_hero_tank` SET `damage` = 45 WHERE `id` = 3";

if ($connection->query($sql) === TRUE) {
    echo "Baris berhasil diupdate";
} else {
    echo "Error: ". $sql. "<br>". $connection->error;
}

?>