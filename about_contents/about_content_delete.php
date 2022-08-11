<?php
require "../db.php";
$id = $_GET['id'];



$delete_about_content = "DELETE FROM about_contents WHERE id=$id";
$delete_about_content_result = mysqli_query($db_connection,$delete_about_content);
header('location:view_about_content.php');




?>