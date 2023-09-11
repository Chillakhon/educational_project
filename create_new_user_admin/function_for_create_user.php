<?php
session_start();
//проверяемь существует ли в базе такой email
function free_email($email)
{
    $pdo = new PDO("mysql:host=localhost;dbname=oop_pogrujeniy",'root','root');
    $sql = "SELECT * FROM security_media ";
    $stm = $pdo->prepare($sql);
    $stm->execute();
    $user = $stm->fetch(PDO::FETCH_ASSOC);
    $emailBd = $user['email'];

    if ($email === $emailBd) {
        $message = 'такой email занят';
        $_SESSION['danger'] = $message;
        header("location:/index.php/create_new_user_admin/create_user.php");
        exit();
    }


}

function add_user($email,$password){

    $pdo = new PDO("mysql:host=localhost;dbname=oop_pogrujeniy",'root','root');

    $sql="INSERT INTO security_media (email,password) VALUES (:email,:password)";

    $statement=$pdo->prepare($sql);

    $statement->execute([
        "email"=>$email,
        "password"=>password_hash($password, PASSWORD_DEFAULT)
    ]);

     return $pdo->lastInsertId();

}

function general_information ($username,$job_title,$phone,$adress,$status,$id_user,$avatar) {

    $pdo = new PDO("mysql:host=localhost;dbname=oop_pogrujeniy",'root','root');

    $sql="INSERT INTO general_information (username,job_title,phone,adress,status,id_user,avatar) VALUES (:username,:job_title,:phone,:adress,:status,:id_user,:avatar)";

    $statement=$pdo->prepare($sql);

    $statement->execute([
        "username"=>$username,
        "job_title"=>$job_title,
        "phone"=>$phone,
        "adress"=>$adress,
        "status"=>$status,
        "id_user"=>$id_user,
        "avatar"=>$avatar,
    ]);

}
 function uploaded_file($tmp_name_files,$name_files)
 {
     $tmp_name = $tmp_name_files;
     $name = $name_files;
     move_uploaded_file($tmp_name, '../create_new_user_admin/upload/' . $name);
 }

 function social($vk,$telegram,$instagram,$id_user) {

     $pdo = new PDO("mysql:host=localhost;dbname=oop_pogrujeniy",'root','root');

     $sql="INSERT INTO social (vk,telegram,instagram,id_user) VALUES (:vk,:telegram,:instagram,:id_user)";

     $statement=$pdo->prepare($sql);

     $statement->execute([
         "vk"=>$vk,
         "telegram"=>$telegram,
         "instagram"=>$instagram,
         "id_user"=>$id_user
     ]);
 }

