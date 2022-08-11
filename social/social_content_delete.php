<?php
require "../db.php";
$id = $_GET['id'];



$delete_social_content = "DELETE FROM banner_contents WHERE id=$id";
$delete_social_content_result = mysqli_query($db_connection,$delete_social_content);
header('location:view_social_content.php');




?>