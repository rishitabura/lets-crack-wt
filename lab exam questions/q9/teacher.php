<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techer</title>
</head>

<body>
    <p><a href="index.php">Return to home page</a></p>

    <h1>Enter the marks : </h1>
    <br>
    <form method="post" action="teacher.php">
        Enter Prn = <input type="number" name="prn">
        <br>

        Subject 1 - <input type="text" name="sub1" required>
        MSE marks out of 100 = <input type="number" name="mse1" required>
        ESE marks out of 100 = <input type="number" name="ese1">
        <br>

        Subject 2 - <input type="text" name="sub2" required>
        MSE marks out of 100 = <input type="number" name="mse2" required>
        ESE marks out of 100 = <input type="number" name="ese2" required>
        <br>

        Subject 3 - <input type="text" name="sub3" required>
        MSE marks out of 100 = <input type="number" name="mse3" required>
        ESE marks out of 100 = <input type="number" name="ese3" required>
        <br>

        Subject 4 - <input type="text" name="sub4">
        MSE marks out of 100 = <input type="number" name="mse4" required>
        ESE marks out of 100 = <input type="number" name="ese4" required>
        <br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $conn = mysqli_connect('127.0.0.1:3307', 'root', '', 'result');
    $flag = 0;
    for ($i = 1; $i <= 4; $i++) {
        $prn = $_POST['prn'];
        $subject = $_POST["sub$i"];
        $mse = $_POST["mse$i"];
        $ese = $_POST["ese$i"];


        $insert_query = "INSERT INTO results (prn, subject, mse, ese) VALUES($prn, '$subject', $mse, $ese)";

        if (mysqli_query($conn, $insert_query)) {
            $flag = $flag + 1;
        } else {
            echo "Error : " . mysqli_error($conn);
            exit;
        }
    }

    if ($flag == 4) {
        echo "Marks saved successfully!";
    }

    // Close the database connection
    mysqli_close($conn);
}

?>