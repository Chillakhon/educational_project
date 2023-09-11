<?php
function set_status ($user_id,$status)
{
    $pdo = new  PDO("mysql:host=localhost;dbname=oop_pogrujeniy",'root','root');
    $sql= "UPDATE my_project SET status='$status' WHERE id='$user_id'";
    $statement=$pdo->prepare($sql);
    $statement->execute();
}


