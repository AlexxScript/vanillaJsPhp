<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location:/login");
} 
?> 

<?php require_once __DIR__ . "/../components/nav.php" ?>
<h1><?php echo $_SESSION["user_id"] ?></h1>
<?php require_once __DIR__ . "/../components/footer.php" ?>
