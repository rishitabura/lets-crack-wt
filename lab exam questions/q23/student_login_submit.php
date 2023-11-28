<!-- <?php

    $db_hostname = "127.0.0.1:3307";
    $db_username = "root";
    $db_password = "";
    $db_name = "complaints";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if(!$conn)
    {
        echo "Connection failed ". mysqli_connect_error();
        exit;
    }

    $id = $_POST['id'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM students WHERE id = '$id' AND password = '$password'";

    $result = mysqli_query($conn, $sql);
    if (!$result) 
    {
        echo "Error : ". mysqli_error($conn);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    if ($row) 
    {
        header("Location: complaint_page.php");
    }
    else
    {
        echo "Login failed <br>";
    }

    mysqli_close($conn);
?> -->
<?php

$db_hostname = "127.0.0.1:3307";
$db_username = "root";
$db_password = "";
$db_name_users = "users";

$conn_users = mysqli_connect($db_hostname, $db_username, $db_password, $db_name_users);
if (!$conn_users) {
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM students WHERE id = '$id' AND password = '$password'";

    $result = mysqli_query($conn_users, $sql);

    if (!$result) {
        echo "Error: " . mysqli_error($conn_users);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    if ($row) {
        session_start();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        header("Location: complaint_page.php");
        exit;
    } else {
        echo "Login failed <br>";
    }

    mysqli_close($conn_users);
}
?>
