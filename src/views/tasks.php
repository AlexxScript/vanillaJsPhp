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
// var_dump($tas);
?>

<?php require_once __DIR__ . "/../components/nav.php" ?>

<?php require_once __DIR__ . "/../components/formCreate.php" ?>

<?php foreach ($tas as $task) { ?>
    <h1><?php echo $task["id_task"] ?></h1>
    <h2><?php echo $task["task_description"] ?></h2>
<?php } ?>

<?php require_once __DIR__ . "/../components/footer.php" ?>