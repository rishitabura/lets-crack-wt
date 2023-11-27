 <?php

function calculate($units)
{
    $first = 3.50;
    $second = 4.00;
    $third = 5.20;
    $fourth = 6.50;


    if ($units <= 50) {
        $bill = $units * $first;
    } elseif ($units > 50 && $units <= 100) {
        $temp = 50 * $first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $second);
    } else if ($units > 100 && $units <= 200) {
        $temp = (50 * $first) + (100 * $second);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $third);
    } else {
        $temp = (50 * $first) + (100 * $second) + (100 * $third);
        $remaining_units = $units - 250;
        $bill =  $temp + ($remaining_units * $fourth);
    }

    return $bill;
}

if (isset($_POST['submit'])) {
    $con_num = $_POST['number'];
    $name = $_POST['name'];
    $units = $_POST['units'];

    if (!empty($units)) {
        $result = calculate($units);
    }
}

?>

<!DOCTYPE html>
<html>

<body>

    <div>

        <p>Number = <?php echo $con_num ?> </p>
        <p>Name = <?php echo $name ?> </p>
        <p>Units = <?php echo $units ?> </p>
        <p>Bill = <?php echo $result ?> </p>

    </div>


</body>

</html>