<?php
require "../db.php";
$id = $_GET['id'];

$select_wowk = "SELECT * FROM works WHERE id=$id";
$select_wowk_result = mysqli_query($db_connection,$select_wowk);
$after_assoc = mysqli_fetch_assoc($select_wowk_result);

$delete_from = '../uploada/works/'.$after_assoc['image'];
unlink($delete_from);

$delete_work = "DELETE FROM works WHERE id=$id";
$delete_work_result = mysqli_query($db_connection,$delete_work);
header('location:view_work.php');




?>