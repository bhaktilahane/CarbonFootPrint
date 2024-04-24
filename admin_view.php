<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Default password is empty for XAMPP
$database = "admin-login"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the admin is logged in, otherwise redirect to the login page
session_start();
if (!isset($_SESSION["admin_logged_in"]) || !$_SESSION["admin_logged_in"]) {
    header("Location: admin.php");
    exit();
}

// Initialize variables for search results
$search_results = [];
if (isset($_GET["search_username"]) && !empty($_GET["search_username"])) {
    // Perform search query
    $search_username = $_GET["search_username"];
    $sql = "SELECT * FROM results WHERE Username LIKE '%" . $search_username . "%'";
    $result = $conn->query($sql);

    // Store search results in an array
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $search_results[] = $row;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin View</title>
</head>
<body>
    <h2>Admin View</h2>
    <form action="" method="GET">
        <label for="search_username">Search by Username:</label><br>
        <input type="text" id="search_username" name="search_username">
        <input type="submit" value="Search">
    </form>

    <?php if (!empty($search_results)) : ?>
        <h3>Search Results:</h3>
        <table>
            <tr>
                <th>Username</th>
                <!-- Add more table headers for additional fields as needed -->
            </tr>
            <?php foreach ($search_results as $result) : ?>
                <tr>
                    <td><?php echo $result["Username"]; ?></td>
                    <!-- Add more table cells for additional fields as needed -->
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <a href="admin_logout.php">Logout</a>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>
