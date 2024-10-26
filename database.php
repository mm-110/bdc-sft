<?php

class Database {
    private $conn;

    public function __construct($config) {
        $this->conn = mysqli_connect(
            $config['db_host'],
            $config['db_user'],
            $config['db_pass'],
            $config['db_name']
        );

        if (!$this->conn) {
            throw new Exception("Connection failed: " . mysqli_connect_error());
        }
    }

    public function getStazioni() {
        $query = "SELECT * FROM STAZIONE";
        $result = mysqli_query($this->conn, $query);
        $stazioni = [];

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $stazioni[] = $row;
            }
        } else {
            throw new Exception("Error executing query: " . mysqli_error($this->conn));
        }

        return $stazioni;
    }

    public function getTreni() {
        $query = "SELECT * FROM TRENO";
        $result = mysqli_query($this->conn, $query);
        $treni = [];

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $treni[] = $row;
            }
        } else {
            throw new Exception("Error executing query: " . mysqli_error($this->conn));
        }

        return $treni;
    }

    public function __destruct() {
        mysqli_close($this->conn);
    }
}

// config.php
return [
    'db_host' => 'localhost',
    'db_user' => 'root',
    'db_pass' => '',
    'db_name' => 'test'
];
?>
