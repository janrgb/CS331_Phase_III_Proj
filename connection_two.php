<!-- BACKEND FILE -->
<?php
    /* Use PDO to connect to database. */
    $hostname = 'localhost';
    $username = 'root';
    $db_name = 'phase_iii';

    try
    {
        $dbh =  new PDO("mysql:host=$hostname;dbname=$db_name", $username);
    }
    catch (PDOException $e)
    {
        echo "Error connecting to database.";
    }
?>
