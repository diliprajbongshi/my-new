<?php
require "../db.php";
$id = $_GET['id'];



$delete_banner_content = "DELETE FROM banner_contents WHERE id=$id";
$delete_banner_content_result = mysqli_query($db_connection,$delete_banner_content);
header('location:view_banner_content.php');




?>