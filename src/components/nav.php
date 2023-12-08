<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>TaskApp</title>
</head>

<body>

    <?php if (isset($_SESSION["id_user"])) { ?>

        <nav>
            <ul>
                <li><a href="/tasks">Tasks</a></li>
                <li><a href="/">Home</a></li>
                <li><a href="/logout">Log out</a></li>
            </ul>
        </nav>

    <?php } ?>

    <?php if (!isset($_SESSION["id_user"])) { ?>
        <nav>
            <ul>
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
                <li><a href="/">Home</a></li>
            </ul>
        </nav>
    <?php } ?>