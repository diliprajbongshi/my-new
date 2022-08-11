<?php
require "../db.php";
$id = $_GET['id'];

$select_logo = "SELECT * FROM logos WHERE id=$id";
$select_logo_result=mysqli_query($db_connection,$select_logo);
$after_assoc=mysqli_fetch_assoc($select_logo_result);

$delete_from = '../uploads/logos'.$after_assoc['logo'];
unlink($delete_from);
$delete_logo = "DELETE FROM logos WHERE id=$id";
$delete_logo_result = mysqli_query($db_connection,$delete_logo);
header('location:view_logo.php');




?>