<!DOCTYPE html>
<html>
<head>
    <title>Search Student</title>
    <link rel="stylesheet" href="css/search.css">
</head>
<body>
<!-- Rest of the search.php code here -->
<h1>Search Student</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Database connection and search code here
    $host = 'localhost'; // Your MySQL server hostname
    $username = 'root'; // Your MySQL username
    $password = ''; // Your MySQL password
    $database = 'cse479_studentinfo'; // The name of the database you created

    $connection = new mysqli($host, $username, $password, $database);

    if ($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    }
