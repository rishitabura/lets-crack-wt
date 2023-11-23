<?php

$db_hostname = "127.0.0.1:3307";
$db_username = "root";
$db_password = "";
$db_name = "bookstore";

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Connection failed : " . mysqli_connect_errno();
    exit();
}

$bookname = $_POST['bookname'];
$author = $_POST['author'];
$year = $_POST['year'];
$price = $_POST['price'];

$sql = "INSERT INTO catalog (bookname , author, year , price) VALUES ('$bookname', '$author', '$year' , '$price')";

$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error : " . mysqli_error($conn);
    exit;
}

echo "Book added successfull.<br>";




$sql1 = "SELECT * FROM catalog";

$result1 = mysqli_query($conn, $sql1);
if (!$result1) {
    echo "Error : " . mysqli_error($conn);
    exit;
}

$row = mysqli_fetch_assoc($result1);
if ($row) {
?>
    <style>
        body {
            /* background: #76b852;
            background: rgb(141, 194, 111);
            background: linear-gradient(90deg, rgba(141, 194, 111, 1) 0%, rgba(118, 184, 82, 1) 50%); */
            background: #7CB9E8;
            font-family: "Roboto", sans-serif;

        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #002244;
            color: white;
        }

        button {
            font-family: "Roboto", sans-serif;
            align-items: center;
            text-align: center;
            background-color: #002244;
            color: white;
            border: 50%;
            margin: 15px 0 15px;
            padding: 15px;
            /* box-sizing: border-box; */
        }
    </style>
    </head>

    <body>

        <h1>A Fancy Table</h1>

        <table id="customers">
            <tr>
                <th>Book name</th>
                <th>Author</th>
                <th>Publish year</th>
                <th>Price</th>
            </tr>
            <tr>
                <td><?php
                    echo $bookname
                    ?></td>
                <td><?php
                    echo $author
                    ?></td>
                <td><?php
                    echo $year
                    ?></td>
                <td><?php
                    echo $price
                    ?></td>
            </tr>
        </table>


        <a href="catalog.php" style="text-decoration:none; color:white">
            <button>
                Add more books
            </button>
        </a>



    </body>

    </html>


<?php
    // echo "Book name :  " . $bookname . "<br>";
    // echo "Author name :  " . $author . "<br>";
    // echo "Published year :  " . $year . "<br>";
    // echo "Price :  " . $price . "<br>";
}


mysqli_close($conn);

?>