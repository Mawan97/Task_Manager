<?php
include "config.php";

$title = $_POST['title'];
$description = $_POST['description'];
$status = $_POST['status'];

$simpan = mysqli_query($config, "Insert Into tasks (`title`, `description`, `status`) Values ('$title', '$description', '$status')");

if ($simpan) {
    echo "<script> alert ('Success')</script>";
    header ("refresh:0;index.php");
} else {
    echo "<script> alert ('Error')</script>";
    header ("refresh:0;index.php");
}

?>