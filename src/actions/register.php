<?php

require_once __DIR__ . "/../controllers/UserController.php";

// echo $_POST["sendInformation"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["sendInformation"])) {
        $email = $_POST["user_email"];
        $name = $_POST["user_name"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];
        $userController = new UserController();
        $useRes = $userController->createUser($email, $name, $password, $confirmPassword);

        if ($useRes !== "Created succesfully") {
            header("Location:/register?error=$useRes");
            exit();
        } else {
            header("Location:/login");
            exit();
        }
    }
}
