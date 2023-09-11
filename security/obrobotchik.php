<?php
session_start();

require "function.php";
require "../register/function.php";
$email = $_POST['email'];
$id_user = $_SESSION['id'];
edit_credentials($id_user,$email);


set_flash_message('success','email успешно обновлен');

header("location:/index.php/users.php");