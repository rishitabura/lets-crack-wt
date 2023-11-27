<!-- Electricty bill using PHP -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>
</head>

<body>
    <form method="post" action="action.php">
        Account no : <input type="number" name="number">
        Name : <input type="text" name="name">
        Units : <input type="number" name="units">
        Enter due date : <input type="date" name="date" />
        <br><br>
        
        <input type="submit" name="submit">
        <input type="reset" value="Reset" />

    </form>

</body>

</html>