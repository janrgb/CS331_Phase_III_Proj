<?php
session_start();

/* Database connection: replace w/ actual credentials. */
$db = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'username', 'password');

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $username = $_POST['username'];
    $passwod = $_POST['password'];

    /* Validate input. */

    /* Check credentials against DB. */
    $query = $db->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
    $query->execute([$username, $password]);
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user)
    {
        $_SESSION['user_id'] = $user['id'];
        header('Location: dashboard.php');
        exit;
    }
    else
    {
        $error = 'Invalid credentials.'
    }

}