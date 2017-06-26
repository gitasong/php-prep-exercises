<?php
    $soup = "Potato Leek";
    $drink = "Pomegranate Lemon Ginger Ale";
    $entree = "Pasta Puttanesca";
    $dessert = "Vaguely Reminiscent";
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Spectral|Trocchi" rel="stylesheet">
        <link rel="stylesheet" href="styles.css" type="text/css">
        <title>Restaurant Specials</title>
    </head>
    <body>
        <h1>Today's Specials</h1>
        <h2>Soup of the Day:</h2>
        <p><?php echo $soup ?></p>
        <h2>Drink of the Day:</h2>
        <p><?php echo $drink ?></p>
        <h2>Entree of the Day:</h2>
        <p><?php echo $entree ?></p>
        <h2>Dessert of the Day:</h2>
        <p><?php echo $dessert ?></p>
    </body>
</html>
