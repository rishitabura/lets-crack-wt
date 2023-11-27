<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form method="post" action="student.php">
            Enter prn : <input type="number" name="prn">
            <input type="submit" name="submit">
        </form>

        <p><a href="index.php">Return to home page</a></p>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $conn = mysqli_connect('127.0.0.1:3307', 'root', '', 'result');
            if (!$conn) {
                echo "Connection failed " . mysqli_connect_error();
                exit;
            }

            $prn = $_POST['prn'];

            $query = "SELECT subject, mse, ese FROM results WHERE prn = '$prn'";
            $result = mysqli_query($conn, $query);


            if (mysqli_num_rows($result) > 0) {
        ?>
                <table>
                    <thead>
                        <tr>
                            <th>Subject Name</th>
                            <th>Obtained Marks (MSE)</th>
                            <th>Obtained Marks (ESE)</th>
                            <th>Total Marks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total_mse = 0;
                        $total_ese = 0;
                        $ftotal = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $subject = $row['subject'];
                            $mse_marks = $row['mse'] * 0.3;
                            $ese_marks = $row['ese'] * 0.7;
                            $total_marks = $mse_marks + $ese_marks;
                            $ftotal += $total_marks;
                        ?>
                            <tr>
                                <td><?= $subject ?></td>
                                <td><?= $mse_marks ?></td>
                                <td><?= $ese_marks ?></td>
                                <td><?= $total_marks ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="total">
                    <p>Total Obtained Marks : <?= $ftotal ?></p>
                    <p>Combined Percentage: <?= ($ftotal / 400) * 100 ?>%</p>
                </div>
        <?php
            } else {
                echo '<div class="message error">No results found for the given PRN number.</div>';
            }
            // Close the database connection
            mysqli_close($conn);
        }
        ?>
    </div>

</body>

</html>