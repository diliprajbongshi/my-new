<?php
require "../db.php";


 //Image Upload
    $uploaded_file = $_FILES['logo'];
    $uploaded_file_name = $uploaded_file['name'];
    $after_expolde = explode('.', $uploaded_file_name);
    $extension = end($after_expolde);
    $allowed_extension = array('jpg', 'png', 'jpeg', 'gif');
    if(in_array($extension, $allowed_extension)){
       if($uploaded_file['size'] <= 1000000){
            $insert = "INSERT INTO logos(logo)VALUES('$uploaded_file_name')";
            $insert_result = mysqli_query($db_connection, $insert);
            $last_id = mysqli_insert_id($db_connection);
            $file_name = $last_id.'.'.$extension;
            $new_location = '../uploads/logos/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);

            $update_logo = "UPDATE logos SET logo='$file_name' WHERE id=$last_id";
            $update_users_result = mysqli_query($db_connection, $update_logo);
            $_SESSION['success'] = 'Logos Added SuccessfullY';
            header('location:add_logo.php');

       }
       else{
            $_SESSION['size'] = 'File Size Too Large, Max 1 MB';
            header('location:add_logo.php');
       }
    }
    else{
        $_SESSION['extension'] = 'Invalid Extesnion';
        header('location:add_logo.php');
    }


?>
