<?php
require "../db.php";
$id = $_GET['id'];

$select_img = "SELECT * FROM banner_images WHERE id=$id";
$select_img_result=mysqli_query($db_connection,$select_img);
$after_assoc=mysqli_fetch_assoc($select_img_result);

$delete_from = '../uploads/banners'.$after_assoc['banner_image'];
unlink($delete_from);
$delete_banner_content = "DELETE FROM banner_images WHERE id=$id";
$delete_banner_content_result = mysqli_query($db_connection,$delete_banner_content);
header('location:view_banner_content.php');




?>