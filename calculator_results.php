<?php
    $input_weight = $_GET["weight"];
    $input_distance = $_GET["distance"];
    // $total_cost = ($weight / 20) + ($distance / 20);
    // $total_cost = ($distance / $weight) + 5;
    // $total_cost = ($weight * (0.005 * $distance)) - 10;
    $shipping_price = calculateShipping($input_weight, $input_distance);

    function calculateShipping($weight, $distance)
    {
        // $price = $weight / 20 + $distance / 20;
        $price = ($distance / $weight) + 5;
        return $price;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Total Shipping Cost</title>
</head>
<body>
    <h1>Your Total Shipping Cost</h1>
    <p>Weight: <?php echo $input_weight; ?> lbs.</p>
    <p>Distance: <?php echo $input_distance; ?> miles</p>
    <p id="total_cost">Your Total Shipping Cost: $<?php echo $shipping_price; ?></p>
</body>
</html>
