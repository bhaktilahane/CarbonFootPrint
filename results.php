<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emissions Calculation Results</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Steller  -->
    <link rel="stylesheet" href="assets/css/leadmark.css">
    <style>
        .title {
            font-size: 20px;
            color: white;
        }
    </style>
</head>
<body background="assets/imgs/mainpage.jpg">
    <h2>Emissions Calculation Results</h2>

    <?php
    // Function to calculate emissions
    function calculateEmissions($items, $hours, $emission_factor)
    {
        return $items * $hours * $emission_factor;
    }

    // Emission factors in kgCO2e per hour
    $emission_factors = array(
        "refrigerator" => 0.03,
        "freezer" => 0.03,
        "dishwasher" => 1.5,
        "microwave" => 0.36,
        "oven" => 2.0,
        "washer" => 0.5,
        "dryer" => 2.0,
        "mobile_phone" => 0.005,
        "tv" => 0.03,
        "computer_desktop" => 0.065,
        "computer_laptop" => 0.02
    );

    // Get the input data for appliances
    $appliances = array(
        "refrigerator" => array(
            "items" => $_POST['refrigerator_items'],
            "usage" => $_POST['refrigerator_usage']
        ))

    // Calculate emissions from appliances
    foreach ($appliances as $appliance => $data) {
        if (!empty($data['items']) && !empty($data['usage'])) {
            $emissions = calculateEmissions($data['items'], $data['usage'], $emission_factors[$appliance]);
            $total_emissions_appliances += $emissions;
            echo "<p>Emissions from $appliance: $emissions kgCO2e</p>";
        }
    }

    // Get the input data for transport, energy, water, and others
    $bus_miles = $_POST['bus_miles'] ?? 0;
    $train_miles = $_POST['train_miles'] ?? 0;
    $plane_miles = $_POST['plane_miles'] ?? 0;

    // Calculate total emissions from transport
    $total_emissions_transport = ($bus_miles * 0.03) + ($train_miles * 0.06) + ($plane_miles * 0.25);

    // Display emissions from transport
    echo "<h3>Emissions from Transport: $total_emissions_transport kgCO2e</h3>";

    // Get the input data for energy
    $refrigerator_items = $_POST['refrigerator_items'] ?? 0;
    $refrigerator_usage = $_POST['refrigerator_usage'] ?? 0;
    $freezer_items = $_POST['freezer_items'] ?? 0;
    $freezer_usage = $_POST['freezer_usage'] ?? 0;
    $dishwasher_items = $_POST['dishwasher_items'] ?? 0;
    $dishwasher_usage = $_POST['dishwasher_usage'] ?? 0;
    $microwave_items = $_POST['microwave_items'] ?? 0;
    $microwave_usage = $_POST['microwave_usage'] ?? 0;
    $oven_items = $_POST['oven_items'] ?? 0;
    $oven_usage = $_POST['oven_usage'] ?? 0;
    $washer_items = $_POST['washer_items'] ?? 0;
    $washer_usage = $_POST['washer_usage'] ?? 0;
    $dryer_items = $_POST['dryer_items'] ?? 0;
    $dryer_usage = $_POST['dryer_usage'] ?? 0;
    $mobile_phone_items = $_POST['mobile_phone_items'] ?? 0;
    $mobile_phone_usage = $_POST['mobile_phone_usage'] ?? 0;
    $tv_items = $_POST['tv_items'] ?? 0;
    $tv_usage = $_POST['tv_usage'] ?? 0;
    $computer_desktop_items = $_POST['computer_desktop_items'] ?? 0;
    $computer_desktop_usage = $_POST['computer_desktop_usage'] ?? 0;
    $computer_laptop_items = $_POST['computer_laptop_items'] ?? 0;
    $computer_laptop_usage = $_POST['computer_laptop_usage'] ?? 0;

    // Calculate total emissions from energy
    $total_emissions_energy = calculateEmissions($refrigerator_items, $refrigerator_usage, 0.03) +
                              calculateEmissions($freezer_items, $freezer_usage, 0.03) +
                              calculateEmissions($dishwasher_items, $dishwasher_usage, 1.5) +
                              calculateEmissions($microwave_items, $microwave_usage, 0.36) +
                              calculateEmissions($oven_items, $oven_usage, 2.0) +
                              calculateEmissions($washer_items, $washer_usage, 0.5) +
                              calculateEmissions($dryer_items, $dryer_usage, 2.0) +
                              calculateEmissions($mobile_phone_items, $mobile_phone_usage, 0.005) +
                              calculateEmissions($tv_items, $tv_usage, 0.03) +
                              calculateEmissions($computer_desktop_items, $computer_desktop_usage, 0.065) +
                              calculateEmissions($computer_laptop_items, $computer_laptop_usage, 0.02);

    // Display emissions from energy
    echo "<h3>Emissions from Energy: $total_emissions_energy kgCO2e</h3>";

    // Get the input data for water
    $shower_duration = $_POST['shower_duration'] ?? 0;
    $shower_frequency = $_POST['shower_frequency'] ?? 0;

    // Calculate total emissions from water
    $total_emissions_water = ($shower_duration * $shower_frequency * 0.002);

    // Display emissions from water
    echo "<h3>Emissions from Water: $total_emissions_water kgCO2e</h3>";

    // Get the input data for others
    $soft_cover_books = $_POST['soft_cover_books'] ?? 0;
    $hard_cover_books = $_POST['hard_cover_books'] ?? 0;

    // Calculate total emissions from others
    $total_emissions_others = ($soft_cover_books * 5.5) + ($hard_cover_books * 9);

    // Display emissions from others
    echo "<h3>Emissions from Others: $total_emissions_others kgCO2e</h3>";

    // Calculate total emissions from all sources
    $total_emissions_all = $total_emissions_appliances + $total_emissions_transport + $total_emissions_energy + $total_emissions_water + $total_emissions_others;

    // Display total emissions
    echo "<h3>Total Emissions: $total_emissions_all kgCO2e</h3>";
    ?>

    <p><a href="index.php">Calculate again</a></p>
</body>
</html>
