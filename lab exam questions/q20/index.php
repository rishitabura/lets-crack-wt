<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Student Records</h1>

        <!-- Add Student Form -->
        <form id="addForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="rollNumber">Roll Number:</label>
            <input type="text" id="rollNumber" name="rollNumber" required>

            <button type="button" onclick="addStudent()">Add Student</button>
        </form>

        <!-- Student List -->
        <ul id="studentList"></ul>
    </div>

    <script src="script.js"></script>
</body>
</html>
