
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <div class="container">
        <h1>Login</h1>

        <?php
            session_start();

            // Define the valid username and password
            $valid_username = "admin";
            $valid_password = "admin123";

            // Check if the user is already logged in
            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                header("Location: index.php");
                exit;
            }

            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                // Get the entered username and password
                $username = $_POST["username"];
                $password = $_POST["password"];

                // Validate the credentials
                if ($username === $valid_username && $password === $valid_password) {
                    // If the credentials are valid, set session variables and redirect to index.php
                    $_SESSION["loggedin"] = true;
                    $_SESSION["username"] = $username;
                    header("Location: index.php");
                    exit;
                } else {
                    //$login_error = "Invalid username or password.";
                    echo "<div class='toast show-toast'>Username or Password wrong.</div>";
                }
            }
        ?>

        <form method="post" action="login.php" class="login-form">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>

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

