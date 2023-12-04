<?php
require(__DIR__ . "/models/Db.php");

try {
    $con = new Db();
    $db = $con->conection;
    var_dump($db->query("SELECT 1+1"));
} catch (PDOException $e) {
    print $e->getMessage();
}

