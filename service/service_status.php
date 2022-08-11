<?php
session_start();
require "../db.php";
$id = $_GET['id'];

$select_service1 = "SELECT * FROM services WHERE id=$id";
$select_service_result1 = mysqli_query($db_connection,$select_service1);
$after_assoc_service1 = mysqli_fetch_assoc($select_service_result1);


if($after_assoc_service1['status']==1){
    $select_service = "SELECT COUNT(*) as total FROM services WHERE status=1";
    $select_service_result = mysqli_query($db_connection,$select_service);
    $after_assoc_service = mysqli_fetch_assoc($select_service_result);
    if($after_assoc_service['total']==1){
      $_SESSION['limit'] = 'Manimum  1 icon need to Show!';
        header('location:view_service.php');
    }
    else{
    $update_service_status = "UPDATE services SET status=0 WHERE id=$id";
    $update_service_status_result = mysqli_query($db_connection,$update_service_status);
    header('location:view_service.php');
    }
}
else{
        $select_service = "SELECT COUNT(*) as total FROM services WHERE status=1";
        $select_service_result = mysqli_query($db_connection,$select_service);
        $after_assoc_service = mysqli_fetch_assoc($select_service_result);

        if($after_assoc_service['total']==6){
            $_SESSION['limit'] = 'Maximum 4icon Show!';
            header('location:view_service.php');
        }
        else{
        $update_service_status = "UPDATE services SET status=1 WHERE id=$id";
        $update_service_status_result = mysqli_query($db_connection,$update_service_status);
        header('location:view_service.php');
}
}





?>