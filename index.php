<!-- This will be the FRONTEND for the project. -->
<?php 
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>CS331 Database Project</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="author" content="Janish Suneja and Ewan Lee"/>
        <meta name="description" content="This is a web page that is a test for database connections through the server."/>
        <link rel="stylesheet" href="styles_index.css"/>
        <link rel="icon" href="favicon.ico" type="image/db_icon.png"/>
    </head>
    <body>
        <div id="login-form">
            <h1>Login</h1>
            
            <!-- A form that will redirect to another php file that will handle authentication. -->
            <form name="form" action="login.php" method="POST">
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" placeholder="Username" required>
                <br><br>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <br><br>
                <input type="submit" id="btn" value="Login" name="submit">
            </form>
        </div>
    </body>
</html>