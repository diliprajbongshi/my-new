<?php
require "../db.php";
$id = $_GET['id'];



$delete_service = "DELETE FROM services WHERE id=$id";
$delete_service_result = mysqli_query($db_connection,$delete_service);
header('location:view_service.php');




?>