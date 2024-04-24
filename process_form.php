<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Default password is empty for XAMPP
$dbname = "carbonfootprint"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input
function sanitize($data) {
    global $conn;
    return mysqli_real_escape_string($conn, $data);
}

// Calculate and insert total carbon footprint data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user ID from session or wherever it's available
    $user_id = 1; // Change this to the user's ID
    
    // Transport
    $bus_miles = isset($_POST["bus_miles"]) ? (int)$_POST["bus_miles"] : 0;
    $train_miles = isset($_POST["train_miles"]) ? (int)$_POST["train_miles"] : 0;
    $plane_miles = isset($_POST["plane_miles"]) ? (int)$_POST["plane_miles"] : 0;
    $transport_total = $bus_miles + $train_miles + $plane_miles;

    // Energy
    $refrigerator_items = isset($_POST["refrigerator_items"]) ? (int)$_POST["refrigerator_items"] : 0;
    $refrigerator_usage = isset($_POST["refrigerator_usage"]) ? (int)$_POST["refrigerator_usage"] : 0;
   
    $energy_total = $refrigerator_items + $refrigerator_usage // Update this line to include other appliances

    // Water
    $shower_duration = isset($_POST["shower_duration"]) ? (int)$_POST["shower_duration"] : 0;
    $shower_frequency = isset($_POST["shower_frequency"]) ? (int)$_POST["shower_frequency"] : 0;
    $laundry_frequency = isset($_POST["laundry_frequency"]) ? (int)$_POST["laundry_frequency"] : 0;
    $toilet_flushes = isset($_POST["toilet_flushes"]) ? (int)$_POST["toilet_flushes"] : 0;
    $cups_of_water = isset($_POST["cups_of_water"]) ? (int)$_POST["cups_of_water"] : 0;
    $water_total = $shower_duration + $shower_frequency + $laundry_frequency + $toilet_flushes + $cups_of_water;

    // Other
    $soft_cover_books = isset($_POST["soft_cover_books"]) ? (int)$_POST["soft_cover_books"] : 0;
    $hard_cover_books = isset($_POST["hard_cover_books"]) ? (int)$_POST["hard_cover_books"] : 0;
    $clothing_items = isset($_POST["clothing_items"]) ? (int)$_POST["clothing_items"] : 0;
    $plastic_bottles = isset($_POST["plastic_bottles"]) ? (int)$_POST["plastic_bottles"] : 0;
    $cell_phone_duration = isset($_POST["cell_phone_duration"]) ? (int)$_POST["cell_phone_duration"] : 0;
    $ipod_duration = isset($_POST["ipod_duration"]) ? (int)$_POST["ipod_duration"] : 0;
    $other_total = $soft_cover_books + $hard_cover_books + $clothing_items + $plastic_bottles + $cell_phone_duration + $ipod_duration;

    // Insert total carbon footprint data into the database
    $sql = "INSERT INTO carbon_footprint_data (user_id, transport_total, energy_total, water_total, other_total) VALUES 
            ('$user_id', '$transport_total', '$energy_total', '$water_total', '$other_total')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
