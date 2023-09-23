<?php
include "config.php";

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$status = $_POST['status'];

$update = mysqli_query($config, "Update tasks Set title='$title', description='$description', status='$status' where ID = '$id'");

if ($update) {
    echo "<script> alert ('Success')</script>";
    header ("refresh:0;index.php");
} else {
    echo "<script> alert ('Error')</script>";
    header ("refresh:0;index.php");
}

?>