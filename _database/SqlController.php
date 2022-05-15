<?php

namespace SQL;

use PDO;

Abstract class Sql extends PDO{

    protected $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=db_academy", "root", "");
    }

}

?>