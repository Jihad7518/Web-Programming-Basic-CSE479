

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

