<?php
session_start();


function delete ($user_id)
{
    $pdo = new  PDO("mysql:host=localhost;dbname=oop_pogrujeniy",'root','root');
    $sql= "DELETE FROM my_project  WHERE id='$user_id'";
    $statement=$pdo->prepare($sql);
    $statement->execute();
}
