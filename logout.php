<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page after logout
header("Location: login.html"); // Replace "login.php" with the path to your login page
exit; // Make sure to exit after redirection
?>