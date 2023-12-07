<?php

require_once __DIR__ . "/../models/User.php";

class UserController{

    public $userModel;

    function __construct(){
        $this->userModel = new User();
    }

    function createUser($email, $name, $password, $confirmPassword){
        $modelUser = new User();
        $res = $this->userModel->getUser($email, $name);
        if (!isset($name) or !isset($email) or !isset($password) or !isset($confirmPassword)) {
            return "Must send complete information";
        }
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

    function login ($email,$password) {
        session_start();
        if (!isset($email) or !isset($password)) {
            return "Must set data";
        }
        $user = $this->userModel->getUserByEmail($email);
        if (!$user) {
            return "User does not exist";
        }
        $passVerify = password_verify($password,$user["password"]);
        if (!$passVerify) {
            return "Wrong password";
        }
        $_SESSION["id_user"] = $user["id_user"];
        $_SESSION["user_name"] = $user["user_name"];
        return "Logged in";
    }

    function logOut () {
        session_start();
        session_destroy();
        header("Location:/login");
    }

}
