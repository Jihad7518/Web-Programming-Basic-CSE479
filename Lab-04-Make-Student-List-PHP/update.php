

<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
    <link rel="stylesheet" href="css/update.css">
</head>
<body>
    <h1>Update Student</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'cse479_studentinfo';

        $connection = new mysqli($host, $username, $password, $database);

        if ($connection->connect_error) {
            die('Connection failed: ' . $connection->connect_error);
        }
