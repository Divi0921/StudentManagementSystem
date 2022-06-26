<?php

require("./entities/auth.php");

if (isset($_POST)) {
    $rollNumber = $_POST['rollNumber'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $user = Auth::login($rollNumber, $password, $role);
}
