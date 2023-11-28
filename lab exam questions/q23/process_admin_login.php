<?php
$db_hostname = "127.0.0.1:3307";
$db_username = "root";
$db_password = "";
$db_name = "complaints";

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Connection failed " . mysqli_connect_error();
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $adminUsername = $_POST['admin_username'];
    $adminPassword = $_POST['admin_password'];

    $sql = "SELECT * FROM admin WHERE admin_username = '$adminUsername' AND admin_password = '$adminPassword'";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error : " . mysqli_error($conn);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "Login Successfull";
    } else {
        echo "Login failed <br>";
    }


    header('Location: admin_page.php');
    exit();
    mysqli_close($conn);
}
