<!DOCTYPE html>
<html>
<head>
    <title>Student Information Page</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php
    session_start(); // when log in

    // Check if the user is not logged in, redirect to login.php
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("Location: login.php");
        exit;
    }

    // Database connection code
    $host = 'localhost'; // Your MySQL server hostname
    $username = 'root'; // Your MySQL username
    $password = ''; // Your MySQL password
    $database = 'cse479_studentinfo'; // The name of the database i created

