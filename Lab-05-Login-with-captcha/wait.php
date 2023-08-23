<?php
session_start();
$_SESSION = array(); // Clear all session variables
session_destroy();
sleep(300); // Wait for 5 minutes
header("Location: login.php");
exit();
?>
