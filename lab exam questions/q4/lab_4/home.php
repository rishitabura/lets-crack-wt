<!-- Design and develop a responsive website to calculate Electricity bill using PHP. Condition for first 
50 units – Rs. 3.50/unit, for next 100 units – Rs. 4.00/unit, for next 100 units – Rs. 5.20/unit and for 
units above 250 – Rs. 6.50/unit. You can make the use of bootstrap as well as jQuery. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity </title>

    <style>
        .container {
            text-align: center;
            /* margin-top: 200px; */
            height: 500px;
            /* padding: 80px; */
            /* background-color:yellow; */
        }

        .container label {
            /* background-color: #3CBC8D; */
            /* color: white; */
            font-size: 25px;
        }
        .container input{
            font-size: 15px;
        }

        .container input[type=text] {
            border-radius: 20px;
            width: 500px;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: solid;
            background-color: #3CBC8D;
            color: black;
        }

        .container input[type=textarea] {
            border-radius: 20px;
            width: 500px;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: solid;
            background-color: #3CBC8D;
            color: black;
        }

        .container input[type=number] {
            border-radius: 20px;
            width: 500px;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: solid;
            background-color: #3CBC8D;
            color: black;
        }
        .container input[type=date] {
            border-radius: 20px;
            width: 500px;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: solid;
            background-color: #3CBC8D;
            color: black;
        }

        .container input[type=submit] {
            border-radius: 20px;
            /* width: 500px; */
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: solid;
            background-color:black;
            color: white;
        }
        .container input[type=reset] {
            border-radius: 20px;
            /* width: 500px; */
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: solid;
            background-color:black;
            color: white;
        }
    </style>

</head>

<body style=" background-color: #3CBC8D;">
    <div class="container">
        <h1 style="text-align: center;">Electricity Bill</h1>

        <form action="action.php" method="post" id="quiz-form">
            <label>Account No : </label><br>
            <input name="cons_no" type="number"><br><br>

            <label>Account Name : </label><br>
            <input name="cons_name" type="text"><br><br>

            <label>Address : </label><br>
            <input name="address" type="textarea"><br><br>

            <label>Enter number of units : </label><br>
            <input type="number" name="units" id="units" /><br><br>

            <label>Enter due date : </label><br>
            <input type="date" name="date" /><br><br>

            <input type="submit" name="unit-submit" id="unit-submit" value="Submit" />

            <input type="reset" value="Reset" />
        </form>
    </div>
</body>