<?php
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$exist = true;
include 'functions.php'; // require once 
openConnection();
$result = checkUser($email, $password);
if (mysqli_num_rows($result) != 1) {
    $exist = false;
}
closeConnection();


if ($exist) {
    $_SESSION["email"] = $email;

    if (isset($_POST["remember"])) {
        $cookie_name = "email";
        $cookie_value = $email;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

        $cookie_name = "password";
        $cookie_value = $password;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    } else {
        $cookie_name = "email";
        $cookie_value = "";
        setcookie($cookie_name, $cookie_value, time() - 10000, "/");

        $cookie_name = "password";
        $cookie_value = "";
        setcookie($cookie_name, $cookie_value, time() - 10000, "/");
    }
    header("Location: http://localhost:3000/main-page.php");
    die();
} else {
    header("Location: http://localhost:3000/login.php?login=fail");
    die();
}
