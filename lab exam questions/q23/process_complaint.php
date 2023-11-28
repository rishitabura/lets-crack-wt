<!-- <?php

$db_hostname = "127.0.0.1:3307";
$db_username = "root";
$db_password = "";
$db_name = "complaints";

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if(!$conn)
{
    echo "Connection failed : ". mysqli_connect_errno();
    exit();

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $comp_name = $_POST['comp'];
    $date = $_POST['date'];

    $sql = "INSERT INTO complains (comp_name, date) VALUES ('$comp_name','$date')";

    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo "Error : " . mysqli_error($conn);
        exit;

    } 
    echo "Complaint registered successfull.";
    header('Location: complaint_page.php');
    exit();
    mysqli_close($conn);
}
?>
 -->


 <?php

$db_hostname = "127.0.0.1:3307";
$db_username = "root";
$db_password = "";
$db_name_complaints = "complaints";

$conn_complaints = mysqli_connect($db_hostname, $db_username, $db_password, $db_name_complaints);
if (!$conn_complaints) {
    echo "Connection failed: " . mysqli_connect_errno();
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $comp_name = $_POST['comp'];
    $date = $_POST['date'];

    $sql = "INSERT INTO complains (user_id, user_name, comp_name, date) VALUES ('$user_id', '$user_name', '$comp_name', '$date')";

    $result = mysqli_query($conn_complaints, $sql);

    if (!$result) {
        echo "Error: " . mysqli_error($conn_complaints);
        exit();
    }
    
    echo "Complaint registered successfully.";
    header('Location: complaint_page.php');
    exit();
}

mysqli_close($conn_complaints);
?>
