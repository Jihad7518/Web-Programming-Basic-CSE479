<?php
session_start();
session_unset();
session_destroy();
setcookie('user_id', '', time() - 3600); // Expire the user ID cookie
header("Location: login.php");
exit();
?>
