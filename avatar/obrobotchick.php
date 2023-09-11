<?php
session_start();
require "../function_for_users.php";
require "../edit/function_for_edit.php";
require "../create_new_user_admin/function_for_create_user.php";
require "function.php";
$tmp_name = $_FILES['avatar']['tmp_name'];
$name_file = uniqid($_FILES['avatar']['name']);
$user_id = $_SESSION['user']['id'];
$path = "create_new_user_admin/upload/$name_file";

uploaded_file($tmp_name,$name_file);

upload_avatar($user_id,$path);

header("location:../users.php");

$message = 'Профиль успешно обновлен';
$_SESSION['success'] = $message;