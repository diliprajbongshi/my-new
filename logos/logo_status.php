<?php
require "../db.php";
$id = $_GET['id'];

$update_logo_status = "UPDATE logos SET status=0";
$update_banner_content_status_result = mysqli_query($db_connection,$update_logo_status);

$update_logo_status2 = "UPDATE logos SET status=1 WHERE id=$id";
$update_logo_result2 = mysqli_query($db_connection,$update_logo_status2);
header('location:view_logo.php');


?>