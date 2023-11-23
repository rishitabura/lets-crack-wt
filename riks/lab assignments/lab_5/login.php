<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        body {
            background: #76b852;
            /* background: rgb(141, 194, 111);
            background: linear-gradient(90deg, rgba(141, 194, 111, 1) 0%, rgba(118, 184, 82, 1) 50%); */
            background: #7CB9E8;
            font-family: "Roboto", sans-serif;

        }
        .register-page {
            width: 1000px;
            padding: 6% 0 0;
            margin: auto;
        }

        .form {
            position: relative;
            border-radius: 20px;
            z-index: 1;
            background: #FFFFFF;
            max-width: 500px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            font-size: 20px;
        }

        .form label{
            font-family: "Roboto", sans-serif;
            text-align: justify;
        }
        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 15;
        }
        
    </style>
</head>
<body>

    <!-- <form method="post" action="login_submit.php">
        Username : <input type="text" name="email"><br><br>
        Password : <input type="paasword" name="password"><br><br>
        <input type="submit" value="login">
    </form> -->

    <div class="register-page">
        <div class="form">
            <h2 style="font-size: 30px;">Login</h2>
            <form method="post" action="loginSubmit.php">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username" required><br>

                <label for="username">Password:</label><br>
                <input type="username" id="password" name="password" required><br>

                <input type="submit" style="background-color:#002244 ; color:white; font-size:large" value="Login">
            </form>
        </div>
    </div>
    
</body>
</html>