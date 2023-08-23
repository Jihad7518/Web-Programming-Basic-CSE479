<?php
session_start(); //session functon
if(isset($_SESSION['user_id'])) {
    header("Location: index.php");// redirect
    exit(); //if failed the exit
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $captcha_result = $_POST['captcha_result'];

    // Validate captcha result
    $captcha_valid = (intval($captcha_result) === ($_SESSION['captcha_number1'] + $_SESSION['captcha_number2'])); // to take only the integer number

    if ($captcha_valid) {
        // Database connection
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'userInfo';

        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query = "SELECT id FROM user WHERE id = ? AND password = ?";
        // to check the user id and password are matching on the database
        $stmt = $conn->prepare($query);
        //securely by separating the query structure from the data
        $stmt->bind_param("ss", $user_id, $password);
        //ss" indicates that two string parameters
        $stmt->execute();
        $stmt->bind_result($result_id);
        //bind the result on the database
        $stmt->fetch();
        $stmt->close();

        if ($result_id) {
            $_SESSION['user_id'] = $result_id;

            if (isset($_POST['remember_me'])) {
                $cookie_expiry = time() + (10 * 24 * 60 * 60); // 10 days
                setcookie('user_id', $result_id, $cookie_expiry);
            }

            header("Location: index.php");
            exit();
        } else {
            // User can't login at a time more than 3
            $_SESSION['login_attempts'] = ($_SESSION['login_attempts'] ?? 0) + 1;
            if ($_SESSION['login_attempts'] >= 3) {
                header("Location: wait.php");
                exit();
            }
        }
    }
}
// Generate random captcha numbers
$captcha_number1 = rand(1, 10);
$captcha_number2 = rand(1, 10);
$_SESSION['captcha_number1'] = $captcha_number1;
$_SESSION['captcha_number2'] = $captcha_number2;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        /* Basic styling for the login form */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

h1 {
    text-align: center;
    padding: 20px 0;
}

form {
    max-width: 300px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

form input[type="text"],
form input[type="password"],
form input[type="submit"],
form input[type="checkbox"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

form input[type="submit"] {
    background-color: #007bff;
    color: #ffffff;
    border: none;
    cursor: pointer;
}

form input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Styling for the math captcha */
.math-captcha {
    margin-top: 10px;
    font-weight: bold;
}

/* Additional styling for the remember me checkbox */
.remember-me {
    margin-top: 10px;
}

/* Centering the form on the page */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

    </style>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="login.php">
        User ID: <input type="text" name="user_id" required><br>
        Password: <input type="password" name="password" required><br>
        Math Captcha: <?= $captcha_number1 ?> + <?= $captcha_number2 ?> = <input type="text" name="captcha_result" required><br>
        <input type="checkbox" name="remember_me"> Remember Me<br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
