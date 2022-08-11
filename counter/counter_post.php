<?php
require "../db.php";

$icon_class = $_POST['icon_class'];
$title = $_POST['title'];
$number = $_POST['number'];



$insert = "INSERT INTO counter(icon_class,title,number)VALUES('$icon_class','$title','$number')";
$insert_result = mysqli_query($db_connection,$insert);
header('location:add_counter.php');

?>
