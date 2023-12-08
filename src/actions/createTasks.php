<?php

require_once __DIR__ . "/../controllers/TaskController.php";
require_once __DIR__ . "/../models/Task.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["send"])) {
        $controllerTask = new TaskController();
        $description = $_POST["description"];
        $idUser = (int)$_SESSION["id_user"];
        $controllerTask->createTask($idUser,$description);
        header("Location:/tasks");
    }
}
