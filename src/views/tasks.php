<?php
require_once __DIR__ . "/../controllers/TaskController.php";
session_start();
if (!isset($_SESSION["id_user"])) {
    header("Location:/login");
}
$id = (int)$_SESSION["id_user"];
$taskController = new TaskController();
$taskController->getTasks($id);
$tas = $taskController->tasks;
?>

<?php require_once __DIR__ . "/../components/nav.php" ?>

<?php require_once __DIR__ . "/../components/formCreate.php" ?>

<?php foreach ($tas as $task) { ?>
    <div class="containerTask">
        <h2><?php echo $task["task_description"] ?></h2>
        <div class="buttons">
            <a class="editButton" href="/">Edit</a>
            <a class="deleteButton" href="/delete?idTask=<?php echo $task["id_task"]; ?>">Delete</a>
        </div>
    </div>
<?php } ?>

<?php require_once __DIR__ . "/../components/footer.php" ?>