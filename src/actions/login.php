<?php 
require_once __DIR__ . "/../controllers/UserController.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if (isset($_POST["buttonLogin"])) {
        $email = $_POST["user_email"];
        $password = $_POST["password"];
        $controller = new UserController();
        $resController = $controller->login($email,$password);

        if ($resController !== "Logged in") {
            header("Location:/login?error=$resController");
        } else {
            header("Location:/");
        }

    }
}