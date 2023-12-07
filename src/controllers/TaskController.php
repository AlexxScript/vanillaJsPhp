<?php 

require_once __DIR__ . "/../models/Task.php";

class TaskController {

    public $taskModel;
    public $tasks;

    function __construct(){
        $this->taskModel = new Task();
    }

    public function getTasks($id_user) {
        $this->tasks = $this->taskModel->getTasks($id_user);
        return $this->tasks;
    }

}