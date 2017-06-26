<?php
    $inputted_food = $_GET["food"];
    $test_food = canSheEat($inputted_food);

    // function canSheEat($food)
    // {
    //     if ((!($food == "fish")) && (!($food == "pineapples"))) {
    //         return "She can eat it!";
    //     } else {
    //         return "She can't eat that; yuck.";
    //     }
    // }

    function canSheEat($food)
    {
        if (($food == "fish") || ($food == "pineapples")) {
            return "She can't eat that; yuck.";
        } else {
            return "She can eat it!";
        }
    }
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Can she eat it?</title>
    </head>
    <body>
        <h1><?php echo $test_food ?></h1>
    </body>
</html>
