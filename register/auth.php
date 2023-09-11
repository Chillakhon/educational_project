<?php
session_start();

require "function_auth.php";
require "function.php";

$email = $_POST['email'];
$password = $_POST['password'];



get_user_for_auth($email);



if (empty(get_user_for_auth($email))) {
    $_SESSION["error"] = "Неверный логин или пароль";
    header("location:/index.php/register/page_login.php");
    exit();
}

if (!password_verify($password, get_user_for_auth($email)["password"])) {
    $_SESSION["error"] = "Неверный логин или пароль";
    header("location:/index.php/register/page_login.php");
    exit();
}

redirect_to('/index.php/users.php');