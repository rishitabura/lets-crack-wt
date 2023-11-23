<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Store</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      /* background: #76b852; */
      background: #7CB9E8;
      /* background: rgb(141, 194, 111);
      background: linear-gradient(90deg, rgba(141, 194, 111, 1) 0%, rgba(118, 184, 82, 1) 50%); */
    }

    .navbar {
      width: 100%;
      /* background-color: #1d787e; */
      background-color: #002244;
      opacity: 0.8;
      overflow: auto;
    }

    .navbar a {
      float: right;
      padding: 12px;
      color: white;
      text-decoration: none;
      font-size: 17px;
    }

    .navbar a:hover {
      background-color: #f9f1f1;
      color: black;
    }

    /* .active {
      background-color: rgb(215, 215, 66);
    } */

    /* @media screen and (max-width: 500px) {
      .navbar a {
        float: none;
        display: block;
      }
    } */
  </style>
</head>

<body>



  <div class="navbar">
    <!-- <a href="catalog.php"> Catalog</a> -->
    <a href="login.php">Login</a>
    <a href="registerForm.php"> Register</a>
    <a class="active" href="bookHome.php">Home</a>
  </div>
  <h1 style="text-align: center ; font-size: 40px;">Book Store</h1>
  <div>
    <div>
      <img src="img/bg1.jpg" style="float: right; height: 500px; width: auto;">
      <p style="padding-top: 200px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ; font-size: 30px;">
        “Every book in a bookstore is a fresh beginning. <br>Every book is the next iteration of a very old story. Every bookstore, therefore, is like a safe-deposit box for civilization.” <br>– <i>Liam Callanan</i>
      </p>
    </div>


  </div>

</body>

</html>