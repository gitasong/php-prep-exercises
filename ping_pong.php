<?php
$returned_array = pingPong(18);
$ping_pong = var_dump($returned_array);

function pingPong($num) {
    $num_array = range(0, $num);
    $new_array = [];
    foreach ($num_array as $item) {
        if (!($item)) {
            array_push($new_array, $item);
        } elseif (!($item % 15)) {
            array_push($new_array, "ping-pong");
        } elseif (!($item % 3)) {
            array_push($new_array, "ping");
        } elseif (!($item % 5)) {
            array_push($new_array, "pong");
        } else {
            array_push($new_array, $item);
        }
    }
    return $new_array;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ping-Pong</title>
    </head>
    <body>
        <h1><?php $ping_pong ?></h1>
    </body>
</html>
