<?php

require_once __DIR__ . "/../controllers/TaskController.php";
session_start();

if(isset($_POST["submit"])){
    $idUser = (int) $_SESSION["id_user"];
    $description = $_POST["description"];
    $idTask = $_POST["idTask"];
    $edit = new TaskController();
    $res = $edit->editTask($description,$idTask,$idUser);
    header("Location:/tasks");
}