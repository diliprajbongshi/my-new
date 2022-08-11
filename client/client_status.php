<?php
session_start();
require "../db.php";
$id = $_GET['id'];

$select_client1 = "SELECT * FROM clients WHERE id=$id";
$select_client_result1 = mysqli_query($db_connection,$select_client1);
$after_assoc_client1 = mysqli_fetch_assoc($select_client_result1);


if($after_assoc_client1['status']==1){
    $select_client = "SELECT COUNT(*) as total FROM clients WHERE status=1";
    $select_client_result = mysqli_query($db_connection,$select_client);
    $after_assoc_client = mysqli_fetch_assoc($select_client_result);
    if($after_assoc_client['total']==1){
      $_SESSION['limit'] = 'Manimum  1 icon need to Show!';
        header('location:view_client.php');
    }
    else{
    $update_client_status = "UPDATE clients SET status=0 WHERE id=$id";
    $update_client_status_result = mysqli_query($db_connection,$update_client_status);
    header('location:view_client.php');
    }
}
else{
        $select_client = "SELECT COUNT(*) as total FROM clients WHERE status=1";
        $select_client_result = mysqli_query($db_connection,$select_client);
        $after_assoc_client = mysqli_fetch_assoc($select_client_result);

        if($after_assoc_client['total']==6){
            $_SESSION['limit'] = 'Maximum 4icon Show!';
            header('location:view_client.php');
        }
        else{
        $update_client_status = "UPDATE clients SET status=1 WHERE id=$id";
        $update_client_status_result = mysqli_query($db_connection,$update_client_status);
        header('location:view_client.php');
}
}





?>