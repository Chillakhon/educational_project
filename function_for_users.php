<?php

session_start();

// Функция для авторизации ползователья
function logen()
{
    $pdo = new PDO("mysql:host=localhost;dbname=oop_pogrujeniy",'root','root');
    $sql= "SELECT * FROM register";

    $statement=$pdo->prepare($sql);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);


    $_SESSION['user'] = $user;

    return $user;

}

// вошел в систему
function is_logged_in(){
    if (isset($_SESSION['user'])) {
        return true;
    }
        return false;
}

// не вошел в систему
function is_not_logged_in(){
    return !is_logged_in();
}

function redirect_to($path){
    header("location:$path");
    exit();
}

function get_users(){

    $pdo = new PDO("mysql:host=localhost;dbname=oop_pogrujeniy",'root','root');
    $statement = $pdo->query("SELECT * FROM my_project");
    $user = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $user;
}

//получить аутентифицированного пользователя
function get_authenticated_user(){
    if (is_logged_in()) {
        return $_SESSION['user'];
    }
    return false;
}
//
function is_admin($user)
{
    if (is_logged_in()){
        if ($user['role'] === "admin") {
            return true;
        }
        return false;
    }
}
function is_equal($user,$current_user){
    if ($user['id'] == $current_user['id']){
        return true;
    }
    return false;
}


