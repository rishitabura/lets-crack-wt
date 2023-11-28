<?php

$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$db = "employee_db1";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}

?>