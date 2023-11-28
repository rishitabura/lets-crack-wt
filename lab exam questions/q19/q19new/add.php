<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="add.php" method="post">
            <label for="id">ID</label>
            <input type="number" name="id">

            <label for="name">Name</label>
            <input type="text" name="name">

            <label for="position">Position</label>
            <input type="text" name="position">

            <button type="submit">Submit</button>
        </form>
    </div>

    <?php

    $servername = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $db = "employee_db1";

    $conn = mysqli_connect($servername, $username, $password, $db);

    if (!$conn) {
        die("Connection failed : " . mysqli_connect_error());
    }


    if ($_SERVER['REQUEST_METHOD'] ===  'POST') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $position = $_POST['position'];

        $sql = "INSERT INTO employee1 (id, name, position) VALUES ('$id', '$name', '$position')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Added succesfully";
            echo '<script>alert("Added successfully");</script>';
            header("Location: index.php"); // Redirect to index.php
            exit(); // Make sure to exit after the redirect to prevent further execution
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);


    ?>
</body>

</html>