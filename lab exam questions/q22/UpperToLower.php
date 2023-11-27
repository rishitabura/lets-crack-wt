<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming your input is in a POST variable named 'input_case'
    $inputCase = $_POST['input_case'];

    // Convert the string to lowercase
    $lowercaseResult = strtolower($inputCase);

    // Output the result
    echo "Original String: $inputCase <br>";
    echo "Lowercase Result: $lowercaseResult";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uppercase to Lowercase Converter</title>
</head>
<body>
    <h1>Uppercase to Lowercase Converter</h1>
    <form action="" method="post">
        <label for="input_case">Enter Uppercase Text:</label>
        <input type="text" id="input_case" name="input_case" required>
        <button type="submit">Convert</button>
    </form>
</body>
</html>