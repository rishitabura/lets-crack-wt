<!DOCTYPE html>
<html lang="en">
<head>
    <title>Catalog</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        body {
            background: #76b852;
            background: rgb(141, 194, 111);
            background: linear-gradient(90deg, rgba(141, 194, 111, 1) 0%, rgba(118, 184, 82, 1) 50%);
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
            text-align: center;
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

    <!-- <form method="post" action="registerSubmit.php">
        Name : <input type="text" name="name"><br><br>
        Username : <input type="text" name="username"><br><br>
        Phoen : <input type="text" name="phone"><br><br>
        Password : <input type="paasword" name="password"><br><br>
        <input type="submit">
    </form> -->
    <div class="register-page">
        <div class="form">
            <h2 style="font-size: 30px;">Add Book Details</h2>
            <form method="post" action="catalogSubmit.php">
                <label for="name">Book name:</label><br>
                <input type="text" id="username" name="bookname" required><br>

                <label for="author">Author:</label><br>
                <input type="username" id="password" name="author" required><br>

                <label for="year">Published year:</label><br>
                <input type="date" id="password" name="year" required><br>

                <label for="price">Price:</label><br>
                <input type="number" id="password" name="price" required><br>

                <input type="submit" style="background-color:#4CAF50">
            </form>
        </div>
    </div>
    
</body>
</html>