<?php
session_start();
require "function.php";
require "../edit/function_for_edit.php";

$status = $_POST['status'];
$id_user = $_SESSION['id_user'];

set_status($id_user,$status);
set_message('Прщфиль успешно обновлен');
header("location:/index.php/users.php");