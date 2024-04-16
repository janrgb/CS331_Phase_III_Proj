<?php
    $servername = "localhost";
    $username = "JanTop";
    $password = "root";
    $db_name = "auth";
    $conn = new mysqli($servername, $username, $password, $db_name, 3306);

    if ($conn->connect_error)
    {
        die("connection failed.".$conn->connect_error);
    }
    echo "Connection successful!";
?>