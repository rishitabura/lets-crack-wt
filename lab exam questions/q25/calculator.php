<!-- <?php
    $cookie_name1="num";
    $cookie_value1="";
    $cookie_name2="op";
    $cookie_value2="";

    if(isset($_POST['num']))
    {
     $num=$_POST['input'].$_POST['num'] ;
    }
    else{
        $num="";
    }
    if(isset($_POST['op']))
    {
        $cookie_value1=$_POST['input'];
        setcookie($cookie_name1, $cookie_value1, time()+(86400*30), "/");

        $cookie_value2=$_POST['op'];
        setcookie($cookie_name2, $cookie_value2, time()+(86400*30), "/");
        $num="";
    }
    if(isset($_POST['equal']))
    {
        $num=$_POST['input'];
        switch($_COOKIE['op'])
        {
            case "+":
                $result=$_COOKIE['num']+$num;
                break;
                case "-":
                    $result=$_COOKIE['num']-$num;
                    break;
                    case "*":
                        $result=$_COOKIE['num']*$num;
                        break;
                        case "/":
                            $result=$_COOKIE['num']/$num;
                            break;
        }
        $num=$result;
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body{
            background-color: rgb(163, 159, 159);
        }
       
        .calc{
            
            margin: auto;
            background-color: black;
            border: 2px solid whitesmoke;
            width: 24%;
            height: 630px;
            border-radius: 20px;
            box-shadow: 10px 10px 40px;
        }
        .maininput{
            background-color: black;
            border: 1px solid grey;
            height: 125px;
            width: 98.2%;
            font-size: 80px;
            color: whitesmoke;
            font-weight: 00;
        }
        .numbtn{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 500;
            font-size: large;
            background-color: rgb(155, 154, 154);
        }
        .numbtn:hover{
            background-color: rgb(136, 133, 133);
            color: whitesmoke;
        }
        .calbtn{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 500;
            font-size: 30px;
            background-color: orange;
        }
        .calbtn:hover{
            background-color: rgb(211, 140, 7);
            color: whitesmoke;
        }
        .c{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 500;
            font-size: large;
            background-color: red;
        }
        .c:hover{
            background-color: rgb(188, 16, 16);
            color: whitesmoke;
        }
        .equal{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 500;
            font-size: large;
            background-color: rgb(8, 181, 8);
        }
        .equal:hover{
            background-color: green;
            color: whitesmoke;
        }

    </style>
</head>
<body>
        <div class="calc">
            <form action="" method="post">
                <br>
                <input type="text" class="maininput" name="input" value="<?php echo @$num ?>"> <br> <br>
                <input type="submit" class="numbtn" name="num"value="7">
                <input type="submit" class="numbtn" name="num"value="8">
                <input type="submit" class="numbtn" name="num"value="9">
                <input type="submit" class="calbtn" name="op"value="+"> <br><br>
                <input type="submit" class="numbtn" name="num"value="4">
                <input type="submit" class="numbtn" name="num"value="5">
                <input type="submit" class="numbtn" name="num"value="6">
                <input type="submit" class="calbtn" name="op"value="-"><br><br>
                <input type="submit" class="numbtn" name="num"value="1">
                <input type="submit" class="numbtn" name="num"value="2">
                <input type="submit" class="numbtn" name="num"value="3">
                <input type="submit" class="calbtn" name="op"value="*"><br><br>
                <input type="submit" class="c" name="num"value="c">
                <input type="submit" class="numbtn" name="num"value="0">
                <input type="submit" class="equal" name="equal"value="=">
                <input type="submit" class="calbtn" name="op"value="/">


            </form>
        </div>



</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .calculator {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        input {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            width: 48px;
            height: 48px;
            font-size: 18px;
            margin: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h2>Simple PHP Calculator</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <input type="text" name="expression" id="expression" value="<?php echo isset($_POST['expression']) ? htmlspecialchars($_POST['expression']) : ''; ?>" readonly>
        <br>
        <input type="text" name="result" id="result" value="<?php echo isset($_POST['result']) ? htmlspecialchars($_POST['result']) : ''; ?>" readonly>
        <br>

        <button type="button" onclick="appendToExpression('7')">7</button>
        <button type="button" onclick="appendToExpression('8')">8</button>
        <button type="button" onclick="appendToExpression('9')">9</button>
        <button type="button" onclick="appendToExpression('/')">/</button>
        <br>

        <button type="button" onclick="appendToExpression('4')">4</button>
        <button type="button" onclick="appendToExpression('5')">5</button>
        <button type="button" onclick="appendToExpression('6')">6</button>
        <button type="button" onclick="appendToExpression('*')">*</button>
        <br>

        <button type="button" onclick="appendToExpression('1')">1</button>
        <button type="button" onclick="appendToExpression('2')">2</button>
        <button type="button" onclick="appendToExpression('3')">3</button>
        <button type="button" onclick="appendToExpression('-')">-</button>
        <br>

        <button type="button" onclick="appendToExpression('0')">0</button>
        <button type="button" onclick="appendToExpression('+')">+</button>
        <button type="button" onclick="clearExpression()">C</button>
        <button type="submit" name="calculate" value="=" onclick="calculateResult()">=</button>
    </form>

    <script>
        function appendToExpression(value) {
            document.getElementById('expression').value += value;
        }

        function clearExpression() {
            document.getElementById('expression').value = '';
            document.getElementById('result').value = '';
        }

        // function calculateResult() {
        //     try {
        //         var result = eval(document.getElementById('expression').value);
        //         document.getElementById('result').value = result;
        //     } catch (error) {
        //         document.getElementById('result').value = 'Error';
        //     }
        // }
        function calculateResult() {
        try {
            var expression = document.getElementById('expression').value;
            var result = evalExpression(expression);
            document.getElementById('result').value = result;
        } catch (error) {
            document.getElementById('result').value = 'Error';
        }
    }

    function evalExpression(expression) {
        // Split the expression into numbers and operators
        var tokens = expression.match(/[+\-*/]|\d+/g);

        // Perform the calculation using actual operators
        var result = parseFloat(tokens[0]);
        for (var i = 1; i < tokens.length; i += 2) {
            var operator = tokens[i];
            var operand = parseFloat(tokens[i + 1]);
            switch (operator) {
                case '+':
                    result += operand;
                    break;
                case '-':
                    result -= operand;
                    break;
                case '*':
                    result *= operand;
                    break;
                case '/':
                    if (operand !== 0) {
                        result /= operand;
                    } else {
                        throw new Error('Division by zero');
                    }
                    break;
                default:
                    throw new Error('Invalid operator');
            }
        }

        return result;
    }
    </script>
</div>

</body>
</html>
