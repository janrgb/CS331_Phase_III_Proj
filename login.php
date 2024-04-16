<?php
    /* Use PDO to connect to database. */
    $hostname = 'localhost';
    $username = 'root';
    $db_name = 'auth';

    try
    {
        $dbh =  new PDO("mysql:host=$hostname;dbname=$db_name", $username);
        echo "Connected to the database.";
    }
    catch (PDOException $e)
    {
        echo "Error connecting to database.";
    }
?>
