<?php
require(__DIR__ . "/models/Db.php");

try {
    $con = new Db();
    $db = $con->conection;
    $a = $db->prepare("DESCRIBE task");
    $a->execute();
    $objeto = $stmt->fetch();
    echo $objeto;
} catch (PDOException $e) {
    print $e->getMessage();
}

