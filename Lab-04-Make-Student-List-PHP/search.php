
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

    // Retrieve search term from the form
    $search_term = $_POST['search_term'];

    // Prepare and execute the SQL statement for searching the student records
    $sql = "SELECT * FROM student WHERE student_name LIKE '%$search_term%' OR student_id = '$search_term' OR phone_number LIKE '%$search_term%'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2 class='student-list'>Search Results</h2>";
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
        echo "<p class='no-results'>No matching students found.</p>";
    }

    $connection->close();
}
?>

<div class="container">
    <form method="post" action="search.php">
        <div class="form-group">
            <label for="search_term">Enter the Student ID to Search:</label>
            <input type="text" name="search_term" required><br>
        </div>

        <div class="form-group">
            <input type="submit" value="Search">
        </div>
    </form>

    <a href="index.php" class="back-link">Back to Student List</a>

</div>


</body>
</html>
