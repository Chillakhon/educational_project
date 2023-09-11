<?php
session_start();
require "function_for_create_user.php";


$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];
$job_title = $_POST['job_title'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];
$status = $_POST['status'];
// соц сеты
$vk = $_POST['vk'];
$telegram = $_POST['telegram'];
$instagram = $_POST['instagram'];

$tmp_name = $_FILES['avatar'] ['tmp_name'];
$name = $avatar = uniqid($_FILES['avatar']['name']);
var_dump($_POST);


//Проверяем существует ли такой емайл в базе
free_email($email);

//Добовляем ползователя в базу и возврашвем его id
$id_user = add_user($email,$password);

//добовляем все данные пользователя
general_information ($username,$job_title,$phone,$adress,$status,$id_user,$avatar);

// Перекинить файл в указную папку
uploaded_file($tmp_name,$name);

// добовить соц сеты пользователя
social($vk,$telegram,$instagram,$id_user);

//
header("location:../users.php");

$message = 'Пользователь добавлен ';
$_SESSION['success'] = $message;

