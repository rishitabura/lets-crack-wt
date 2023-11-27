<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance System</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="container">
        <h1>View attendance System</h1>

        <!-- View Attendance Form -->
        <form action="view_attendance.php" method="POST">
            <label for="id">Student ID:</label>
            <input type="text" name="id" required>
            <label for="attendance_date_view">View Attendance for Date:</label>
            <input type="date" name="attendance_date" required>
            <button type="submit">View Attendance</button>
        </form>
    </div>
</body>

</html>

<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$database = "attendance_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // print_r($_POST); 
    $id = $_POST['id'];
    $attendanceDate = $_POST['attendance_date'];

    // $sql = "SELECT student_id, status FROM attendance WHERE student_id = $id AND  attendance_date = $attendanceDate";

    $sql = "SELECT student_id, status FROM attendance WHERE student_id = ? AND attendance_date = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "is", $id, $attendanceDate);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<h2>Attendance for $attendanceDate</h2>";
        echo "<table><tr><th>Student ID</th><th>Status</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row['student_id'] . "</td><td>" . $row['status'] . "</td></tr>";
        }
    } else {
        echo "No attendance records found for $attendanceDate";
    }
}
mysqli_close($conn);
?>