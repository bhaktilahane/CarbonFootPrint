<?php
// Establish connection to MySQL database
$servername = "localhost";
$username = "root";
$password = ""; // Default password for XAMPP
$dbname = "carbonfootprint"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from AJAX request
$transportation = $_POST['transportation'];
$partying = $_POST['partying'];
$consumption = $_POST['consumption'];
$energy = $_POST['energy'];
$food = $_POST['food'];
$waste = $_POST['waste'];
$water = $_POST['water'];
$carbon_total = $_POST['carbon_total'];
$carbon_total_percentage = $_POST['carbon_total_percentage'];

// Prepare SQL statement to insert data into the table
$sql = "INSERT INTO carbon_footprint_data (transportation, partying, consumption, energy, food, waste, water, carbon_total, carbon_total_percentage)
VALUES ('$transportation', '$partying', '$consumption', '$energy', '$food', '$waste', '$water', '$carbon_total', '$carbon_total_percentage')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
