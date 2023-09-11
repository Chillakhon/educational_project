<?php
session_start();

function get_user_for_auth ($email)
{
    $pdo = new PDO("mysql:host=localhost;dbname=oop_pogrujeniy",'root','root');
    $sql= "SELECT * FROM register WHERE email=:email";

    $statement=$pdo->prepare($sql);
    $statement->execute(['email'=>$email]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user;
}

