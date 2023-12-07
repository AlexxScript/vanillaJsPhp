<?php

require_once __DIR__ . "/Db.php";

class Task {

    function createTask($idUser,$description){
        try {
            $con = new Db();
            $db = $con->conection;
            $dbOperation = $db->prepare("INSERT INTO task(id_user,task_description) VALUES(:idUser,:description)");
            $dbOperation->bindParam(":idUser",$idUser);
            $dbOperation->bindParam(":description",$description);
            $a= $dbOperation->execute();
            return $a;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    function getTask($idTask,$idUser){
        try {
            $con = new Db();
            $db = $con->conection;
            $dbOperation = $db->prepare("SELECT * FROM task WHERE id_task = :idTask AND id_user = :idUser");
            $dbOperation->bindParam(":idTask",$idTask);
            $dbOperation->bindParam(":idUser",$idUser);
            $dbOperation->execute();
            $task = $dbOperation->fetchAll(PDO::FETCH_ASSOC);
            return $task;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function getTasks($idUser){
        try {
            $con = new Db();
            $db = $con->conection;
            $dbOperation = $db->prepare("SELECT * FROM task WHERE id_user = :idUser");
            $dbOperation->bindParam(":idUser",$idUser);
            $dbOperation->execute();
            $task = $dbOperation->fetchAll(PDO::FETCH_ASSOC);
            return $task;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    function deleteTask($idTask,$idUser){
        try {
            $con = new Db();
            $db = $con->conection;
            $dbOperation = $db->prepare("DELETE FROM task WHERE id_task = ? AND id_user = ?");
            $dbOperation->execute([$idTask,$idUser]);
            $task = $dbOperation->fetchAll(PDO::FETCH_ASSOC);
            return $task;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    function editTask($description,$idTask,$idUser){
        try {
            $con = new Db();
            $db = $con->conection;
            $dbOperation = $db->prepare("UPDATE task SET description = :description WHERE id_task = :idTask AND id_user = :idUser");
            $dbOperation->bindParam(":description",$description);
            $dbOperation->bindParam(":idTask",$idTask);
            $dbOperation->bindParam(":idUser",$idUser);
            $dbOperation->execute();
            $task = $dbOperation->fetchAll(PDO::FETCH_ASSOC);
            return $task;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

}