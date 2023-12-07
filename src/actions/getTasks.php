<?php
require_once __DIR__ . "/../controllers/TaskController.php";
require_once __DIR__ . "/../models/Task.php";

session_start();
$id = (int)$_SESSION["id_user"];
$taskController = new TaskController();
$taskController->getTasks($id);
$tas = $taskController->tasks;
var_dump($tas[0]);
foreach ( $tas[0] as $t => $value ){
    var_dump($value);
}