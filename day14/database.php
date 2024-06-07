<?php

require_once "connection.php";

class Database extends Connection {

    protected $tableName = 'table_hero_tank';

    public function __construct() {
        parent::__construct("localhost", "root", "", "table_hero");
    }

    public function getAll() {
        $sql = "SELECT * FROM $this->tableName";
        $result = $this->connection->query($sql);
        return $result;
    }

    public function rawQuery($sql) {
        $result = $this->connection->query($sql);
        return $result;
    }

    public function insert($nama, $tipe, $damage) {
        $sql = "INSERT INTO $this->tableName (nama_hero, tipe_hero, damage) VALUES ('".$nama."', '".$tipe."', '".$damage."')";
        $result = $this->connection->query($sql);
        if ($result === FALSE) {
            return "Gagal membuat record baru";
        }

        return "Berhasil membuat record baru";
    }
}


?>