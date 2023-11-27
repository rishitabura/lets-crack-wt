<?php
function convertCurrency($amount, $fromCurrency, $toCurrency) {
    // You can use a currency exchange API for accurate rates
    // For simplicity, we'll use fixed conversion rates here
    $usdToInrRate = 75.0;
    
    if ($fromCurrency == 'USD' && $toCurrency == 'INR') {
        $convertedAmount = $amount * $usdToInrRate;
    } elseif ($fromCurrency == 'INR' && $toCurrency == 'USD') {
        $convertedAmount = $amount / $usdToInrRate;
    } else {
        // Invalid conversion
        return false;
    }
    
    return $convertedAmount;
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $amount = $_POST['amount'];
    $fromCurrency = $_POST['fromCurrency'];
    $toCurrency = $_POST['toCurrency'];

    // Validate input
    if (!is_numeric($amount)) {
        echo "Please enter a valid numeric amount.";
    } else {
        $convertedAmount = convertCurrency($amount, $fromCurrency, $toCurrency);
        
        if ($convertedAmount === false) {
            echo "Invalid conversion. Please select different currencies.";
        } else {
            echo "{$amount} {$fromCurrency} is equal to {$convertedAmount} {$toCurrency}";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
</head>
<body>
    <h2>Currency Converter</h2>
    <form method="post" action="">
        <label for="amount">Amount:</label>
        <input type="text" name="amount" required>
        
        <label for="fromCurrency">From Currency:</label>
        <select name="fromCurrency" required>
            <option value="USD">USD</option>
            <option value="INR">INR</option>
        </select>
        
        <label for="toCurrency">To Currency:</label>
        <select name="toCurrency" required>
            <option value="USD">USD</option>
            <option value="INR">INR</option>
        </select>
        
        <button type="submit">Convert</button>
    </form>
</body>
</html>
