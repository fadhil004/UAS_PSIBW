<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$databaseName = "table_hero";

$connection = new mysqli($hostname, $user, $pass, $databaseName) or die("GAGAL KONEKSI WAK");

$sql = "SELECT `id`, `nama_hero`, `tipe_hero`, `damage` FROM `table_hero`.`table_hero_tank` WHERE  `id`=3";

$query = $connection->query($sql);

if ($query->num_rows != 0) {
    while ($row = $query->fetch_assoc()) {
        var_dump($row);
    }
}