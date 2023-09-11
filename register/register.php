<?php
session_start();
require "function.php";


$email = $_POST['email'];
$password = $_POST['password'];

get_user_by_email($email);

if (!empty(get_user_by_email($email)))
{
    set_flash_message('danger','Этот эл. адрес уже занят другим пользователем.');
    redirect_to('page_register.php');
}

add_user($email,$password);

display_flash_message('page_login.php','Регистрация успешна','success');

