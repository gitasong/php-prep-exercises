<?php
    $text1 = $_GET["text1"];
    $text2 = $_GET["text2"];
    $text3 = $_GET["text3"];
    $encrypted_message = encrypt($text1, $text2, $text3);

    function encrypt($message1, $message2, $message3)
    {
        $encrypt1 = strrev($message1);
        $encrypt2 = strtoupper($message2);
        $encrypt3 = strtoupper(strrev($message3));
        $final_encrypt = $encrypt1 . $encrypt2 . $encrypt3;
        return $final_encrypt;
    };
?>
<html>
    <head>
        <title>Encryption Play</title>
    </head>
    <body>
        <h1>Your secret message:</h1>
        <p><?php echo $encrypted_message; ?> </p>
    </body>
</html>
