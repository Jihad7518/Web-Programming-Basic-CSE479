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

$connection = new mysqli($host, $username, $password, $database);

    if ($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    }

    $sql = "SELECT * FROM student";
    $result = $connection->query($sql);

    ?>


    <div class="container">
        <h1>Student Information</h1>
        <a href="insert.php" class="page-link">Add New Student</a><br>
        <a href="delete.php" class="page-link">Delete Student</a><br>
        <a href="update.php" class="page-link">Update Student</a><br>
        <a href="search.php" class="page-link">Search Student</a><br>

