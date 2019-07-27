<?php
include "conn.php";
$id = $_GET['id'];
$sql = "delete from myguests where id = '$id'";

mysqli_query($conn,$sql);

header('location:display.php');
?>