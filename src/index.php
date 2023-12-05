<?php
require(__DIR__ . "/models/Db.php");
require(__DIR__ . "/models/User.php");
require(__DIR__ . "/controllers/UserController.php");


//Testing controllers and models
$contro = new UserController();

var_dump($contro->createUser("user8@user8","user8","ss","ss"));


// $a = new User();
// $user = $a->createUser("user2@user2","user2","pass");
// $user = $a->getUserByEmail("user2@user2");
// var_dump($user);
