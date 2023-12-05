<?php

require_once __DIR__ . "/Db.php";

class User { 
    public $user_name;
    public $user_email;

    function createUser($email,$name,$password){
        try {
            $con = new Db();
            $db = $con->conection;
            $dboperation = $db->prepare("INSERT INTO user (user_email,user_name,password) VALUES (?,?,?)");
            $dboperation->execute([$email,$name,$password]);
            $objeto = $dboperation->fetch();
            var_dump($objeto);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        
    }

    function getUser($userEmail,$userName) {
        try {
            $con = new Db();
            $db = $con->conection;
            $dboperation = $db->prepare("SELECT * FROM user WHERE user_email = ? AND user_name = ?");
            $dboperation->execute([$userEmail,$userName]);
            $data = $dboperation->fetch();
            return $data;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    function getUserByEmail($userEmail) {
        try {
            $con = new Db();
            $db = $con->conection;
            $dboperation = $db->prepare("SELECT * FROM user WHERE user_email = ?");
            $dboperation->execute([$userEmail]);
            return $dboperation->fetch();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    function deleteUser($id) {
        try {
            $con = new Db();
            $db = $con->conection;
            $dboperation = $db->prepare("DELETE FROM user WHERE id_user = ?");
            $dboperation->execute([$id]);
            $objeto = $dboperation->fetch();
            var_dump($objeto);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

}