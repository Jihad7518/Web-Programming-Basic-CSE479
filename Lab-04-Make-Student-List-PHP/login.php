<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <div class="container">
        <h1>Login</h1>

        <?php
            session_start();

            // Define the valid username and password
            $valid_username = "admin";
            $valid_password = "admin123";

            // Check if the user is already logged in
            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                header("Location: index.php");
                exit;
            }
