<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Default password is empty for XAMPP
$database = "carbonfootprint"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

$email = $_POST['email'];
$password = $_POST['password'];

// Check if admin exists in the database
$sql = "SELECT * FROM admins WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) 
{
    $row = mysqli_fetch_assoc($result);
        // Start a new session
        session_start();
        // Store admin data in session variables
        $_SESSION['admin_id'] = $row['admin_id'];
        $_SESSION['email'] = $row['email'];
        // Redirect admin to admin dashboard
        header("Location: admin_dashboard.php");
        exit();
}
else {
        echo "Admin not found";
    } 

mysqli_close($conn);
?>