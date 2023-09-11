<?php

session_start();

/*add_user*/
/*Parameters:
        string - $email
        Description: поиск пользователя по эл-адрес
    return value: array */
function get_user_by_email($email){
    $pdo = new PDO("mysql:host=localhost;dbname=oop_pogrujeniy",'root','root');

    $sql= "SELECT * FROM register WHERE email=:email";
    $statement=$pdo->prepare($sql);
    $statement->execute(['email'=>$email]);
    /** @var TYPE_NAME $users */
    $users = $statement->fetch(PDO::FETCH_ASSOC);
    return $users;
}
function set_flash_message($name,$message){
    $_SESSION[$name]=$message;
}
function redirect_to($path){
    header("location:{$path}");
    exit();
}
function add_user($email,$password){

    $pdo = new PDO("mysql:host=localhost;dbname=oop_pogrujeniy",'root','root');

    $sql="INSERT INTO register (email,password) VALUES (:email,:password)";

    $statement=$pdo->prepare($sql);

    $statement->execute([
        "email"=>$email,
        "password"=> password_hash($password, PASSWORD_DEFAULT)
    ]);

    return $pdo->lastInsertId();
}
function display_flash_message($name,$message,$suck){
    $_SESSION[$suck]=$message;
    header("location:{$name}");
}

