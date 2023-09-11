<?php
session_start();
function get_user_by_id($id)
{
    $pdo = new PDO("mysql:host=localhost;dbname=oop_pogrujeniy",'root','root');

    $sql= "SELECT * FROM my_project WHERE id=:id";
    $statement=$pdo->prepare($sql);
    $statement->execute(['id'=>$id]);
    /** @var TYPE_NAME $users */
    $users = $statement->fetch(PDO::FETCH_ASSOC);
    return $users;
}

function edit_info($id,$username,$job_title,$phone,$adress)
{
    $pdo = new  PDO("mysql:host=localhost;dbname=oop_pogrujeniy",'root','root');
    $sql= "UPDATE my_project SET username='$username',job_title='$job_title',phone='$phone',adress='$adress' WHERE id='$id'";
    $statement=$pdo->prepare($sql);
    $statement->execute();

}

function set_message ($message)
{
    $_SESSION['message'] = $message;
}