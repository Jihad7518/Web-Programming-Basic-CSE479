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

        <!-- Display student information from the database here -->
        <?php
            if ($result->num_rows > 0) {
                echo "<h2 class='student-list'>Student List</h2>";
                echo "<table border='1' class='student-list-table'>";
                echo "<tr><th class='student-list-table-th'>Student ID</th><th class='student-list-table-th'>Name</th><th class='student-list-table-th'>Phone Number</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td class='student-list-table-td'>".$row['student_id']."</td>";
                    echo "<td class='student-list-table-td'>".$row['student_name']."</td>";
                    echo "<td class='student-list-table-td'>".$row['phone_number']."</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p class='no-student'>No students found.</p>";
            }

            $connection->close();
        ?>

