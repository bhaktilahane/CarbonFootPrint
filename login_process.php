
<?php

$roll_no = $_POST['roll_no'];
$password = $_POST['password'];

include_once "connection.php";
session_start();
$_SESSION['login_status'] = false;

$conn = new mysqli("localhost", "root", "", "carbonfootprint");

$query = mysqli_query($conn, "SELECT * FROM users WHERE roll_no='$roll_no' and password='$password'");

if (mysqli_num_rows($query) == 0) {
    echo "Invalid Login Credentials";
    die;
}

// Start the session and set the login status
$_SESSION['login_status'] = true;

// Redirect to the home page
header("Location: index.php"); // Replace "index.php" with the path to your home page
exit; // Make sure to exit after redirection
?>
