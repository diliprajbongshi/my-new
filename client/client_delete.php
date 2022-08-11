<?php
require "../db.php";
$id = $_GET['id'];

$select_client = "SELECT * FROM clients WHERE id=$id";
$select_client_result=mysqli_query($db_connection,$select_client);
$after_assoc=mysqli_fetch_assoc($select_client_result);

$delete_from = '../uploads/client'.$after_assoc['logo'];
unlink($delete_from);
$delete_client = "DELETE FROM clients WHERE id=$id";
$delete_client_result = mysqli_query($db_connection,$delete_client);
header('location:view_client.php');




?>