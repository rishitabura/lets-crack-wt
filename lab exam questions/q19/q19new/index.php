<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Records</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    if (isset($_GET["msg"])) {
        $msg = $_GET["msg"];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <div class="container">
        <a href="add.php">Add new</a>
    </div>


    <div>
        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Position</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $servername = "127.0.0.1:3307";
                $username = "root";
                $password = "";
                $db = "employee_db1";

                $conn = mysqli_connect($servername, $username, $password, $db);

                if (!$conn) {
                    die("Connection failed : " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM employee1";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["position"] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                            <a href="delete.php?id=<?php echo $row["id"] ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>