<?php
session_start();
require "../db.php";
$id = $_GET['id'];

$select_skill1 = "SELECT * FROM skill WHERE id=$id";
$select_skill1_result = mysqli_query($db_connection,$select_skill1);
$after_assoc_skill1 = mysqli_fetch_assoc($select_skill1_result);


if($after_assoc_skill1['status']==1){
    $select_skill = "SELECT COUNT(*) as total FROM skill WHERE status=1";
    $select_skill_result = mysqli_query($db_connection,$select_skill);
    $after_assoc_skill = mysqli_fetch_assoc($select_icon_result);
    if($after_assoc_skill['total']==1){
      $_SESSION['limit'] = 'Manimum  1 icon need to Show!';
        header('location:view_skill.php');
    }
    else{
    $update_skill_status = "UPDATE skill SET status=0 WHERE id=$id";
    $update_skill_status_result = mysqli_query($db_connection,$update_skill_status);
    header('location:view_skill.php');
    }
}
else{
        $select_skill = "SELECT COUNT(*) as total FROM skill WHERE status=1";
        $select_skill_result = mysqli_query($db_connection,$select_skill);
        $after_assoc_skill = mysqli_fetch_assoc($select_skill_result);

        if($after_assoc_skill['total']==4){
            $_SESSION['limit'] = 'Maximum 4icon Show!';
            header('location:view_skill.php');
        }
        else{
        $update_skill_status = "UPDATE skill SET status=1 WHERE id=$id";
        $update_skill_status_result = mysqli_query($db_connection,$update_skill_status);
        header('location:view_skill.php');
}
}





?>