<?php
require "../db.php";
$id = $_GET['id'];



$delete_counter = "DELETE FROM counter WHERE id=$id";
$delete_counter_result = mysqli_query($db_connection,$delete_counter);
header('location:view_counter.php');




?>