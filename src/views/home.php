<?php
session_start();
if (!isset($_SESSION["id_user"])) {
    header("Location:/login");
}
?>

<?php require_once __DIR__ . "/../components/nav.php" ?>
<div class="mainContainer">
    <h1><?php echo $_SESSION["user_name"] ?></h1>
</div>
<?php require_once __DIR__ . "/../components/footer.php" ?>