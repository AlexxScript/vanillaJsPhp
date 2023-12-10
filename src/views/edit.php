<?php
session_start();
if (!isset($_SESSION["id_user"])) {
    header("Location:/home");
}
?>

<?php require_once __DIR__ . "/../components/nav.php" ?>

<div class="mainContainer">
    <form class="formEdit" action="/editaction" method="post">
        <div class="inputClass">
            <input type="text" value="<?php echo $_GET["idTask"] ?>" hidden name="idTask">
            <label for="">Description</label>
            <textarea class="textEdit" name="description" id="" required ></textarea>
        </div>  
        <div>
            <input type="submit" value="Edit" name="submit">
        </div>
    </form>
</div>

<?php require_once __DIR__ . "/../components/footer.php" ?>