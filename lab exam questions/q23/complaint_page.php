<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Page</title>
</head>

<body>
    <!-- <?php
            $sql = "SELECT * FROM complaints WHERE id = $id AND name =$name LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>

    <h1>Complaint Submission</h1>
    <form action="complaint_page.php" method="post">

    <input type="hidden" name="student_id" value="<?php echo $id; ?>">
        <input type="hidden" name="student_name" value="<?php echo $name; ?>">

        <label for="comp">What complain to you have?</label>
        <textarea name="comp"></textarea>
        <br><br>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date">


        <button type="submit">Submit Complaint</button>
    </form> -->

    <?php
    session_start();
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
    ?>
    echo "User ID: $user_id<br>";
    echo "User Name: $user_name<br>";

    <h1>Complaint Submission</h1>
    <form action="process_complaint.php" method="post">

        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">

        <label for="comp">What complaint do you have?</label>
        <textarea name="comp"></textarea>
        <br><br>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date">

        <button type="submit">Submit Complaint</button>
    </form>
</body>

</html>