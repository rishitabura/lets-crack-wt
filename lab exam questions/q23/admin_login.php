<!-- admin_login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <h1>Admin Login</h1>
    <form action="process_admin_login.php" method="post">
        <label for="admin_username">Admin Username:</label>
        <input type="text" id="admin_username" name="admin_username" required><br>

        <label for="admin_password">Admin Password:</label>
        <input type="password" id="admin_password" name="admin_password" required><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
