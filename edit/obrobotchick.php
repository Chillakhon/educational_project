<?php
session_start();
require "../function_for_users.php";

require "function_for_edit.php";
$username = $_POST['username'];
$job_title = $_POST['job_title'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];
var_dump($_POST);

$id_user_get = $_SESSION['id_user_get'];


edit_info($id_user_get,$username,$job_title,$phone,$adress);

set_message('Профиль успешно обновлен');

redirect_to('/index.php/users.php');
