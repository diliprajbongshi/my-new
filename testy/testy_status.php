<?php
require "../db.php";
$id =$_GET['id'];

$update_testy = "UPDATE testy SET status=0";
$update_testy_result = mysqli_query($db_connection,$update_testy);



$update_testy_status2 = "UPDATE testy SET status=1 WHERE id=$id";
$update_testy_status_result2 = mysqli_query($db_connection,$update_testy_status2);
header('location:view_testy.php');

?>