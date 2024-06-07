<?php

class Connection {
    
    private $hostname = "localhost";
    private $user = "";
    private $pass = "";
    private $databaseName = "";
    public $connection;

    public function __construct($host, $user, $pass, $databaseName) {
        $this->hostname = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->databaseName = $databaseName;
    }

    public function connect() {
        $this->connection = new mysqli(
            $this->hostname,
            $this->user,
            $this->pass,
            $this->databaseName,
        );
    }
}