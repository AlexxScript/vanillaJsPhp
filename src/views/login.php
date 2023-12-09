<?php
session_start();
if (isset($_SESSION["id_user"])) {
    header("Location:/home");
}
?>

<?php require_once __DIR__ . "/../components/nav.php" ?>

<div class="mainContainer">
    <form action="../actions/login.php" method="post">
        <div class="inputClass">
            <label for="">Email</label>
            <input type="email" name="user_email" id="" required placeholder="email@email">
        </div>
        <div class="inputClass">
            <label for="">Password</label>
            <input type="password" name="password" id="" required placeholder="password">
        </div>
        <div>
            <input type="submit" value="Log in" name="buttonLogin">
        </div>
    </form>
</div>


<?php require_once __DIR__ . "/../components/footer.php" ?>