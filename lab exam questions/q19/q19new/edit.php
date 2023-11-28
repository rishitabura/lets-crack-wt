<?php

include "db.php";

if (!isset($_GET["id"]) || empty($_GET["id"])) {
    die("Invalid request. No ID specified.");
}

$id = $_GET["id"];

if (isset($_POST["update"])) {
    $name = $_POST['name'];
    $position = $_POST['position'];

    $sql = "UPDATE employee1 SET name='$name', position='$position' WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=Data updated successfully");
        exit();
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Change user info</h1>

        <?php
        $sql = "SELECT * FROM employee1 WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <form action="edit.php?id=<?php echo $id; ?>" method="post">
            <!-- Include hidden input for passing id -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label for="name">Name</label>
            <input type="text" name="name" value="<?php echo $row['name'] ?>">

            <label for="position">Position</label>
            <input type="text" name="position" value="<?php echo $row['position'] ?>">

            <button type="submit" name="update">Submit</button>
        </form>
    </div>

</body>

</html>
