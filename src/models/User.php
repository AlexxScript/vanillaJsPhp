<?php

require_once __DIR__ . "/Db.php";

class User { 
    public $user_name;
    public $user_email;

    function createUser($email,$name,$password){
        try {
            $con = new Db();
            $db = $con->conection;
            $dboperation = $db->prepare("INSERT INTO user (user_email,user_name,password) VALUES (:email,:name,:password)");
            $dboperation->bindParam(":email",$email);
            $dboperation->bindParam(":name",$name);
            $dboperation->bindParam(":password",$password);
            $dboperation->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        
    }

    function getUser($email,$name) {
        try {
            $con = new Db();
            $db = $con->conection;
            $dboperation = $db->prepare("SELECT * FROM user WHERE user_email = :email AND user_name = :name");
            $dboperation->bindParam(":email",$email);
            $dboperation->bindParam(":name",$name);
            $dboperation->execute();
            $data = $dboperation->fetch();
            return $data;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    function getUserByEmail($email) {
        try {
            $con = new Db();
            $db = $con->conection;
            $dboperation = $db->prepare("SELECT id_user,user_name,password FROM user WHERE user_email = :email");
            $dboperation->bindParam(":email",$email);
            $dboperation->execute();
            return $dboperation->fetch();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    function deleteUser($id) {
        try {
            $con = new Db();
            $db = $con->conection;
            $dboperation = $db->prepare("DELETE FROM user WHERE id_user = :id");
            $dboperation->bindParam(":id",$id);
            $dboperation->execute();
            $objeto = $dboperation->fetch();
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

}