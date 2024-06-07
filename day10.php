<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$databaseName = "table_hero";

$connection = new mysqli($hostname, $user, $pass, $databaseName) or die("GAGAL KONEKSI WAK");

if ($connection->connect_error) {
    die("Connection failed: ". $connection->connect_error);
}

$sql = "INSERT INTO `table_hero`.`table_hero_tank`(`nama_hero`,`tipe_hero`,`damage`) VALUES('Grock','Burst',75)";

if ($connection->query($sql) === TRUE) {
    echo "Baris baru berhasil dibuat";
} else {
    echo "Error: ". $sql. "<br>". $connection->error;
}


?>