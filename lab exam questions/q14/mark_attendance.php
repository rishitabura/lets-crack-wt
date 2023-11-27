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
        <h1>Mark attendance System</h1>

        <!-- Mark Attendance Form -->
        <form action="mark_attendance.php" method="POST">
            <label for="student_id">Student ID:</label>
            <input type="text" name="student_id" required>

            <label for="attendance_date">Attendance Date:</label>
            <input type="date" name="attendance_date" required>

            <label for="status">Status:</label>
            <select name="status" required>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>
            </select>

            <button type="submit">Mark Attendance</button>
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
    $studentId = $_POST['student_id'];
    $attendanceDate = $_POST['attendance_date'];
    $status = $_POST['status'];

    $sql = "INSERT INTO attendance (student_id, attendance_date, status) VALUES ($studentId, '$attendanceDate', '$status')";

    if (mysqli_query($conn, $sql)) {
        echo "Attendance marked successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


mysqli_close($conn);
