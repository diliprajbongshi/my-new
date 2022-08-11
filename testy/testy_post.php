<?php
session_start();
require "../db.php";


$desp = $_POST['desp'];
$title = $_POST['title'];
$sub_title = $_POST['sub_title'];


$uploaded_file = $_FILES['profile_photo'];
$uploaded_file_name = $uploaded_file['name'];
$after_explode = explode('.',$uploaded_file_name);
$extention = end($after_explode);
$allowed_extention = array('png','jpg','gif');
if(in_array($extention,$allowed_extention)){
      if($uploaded_file['size'] <=10000000){
            
            $insert = "INSERT INTO testy(desp,title,sub_title)VALUES('$desp','$title','$sub_title')";
            $insert_result = mysqli_query($db_connection,$insert);
            $last_id = mysqli_insert_id($db_connection);
            $file_name = $last_id.'.'.$extention;
            $new_location = '../uploads/testy/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'],$new_location);

            $update_testy = "UPDATE testy SET profile_photo='$file_name' WHERE id=$last_id";
            $update_testy_result =mysqli_query($db_connection,$update_testy);
            $_SESSION['success'] ='Add successfully';
             header('location:add_testy.php');
      }
      else{
          $_SESSION['size'] ='File size is to large';
          header('location:add_testy.php');
      }
}
else{
    $_SESSION['invalid'] ='Invalid Extention';
    header('location:add_testy.php');
}






?>