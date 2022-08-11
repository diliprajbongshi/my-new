<?php
session_start();
require "../db.php";
$id = $_GET['id'];

$select_counter1 = "SELECT * FROM counter WHERE id=$id";
$select_counter1_result = mysqli_query($db_connection,$select_counter1);
$after_assoc_counter1 = mysqli_fetch_assoc($select_counter1_result);


if($after_assoc_counter1['status']==1){
    $select_counter = "SELECT COUNT(*) as total FROM counter WHERE status=1";
    $select_counter_result = mysqli_query($db_connection,$select_counter);
    $after_assoc_counter = mysqli_fetch_assoc($selectcounter_result);
    if($after_assoc_counter['total']==1){
      $_SESSION['limit'] = 'Manimum  1 icon need to Show!';
        header('location:view_counter.php');
    }
    else{
    $update_counter_status = "UPDATE counter SET status=0 WHERE id=$id";
    $update_counter_status_result = mysqli_query($db_connection,$update_counter_status);
    header('location:view_counter.php');
    }
}
else{
        $select_counter = "SELECT COUNT(*) as total FROM counter WHERE status=1";
        $select_counter_result = mysqli_query($db_connection,$select_counter);
        $after_assoc_counter = mysqli_fetch_assoc($select_counter_result);

        if($after_assoc_counter['total']==4){
            $_SESSION['limit'] = 'Maximum 4icon Show!';
            header('location:view_counter.php');
        } 
        else{
        $update_counter_status = "UPDATE counter SET status=1 WHERE id=$id";
        $update_counter_status_result = mysqli_query($db_connection,$update_counter_status);
        header('location:view_counter.php');
}
}





?>