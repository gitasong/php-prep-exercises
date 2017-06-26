<?php
    $current_temp = $_GET["temperature"];
    $temperature_message = show_temp_message($current_temp);

    function show_temp_message($inputted_temp)
    {
        if ($inputted_temp < 60) {
            return "It's cold out!";
        } elseif ($inputted_temp > 80) {
            return "It's too hot!";
        } else {
            return "It's lovely out!";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Temperature Message</title>
    </head>
    <body>
        <h1><?php echo $temperature_message; ?></h1>
    </body>
</html>
