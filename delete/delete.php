<?php

session_start();
require "../function_for_users.php";
require "../edit/function_for_edit.php";
require "../create_new_user_admin/function_for_create_user.php";
require "function.php";

$user_id = logen();

if (!get_authenticated_user()) {
    header("location:/index.php/register/page_login.php");
    exit();
}

if (!is_admin($user_id)) {
    header("location:../status/status.php");
}

$id_user = $_GET['id'];
delete($id_user);

header("location:../users.php");

$message = 'Пользователь удален';
$_SESSION['success'] = $message;