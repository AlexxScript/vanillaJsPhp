<?php 
require_once __DIR__ . "/../controllers/TaskController.php";

session_start();
$taskController = new TaskController();
$idUser = $_SESSION["id_user"];
$idTask = $_GET["idTask"];

$taskController->deleteTask($idTask,$idUser);
header("Location:/tasks");
