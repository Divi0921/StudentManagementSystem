<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require("./entities/auth.php");

if (isset($_POST['rollNumber'])) {
    $rollNumber = $_POST['rollNumber'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $user = Auth::login($rollNumber, $password, $role);


    echo $user['_id'];

    if (!$user) {
        // exit(header("Location:  ./login.php"));
    }

    $_SESSION["_id"] = $user["_id"];
    $_SESSION["rollNumber"] = $user["rollNumber"];
    $_SESSION["role"] = $user["role"];

    print_r($_SESSION["_id"]);

} else {
    exit(header("Location:  ./login.php"));
}