<?php
    $text1 = $_GET["text1"];
    $text2 = $_GET["text2"];
    $text3 = $_GET["text3"];
    $text4 = $_GET["text4"];
    $upper_text1 = strtoupper($text1);
    $count_text2 = str_word_count($text2);
    $shuffle_text3 = str_shuffle($text3);
    $index_of_me = stripos($text4, "me");
?>
<html>
    <head>
        <title>String Play</title>
    </head>
    <body>
        <h1>Here's the results of your play:</h1>
        <p><?php echo $upper_text1; ?> </p>
        <p><<?php echo $count_text2; ?></p>
        <p><<?php echo $shuffle_text3 ?></p>
        <p><<?php echo $index_of_me ?></p>
    </body>
</html>
