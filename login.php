<!-- BACKEND FILE -->
<?php
    include('connection.php');

    /* Let's extract the username and password. */
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        /* Login logic. Whatever username/password the user enters, we will check to see whether that is in. */
        $sql = "SELECT * FROM LOGIN WHERE username = :username AND password = :password";
        
        /* PDO sanitization. */
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':password', $password);
        $stmt->execute();

        $row_count = $stmt->rowCount();

        /* Check count. */
        if ($row_count == 1)
        {
            header("Location:homepage.php");
        }
        else
        {
            echo '<script>
                window.location.href = "index.php";
            </script>';
        }
    }
?>