<?php

require_once(__DIR__ . "/../config.php");

class Db{
    public $conection;
    function __construct(){
        try {
            $this->conection = new PDO('mysql:host=localhost;dbname=mydatabase', USERDB, PASSWORD);
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            exit();
        }
    }
}
