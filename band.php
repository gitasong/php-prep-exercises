<?php
    $albums = array("Writing in the Air" => 13.95, "Cursive" => 12.95, "The End of the Story" => 14.95, "Denouement" => 12.95);
    $events = array("Chicago" => "12/30", "Atlanta" => "1/6", "Miami" => "1/11", "Ft. Lauderdale" => "1/12", "Dallas" => "2/7", "San Francisco" => "2/13");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>The Fictionals</title>
    </head>
    <body>
        <h1>The Fictionals</h1>
        <h2>Albums</h2>
        <?php
            foreach($albums as $title => $price) {
                echo "<p>" . $title . ": " . $price . "</p>";
            };
        ?>
        <h2>Events</h2>
        <?php
            foreach($events as $city => $date) {
                echo "<p>" . $city . ": " . $date . "</p>";
            }
        ?>
    </body>
</html>
