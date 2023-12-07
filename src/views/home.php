<?php
session_start();
if (!isset($_SESSION["id_user"])) {
    header("Location:/login");
} 
?> 

<?php require_once __DIR__ . "/../components/nav.php" ?>
<h1><?php echo $_SESSION["user_name"] ?></h1>
<?php require_once __DIR__ . "/../components/footer.php" ?>
