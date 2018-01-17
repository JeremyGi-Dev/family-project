<?php

namespace App\Config;

use PDO;

class config {

    public $db_host = "localhost";
    public $db_name = "project";
    public $db_user = "root";
    public $db_pass = "lol";

    public function __construct($db_host, $db_name, $db_user, $db_pass)
    {
        $this->db_name = $db_name;
        $this->db_host = $db_host;
        $this->db_pass = $db_pass;
        $this->db_user = $db_user;
    }

    public function dbConnect()
    {
        try {
            $db = new PDO("mysql:host=localhost;dbname=project", "root", "lol");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (\PDOException $e) {

                echo 'Connection failed: ' . $e->getMessage();
        }

        return $db;
    }
}

