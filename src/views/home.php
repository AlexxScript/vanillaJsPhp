<?php
session_start();
if (!isset($_SESSION["id_user"])) {
?>
    <?php require_once __DIR__ . "/../components/nav.php" ?>

    <div class="mainContainerHome homeContainer">
        <h1>You must log in</h1>
    </div>
    <?php require_once __DIR__ . "/../components/footer.php" ?>

<?php } else { ?>

    <?php require_once __DIR__ . "/../components/nav.php" ?>
    <div class="mainContainerHome homeContainer">
        <h1><?php echo $_SESSION["user_name"] ?></h1>
    </div>
    <?php require_once __DIR__ . "/../components/footer.php" ?>

<?php } ?>