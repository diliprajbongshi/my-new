<?php
require "../db.php";

$sub_title = $_POST['sub_title'];
$title = $_POST['title'];
$desp = $_POST['desp'];


$uploaded_file = $_FILES['image'];
$uploaded_file_name = $uploaded_file['name'];
$after_explode = explode('.',$uploaded_file_name);
$extention = end($after_explode);
$alloewd_extention = array('jpg','png','jpeg');
if(in_array($extention,$alloewd_extention)){
  if($uploaded_file['size'] <=100000000){
        $insert = "INSERT INTO about_contents(sub_title,title,desp)VALUES('$sub_title','$title','$desp')";
        $insert_result = mysqli_query($db_connection,$insert);
        $last_id = mysqli_insert_id($db_connection);
        $file_name = $last_id.'.'.$extention;
        $new_location = '../uploads/about/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'],$new_location);
        $update_image = "UPDATE about_contents SET image='$file_name' WHERE id=$last_id";
        $update_image_result = mysqli_query($db_connection,$update_image);                        




        header('location:add_about_content.php');
  }
  else{
    $_SESSION['size'] = 'Max size 1 mb';
    header('location:add_about_content.php');
  }
}
else{
$_SESSION['extention'] = 'Invalid Extention';
header('location:add_about_content.php');
}




?>
