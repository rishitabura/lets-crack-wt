<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="student.css">
</head>
<body>
    <div class="container">
        <h1>Student - Fetch Result</h1>
        <form method="post" action="student.php">
            <div class="form-group">
                <label for="prn">PRN Number:</label>
                <input type="text" id="prn" name="prn" required>
                <button type="submit" class="btn fetch-btn">Fetch Result</button>
            </div>
        </form> 

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Connect to the database
            $conn = mysqli_connect('localhost', 'root', '', 'result');

            $prn = $_POST['prn'];

            // Query to fetch results for the given PRN number
            $query = "SELECT subject, mse_marks, ese_marks FROM result WHERE prn_no = '$prn'";
            $result = mysqli_query($con, $query);

            if (mysqli_num_rows($result) > 0) {
        ?>
                <table class="result-table">
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
                            $sub = $row['sub'];
                            $mse_marks = $row['mse'];
                            $ese_marks = $row['ese'];
                            $total_marks = $mse + $ese;
                            $total_mse += $mse;
                            $total_ese += $ese;
                            $ftotal += $total_marks;
                        ?>
                            <tr>
                                <td><?= $sub ?></td>
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
                    <!-- <p>Total Obtained Marks (MSE): <?= $total_mse ?></p>
                    <p>Total Obtained Marks (ESE): <?= $total_ese ?></p> -->
                    <p>Total Obtained Marks : <?= $ftotal?></p>
                    <p>Combined Percentage: <?= ($ftotal / 400) * 100 ?>%</p>
                </div>
            <?php
            } else {
                echo '<div class="message error">No results found for the given PRN number.</div>';
            }
            // Close the database connection
            mysqli_close($con);
        }
        ?>
    </div>
</body>
</html>
