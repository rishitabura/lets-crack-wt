<!-- <?php

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
</html> -->

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming your input is in a POST variable named 'input_text'
    $inputText = $_POST['input_text'];

    // Convert the string to lowercase
    $lowercaseResult = strtolower($inputText);

    // Make the starting letters of all words uppercase
    $titleCaseResult = ucwords($lowercaseResult);

    // Output the results
    echo "Original String: $inputText <br>";
    echo "Lowercase Result: $lowercaseResult <br>";
    echo "Title Case Result: $titleCaseResult";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Converter</title>
</head>
<body>
    <h1>Case Converter</h1>
    <form action="" method="post">
        <label for="input_text">Enter Text:</label>
        <input type="text" id="input_text" name="input_text" required>
        <button type="submit">Convert</button>
    </form>
</body>
</html>

