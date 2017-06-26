<?php
    $groceries = array("eggs", "milk", "bread", "apples", "bananas", "fruit rollups", "steak", "kale", "pasta", "flour", "sugar", "vanilla");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Array Practice</title>
</head>
<body>
    <h1>My Grocery List</h1>
    <ul>
        <?php
            foreach ($groceries as $grocery) {
                echo "<li>" . $grocery . "</li>";
            }
        ?>
    </ul>

    <h1>Friends' Names</h1>
    <ul>
        <?php
            $friends = array("Amy", "Lauren", "Diego", "Amir", "Norbu", "Petrushka", "Tamira");

            foreach($friends as $friend) {
                echo "<p>" . $friend . " is my friend.</p>";
            }
        ?>
    </ul>

    <h1>Friends' Names Reversed</h1>
    <ul>
        <?php
            $friends = array("Amy", "Lauren", "Diego", "Amir", "Norbu", "Petrushka", "Tamira);

            foreach($friends as $friend) {
                $friend_rev = strrev($friend);
                echo "<li>" . $friend_rev . "</li>";
            }
        ?>
    </ul>

    <h1>Multiplication</h1>
    <ul>
        <?php
            $numbers = array(6, 3, 4, 7, 9, 11, 8);
            $result = 1;

            foreach($numbers as $number) {
                $result = $number * $result;
            }
            echo $result;
        ?>
    </ul>
</body>
</html>
