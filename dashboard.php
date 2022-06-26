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

    if(!$rollNumber){
        exit(header("Location:  ./login.php?msg=`userId can not be empty`"));        
    }
    if(!$password){
        exit(header("Location:  ./login.php?msg=`password can not be empty`"));        
    }
    if(!$role){
        exit(header("Location:  ./login.php?msg=`role can not be empty`"));        
    }

    $user = Auth::login($rollNumber, $password, $role);

    if (!$user) {
        exit(header("Location:  ./login.php?msg=`invalid userId and password`"));
    }

    $_SESSION["_id"] = $user["_id"];
    $_SESSION["rollNumber"] = $user["rollNumber"];
    $_SESSION["role"] = $user["role"];

    echo "login then session started";

} 
else if(isset($_SESSION["_id"]))
{
    echo "Hello session already set";
}
else {
    exit(header("Location:  ./login.php?msg=`invalid method`"));
}
