<!-- Wrong -->

<?php
session_start();

// Database connection parameters
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "user_sessions_db";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate user ID (you might want to add more robust validation)
    $userId = isset($_POST["userId"]) ? intval($_POST["userId"]) : 0;

    if ($userId > 0) {
        loginUser($userId);
    } else {
        echo "Invalid user ID.";
    }
}

// Function to check and limit the number of concurrent sessions
function checkConcurrentSessions($userId, $maxSessions)
{
    $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Count the number of active sessions for the user
    $sql = "SELECT COUNT(*) AS session_count FROM user_sessions WHERE user_id = ? AND logout_time IS NULL";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $sessionCount = $row['session_count'];

    // Close the database connection
    $stmt->close();
    $conn->close();

    // Check if the user has reached the maximum number of sessions
    if ($sessionCount >= $maxSessions) {
        return false; // Max sessions reached
    }

    return true; // User can log in
}

// Function to log in a user and track the session
function loginUser($userId)
{
    // Check if the user can log in (within the session limit)
    if (!checkConcurrentSessions($userId, 3)) {
        echo "Max sessions reached. Cannot log in.";
        return;
    }

    // Log in the user
    $sessionId = session_id();
    $loginTime = date("Y-m-d H:i:s");

    $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert session information into the database
    $sql = "INSERT INTO user_sessions (user_id, session_id, login_time) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $userId, $sessionId, $loginTime);
    $stmt->execute();

    // Close the database connection
    $stmt->close();
    $conn->close();

    echo "User logged in successfully.";
}

// Example usage
$userId = 1; // Replace with the actual user ID
loginUser($userId);
?>

?>
