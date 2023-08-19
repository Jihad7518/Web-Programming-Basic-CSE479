
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

    <div class="container">
        <form method="post" action="update.php" class="form-group">
            <label for="student_id">Student ID to Update:</label>
            <input type="text" name="student_id" required><br>

            <label for="student_name">Student Name:</label>
            <input type="text" name="student_name" required><br>

            <label for="phone_number">Phone Number:</label>
            <input type="text" name="phone_number" required><br>

            <input type="submit" value="Update">
        </form>
    </div>

    <a href="index.php" class="back-link">Back to Student List</a>

    <!-- JavaScript for the toast notification -->
    <script>
        // Close the toast notification after 3 seconds (3000 milliseconds)
        setTimeout(function () {
            var toast = document.querySelector('.toast');
            toast.classList.remove('show-toast');
        }, 3000);
    </script>

</body>
</html>
