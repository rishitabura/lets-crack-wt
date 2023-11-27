<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Employee Records</h1>

        <!-- Add/Modify Employee Form -->
        <form id="employeeForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="position">Position:</label>
            <input type="text" id="position" name="position" required>

            <button type="button" onclick="addOrUpdateEmployee()">Add/Modify Employee</button>
        </form>

        <!-- Employee List -->
        <ul id="employeeList"></ul>
    </div>

    <script src="script.js"></script>
</body>
</html>
