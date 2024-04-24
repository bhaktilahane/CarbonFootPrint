<?php
session_start();

// Check if the admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

include_once "connection.php";
$conn = mysqli_connect("localhost","root","","carbonfootprint") or die("Couldn't connect");
// Define variables for search
$search_name = $search_roll_no = $search_email = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_name = $_POST['search_name'];
    $search_roll_no = $_POST['search_roll_no'];
    $search_email = $_POST['search_email'];

    // Construct SQL query with search conditions
    $sql = "SELECT * FROM users WHERE 1=1";
    if (!empty($search_name)) {
        $sql .= " AND name LIKE '%$search_name%'";
    }
    if (!empty($search_roll_no)) {
        $sql .= " AND roll_no LIKE '%$search_roll_no%'";
    }
    if (!empty($search_email)) {
        $sql .= " AND email LIKE '%$search_email%'";
    }

    // Execute SQL query
    $result = mysqli_query($conn, $sql);
} else {
    // Query to fetch all users
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
	

</head>
<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
<nav class="navbar navbar-expand-lg navbar-light bg-light-transparent">
    <div class="container">
        <!--<a class="navbar-brand" href="#">Your Logo</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" style="color: #fff;">Home</a>
                </li>
				
            </ul>
        </div>
    </div>
</nav>
    <h2>Admin Dashboard</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="search_name">Search by Name:</label>
        <input type="text" id="search_name" name="search_name" value="<?php echo $search_name; ?>">
        <br><br>
        <label for="search_roll_no">Search by Roll No:</label>
        <input type="text" id="search_roll_no" name="search_roll_no" value="<?php echo $search_roll_no; ?>">
        <br><br>
        <label for="search_email">Search by Email:</label>
        <input type="email" id="search_email" name="search_email" value="<?php echo $search_email; ?>">
        <br><br>
        <input type="submit" value="Search">
    </form>
    <br>
    <table border="1">
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Roll No</th>
            <th>Email</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['user_id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['roll_no']; ?></td>
                <td><?php echo $row['email']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>

<?php
mysqli_close($conn);
?>
