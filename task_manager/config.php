<?php

$host="localhost";
$user="root";
$pass="";
$database="task_manager";

$config=mysqli_connect($host, $user, $pass);
if ($config) {
    $open=mysqli_select_db($config, $database);
    //echo "database success";
}


?>