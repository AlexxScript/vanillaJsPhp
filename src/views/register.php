<?php require_once __DIR__ . "/../components/nav.php" ?>
<?php 
    $error = $_GET["error"] ?? null;
    if ($error !== null) {
        echo $error;
    }
?>
<form action="../actions/register.php" method="post">
    <div class="inputClass">
        <label for="user_email">Email</label>
        <input type="email" name="user_email" id="" placeholder="email@email" required>
    </div>
    <div class="inputClass">
        <label for="user_name">User name</label>
        <input type="text" name="user_name" id="" placeholder="User name" required>
    </div>
    <div class="inputClass">
        <label for="password">Password</label>
        <input type="password" name="password" id="" placeholder="password" required>
    </div>
    <div class="inputClass">
        <label for="confirmPassword">Confirm password</label>
        <input type="password" name="confirmPassword" id="" placeholder="password" required>
    </div>
    <div>
        <input type="submit" name="sendInformation" id="" value="Submit">
    </div>
</form>
<?php require_once __DIR__ . "/../components/footer.php" ?>