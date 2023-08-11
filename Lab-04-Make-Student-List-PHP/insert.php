

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

    // Retrieve data from the form
    $student_name = $_POST['student_name'];
    $student_id = $_POST['student_id'];
    $phone_number = $_POST['phone_number'];

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO student (student_name, student_id, phone_number) VALUES ('$student_name', '$student_id', '$phone_number')";

    if ($connection->query($sql) === TRUE) {
        echo "<div class='toast show-toast'>New student added successfully.</div>";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Student</title>
    <link rel="stylesheet" href="css/insert.css">
</head>
<body>

    <div class="container">
        <h1>Add New Student</h1>


        <form method="post" action="insert.php" class="add-student-form">
            <div class="form-group">
                <label for="student_name">Student Name:</label>
                <input type="text" name="student_name" required>
            </div>

            <div class="form-group">
                <label for="student_id">Student ID:</label>
                <input type="text" name="student_id" required>
            </div>
            
            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="text" name="phone_number" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>

        <a href="index.php" class="back-link">Back to Student List</a>
    </div>

    <!-- JavaScript for the toast notification -->
    <script>
        // Close the toast notification after 3 seconds (3000 milliseconds)
        setTimeout(function () {
            var toast = document.querySelector('.toast');
            toast.classList.remove('show-toast');
        }, 3000);
    </script>

