<?php
  $friend_name = $_GET["recipient"];
  $my_name = $_GET["sender"];
  // $partner_name = "Lethia";
  // $partner_gender_pronoun = "she";
  // $partner_gender_objective_pronoun = "her";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Greetings!</title>
</head>
<body>
    <h1>Greetings From Afar</h1>
    <p>Dear <?php echo $friend_name; ?>,</p>
    <p>How are you? I hope that you are having a nice weekend. I'm vacationing in the mountains of Tibet while I learn programming! </p>
    <p><?php echo $friend_name; ?>, you would not believe how cold it is here. I should have gone to Hawaii instead. But I like programming a lot, so I've got that going for me. </p>
    <!-- <p>How is <?php echo $partner_name; ?> doing? I remember <?php echo $partner_gender_pronoun; ?> was really sick last time I saw <?php echo $partner_gender_objective_pronoun ?>. Is <?php echo $partner_gender_pronoun ?> feeling any better?</p> -->
    <p>Looking forward to seeing you soon. I'll bring you back a souvenir. </p>
    <p>Cheers,</p>
    <p><?php echo $my_name ?></p>
</body>
</html>
