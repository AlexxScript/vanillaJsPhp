<?php

require_once __DIR__ . "/../models/User.php";

class UserController{

    function createUser($email, $name, $password, $confirmPassword){
        $modelUser = new User();
        $res = $modelUser->getUser($email, $name);

        if ($res) {
            return "User exist";
        }

        if ($password === $confirmPassword) {
            $cryptPass = password_hash($password,PASSWORD_DEFAULT);
            $modelUser->createUser($email, $name, $cryptPass);
            return "Created succesfully";
        } else {
            return "password does not match";
        }
    }

}
