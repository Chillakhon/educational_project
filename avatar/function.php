<?php
function has_image ($avatar)
{
 if ($avatar) {

     return true;
 }else {
     return false;
 }

}
 function upload_avatar ($user_id,$image)
 {
     $pdo = new  PDO("mysql:host=localhost;dbname=oop_pogrujeniy",'root','root');
     $sql= "UPDATE my_project SET image='$image' WHERE id='$user_id'";
     $statement=$pdo->prepare($sql);
     $statement->execute();
 }