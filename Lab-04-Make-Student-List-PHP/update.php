

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
        // Retrieve data from the form
        $student_id = $_POST['student_id'];
        $student_name = $_POST['student_name'];
        $phone_number = $_POST['phone_number'];

        // Prepare and execute the SQL statement for updating the student record
        $sql = "UPDATE student SET student_name = '$student_name', phone_number = '$phone_number' WHERE student_id = '$student_id'";

        if ($connection->query($sql) === TRUE) {
            echo "<div class='toast show-toast'>Student with ID: $student_id updated successfully.</div>";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }

        $connection->close();
    }
    ?>
