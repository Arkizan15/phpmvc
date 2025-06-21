<?php

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh,
            $stmt;

   public function __construct(){
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
        $this->dbh = new PDO($dsn, 'root', '');
    }catch(PDOException $e){
        die($e->getMessage());
    }
   } 
}