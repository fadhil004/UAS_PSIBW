<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$databaseName = "table_hero";

$connection = new mysqli($hostname, $user, $pass, $databaseName) or die("GAGAL KONEKSI WAK");

if ($connection->connect_error) {
    die("Connection failed: ". $connection->connect_error);
}

$sql = "DELETE FROM `table_hero`.`table_hero_tank` WHERE tipe_hero = 'burst' AND damage > 70";

if ($connection->query($sql) === TRUE) {
    echo "Baris berhasil dihapus";
} else {
    echo "Error: ". $sql. "<br>". $connection->error;
}

?>