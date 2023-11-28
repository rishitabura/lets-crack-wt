<?php

    $db_hostname = "127.0.0.1:3307";
    $db_username = "root";
    $db_password = "";
    $db_name = "complaints";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if(!$conn)
    {
        echo "Connection failed : ". mysqli_connect_errno();
        exit();

    }

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO students (id, name , email , password) VALUES ('$id','$name', '$email', '$password')";

    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo "Error : " . mysqli_error($conn);
        exit;

    } 

    echo "Registration successfull.";
    mysqli_close($conn);


?>