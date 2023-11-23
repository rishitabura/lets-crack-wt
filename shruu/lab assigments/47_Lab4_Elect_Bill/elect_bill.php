<!DOCTYPE html>
<html lang="en">
<head>
	<title>Electricity Bill generator</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style>
		/* Style the container */
.container {
    text-align: center;
    margin-top: 50px;
    background-color: #f5f5f5;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

/* Style the form */
.form-group {
    margin-bottom: 15px;
}

/* Style the input field */
.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Style the submit button */
.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

/* Style the result display */
.result {
    margin-top: 20px;
    font-size: 18px;
    color: #333;
}

/* Style the page title */
h1 {
    font-size: 24px;
    color: #007bff;
}

/* Responsive styles for smaller screens */
@media (max-width: 768px) {
    .container {
        margin-top: 20px;
    }
    h1 {
        font-size: 20px;
    }
}

	</style>
</head>
<body>
<?php
	$amount = '';
	$kwh_usage = '';
	if (isset($_POST['submit'])) {
		$units = $_POST['kwh'];
		if (!empty($units)) {
			$kwh_usage = calculate_electricity_bill($units);
			$amount = '<strong>Total amount of ' . $units . ' units -</strong> ' . $kwh_usage;
		}
	}
	
	function calculate_electricity_bill($units) {
		$first_unit_cost = 3.50;
		$second_unit_cost = 4.00;
		$third_unit_cost = 5.20;
		$fourth_unit_cost = 6.50;

		if($units <= 50) {
			$bill = $units * $first_unit_cost;
		}
		else if($units > 50 && $units <= 150) {
			$temp = 100 * $first_unit_cost;
			$remaining_units = $units - 100;
			$bill = $temp + ($remaining_units * $second_unit_cost);
		}
		else if($units > 150 && $units <= 250) {
			$temp = (100 * $first_unit_cost) + (100 * $second_unit_cost);
			$remaining_units = $units - 200;
			$bill = $temp + ($remaining_units * $third_unit_cost);
		}
		else {
			$temp = (100 * $first_unit_cost) + (100 * $second_unit_cost) + (100 * $third_unit_cost);
			$remaining_units = $units - 300;
			$bill = $temp + ($remaining_units * $fourth_unit_cost);
		}
		return number_format((float)$bill, 2, '.', '');
	}
	?>
	<div class="container">
		<h1>Calculate electricity Bill</h1>
		<div class="form-group">
		<form action="" method="post">
		<div class="form-group">
			<input type="number" name="kwh" placeholder="Please enter no. of Units" class="form-control" />
		</div>
		<div class="form-group">
			<input type="submit" name="submit" class="btn btn-primary" value="Submit" />
		</div>
		</form>
		</div>
		<div>
		    <?php echo '<br />' . $amount; ?>
		</div>
	</div>
</body>
</html>
