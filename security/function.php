<?php
function edit_credentials ($user_id,$email)
{
    $pdo = new  PDO("mysql:host=localhost;dbname=oop_pogrujeniy",'root','root');
    $sql= "UPDATE my_project SET email='$email' WHERE id='$user_id'";
    $statement=$pdo->prepare($sql);
    $statement->execute();
}



