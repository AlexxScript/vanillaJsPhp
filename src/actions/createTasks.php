<?php

require_once __DIR__ . "/../controllers/TaskController.php";
require_once __DIR__ . "/../models/Task.php";

session_start();
$id = (int)$_SESSION["id_user"];
print $id;
$taskController = new TaskController();
$tas = $taskController->createTask($id,"description2");
var_dump($tas);