<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher-Enter Marks</title>
</head>
<body>
    <div class="container">
        <h1>Enter Marks</h1>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" id="prn" name="prn" required placeholder="Enter PRN No">
            </div>

            <div class="subject">
                <input type="text" id="sub1" name="sub1" required placeholder="Enter Sub1">
                <input type="number" id="mse1" name="mse1" required placeholder="MSE Marks(30%)">
                <input type="number" id="ese1" name="ese1" required placeholder="ESE Marks(70%)">
                <input type="number" id="max_mse1" name="max_mse1" required placeholder="Max MSE Marks(30%)">
                <input type="number" id=",max_ese1" name="max_ese1" required placeholder="ESE Marks(70%)">
            </div>

            <div class="subject">
                <input type="text" id="sub2" name="sub2" required placeholder="Enter Sub2">
                <input type="number" id="mse2" name="mse2" required placeholder="MSE Marks(30%)">
                <input type="number" id="ese2" name="ese2" required placeholder="ESE Marks(70%)">
                <input type="number" id="max_mse2" name="max_mse2" required placeholder="Max MSE Marks(30%)">
                <input type="number" id=",max_ese2" name="max_ese2" required placeholder="ESE Marks(70%)">
            </div>
            <div class="subject">
                <input type="text" id="sub3" name="sub3" required placeholder="Enter Sub3">
                <input type="number" id="mse3" name="mse3" required placeholder="MSE Marks(30%)">
                <input type="number" id="ese3" name="ese3" required placeholder="ESE Marks(70%)">
                <input type="number" id="max_mse3" name="max_mse3" required placeholder="Max MSE Marks(30%)">
                <input type="number" id=",max_ese3" name="max_ese3" required placeholder="ESE Marks(70%)">
            </div>
            <div class="subject">
                <input type="text" id="sub4" name="sub4" required placeholder="Enter Sub4">
                <input type="number" id="mse4" name="mse4" required placeholder="MSE Marks(30%)">
                <input type="number" id="ese4" name="ese4" required placeholder="ESE Marks(70%)">
                <input type="number" id="max_mse4" name="max_mse4" required placeholder="Max MSE Marks(30%)">
                <input type="number" id=",max_ese4" name="max_ese4" required placeholder="ESE Marks(70%)">
            </div>
            
            <input type="submit" id="submit" name="submit" placeholder="Submit">
        </form>
    </div>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $con = mysqli_connect('localhost','root','','result');
    $flag = 0;

    for($i=1; $i<=4; $i++){
        $prn = $_POST['prn'];
        $sub = $_POST["sub$i"];
        $mse = $_POST["mse$i"];
        $ese = $_POST["ese$i"];
        $max_mse = $_POST["max_mse$i"];
        $max_ese = $_POST["max_ese$i"];

        $sql = "INSERT INTO result (prn_no, subject, mse, ese, max_mse, max_ese) VALUES ('$prn', '$sub', '$mse', '$ese', '$max_mse', '$max_ese')";

        if(mysqli_query($con, $sql)){
            $flag = $flag + 1;
        }
        else{
            echo 'Error: ' . mysqli_error($con);
        }
    }

    
if($flag == 4)
{
    echo "Marks saved ";
}

mysqli_close($con);
   

}

?>