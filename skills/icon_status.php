<?php
session_start();
require "../db.php";
$id = $_GET['id'];

$select_icon1 = "SELECT * FROM social WHERE id=$id";
$select_icon_result1 = mysqli_query($db_connection,$select_icon1);
$after_assoc_icon1 = mysqli_fetch_assoc($select_icon_result1);


if($after_assoc_icon1['status']==1){
    $select_icon = "SELECT COUNT(*) as total FROM social WHERE status=1";
    $select_icon_result = mysqli_query($db_connection,$select_icon);
    $after_assoc_icon = mysqli_fetch_assoc($select_icon_result);
    if($after_assoc_icon['total']==1){
      $_SESSION['limit'] = 'Manimum  1 icon need to Show!';
        header('location:view_social_icon.php');
    }
    else{
    $update_icon_status = "UPDATE social SET status=0 WHERE id=$id";
    $update_icon_status_result = mysqli_query($db_connection,$update_icon_status);
    header('location:view_social_icon.php');
    }
}
else{
        $select_icon = "SELECT COUNT(*) as total FROM social WHERE status=1";
        $select_icon_result = mysqli_query($db_connection,$select_icon);
        $after_assoc_icon = mysqli_fetch_assoc($select_icon_result);

        if($after_assoc_icon['total']==4){
            $_SESSION['limit'] = 'Maximum 4icon Show!';
            header('location:view_social_icon.php');
        }
        else{
        $update_icon_status = "UPDATE social SET status=1 WHERE id=$id";
        $update_icon_status_result = mysqli_query($db_connection,$update_icon_status);
        header('location:view_social_icon.php');
}
}





?>