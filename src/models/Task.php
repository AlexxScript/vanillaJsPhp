<?php

require_once __DIR__ . "/Db.php";

class Task {

    function createTask($idTask,$idUser,$description){
        try {
            $con = new Db();
            $db = $con->conection;
            $a = $db->prepare("INSERT INTO task (description) values (?) WHERE id_task = ? AND id_user = ?");
            $a->execute([$description,$idTask,$idUser]);
            $task = $a->fetchAll(PDO::FETCH_ASSOC);
            return $task;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    function getTask($idTask,$idUser){
        try {
            $con = new Db();
            $db = $con->conection;
            $a = $db->prepare("SELECT * FROM task WHERE id_task = ? AND id_user = ?");
            $a->execute([$idTask,$idUser]);
            $task = $a->fetchAll(PDO::FETCH_ASSOC);
            return $task;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function getTasks($idUser){
        try {
            $con = new Db();
            $db = $con->conection;
            $a = $db->prepare("SELECT * FROM task WHERE id_user = ?");
            $a->execute([$idUser]);
            $task = $a->fetchAll(PDO::FETCH_ASSOC);
            return $task;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    function deleteTask($idTask,$idUser){
        try {
            $con = new Db();
            $db = $con->conection;
            $a = $db->prepare("DELETE FROM task WHERE id_task = ? AND id_user = ?");
            $a->execute([$idTask,$idUser]);
            $task = $a->fetchAll(PDO::FETCH_ASSOC);
            return $task;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    function editTask($description,$idTask,$idUser){
        try {
            $con = new Db();
            $db = $con->conection;
            $a = $db->prepare("UPDATE task SET description = ? WHERE id_task = ? AND id_user = ?");
            $a->execute([$description,$idTask,$idUser]);
            $task = $a->fetchAll(PDO::FETCH_ASSOC);
            return $task;
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

}