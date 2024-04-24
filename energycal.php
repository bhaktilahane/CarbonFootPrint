<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energy Consumption Calculator</title>
   <!-- font icons -->
   <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
   <!-- Bootstrap + Steller  -->
   <link rel="stylesheet" href="assets/css/leadmark.css">
</head>
<body background="assets/imgs/mainpage.jpg">
<nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container" >
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/kj-logo.jpg" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="Login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.html">Signup</a>
                    </li> -->
                    <li class="nav-item">
                        <a href="index.php" class="ml-4 nav-link btn btn-primary btn-sm rounded">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="result.php">result</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-glass">
    <h2>Energy Consumption Calculator</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve data from form
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
        $q5 = $_POST['q5'];
        $q6 = $_POST['q6'];
        $q7 = $_POST['q7'];

        // Calculate total energy consumption
        $total_consumption = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7;

        // Connect to MySQL server
        $servername = "localhost";
        $username = "root"; // Default username for XAMPP
        $password = ""; // Default password for XAMPP
        $dbname = "energy_consumption";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL query to insert data into database
        $sql = "INSERT INTO energy_data (q1, q2, q3, q4, q5, q6, q7, total_consumption) VALUES ('$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$total_consumption')";

        // Execute SQL query
        if ($conn->query($sql) === TRUE) {
            echo "Data saved successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $conn->close();
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="q1">How many hours do you spend using electronic devices per day?</label><br>
        <input type="number" id="q1" name="q1" required><br>

        <label for="q2">How many hours do you spend watching TV per day?</label><br>
        <input type="number" id="q2" name="q2" required><br>

        <label for="q3">How many hours do you spend using lights at home per day?</label><br>
        <input type="number" id="q3" name="q3" required><br>

        <label for="q4">How many hours do you spend using air conditioning or heating per day?</label><br>
        <input type="number" id="q4" name="q4" required><br>

        <label for="q5">How often do you do laundry per week?</label><br>
        <input type="number" id="q5" name="q5" required><br>

        <label for="q6">How often do you cook at home per week?</label><br>
        <input type="number" id="q6" name="q6" required><br>

        <label for="q7">How often do you use transportation (car, bus, etc.)?</label><br>
        <input type="number" id="q7" name="q7" required><br>

        <input type="submit" value="Calculate">
    </form>
</div>
</body>
</html>
