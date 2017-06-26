<?php
    $first_name = $_GET["first-name"];
    $last_name = $_GET["last-name"];
    $email_address = $_GET["email-address"];
    $appt_date = $_GET["appt-date"];
    $start_time = $_GET["start-time"];
    $end_time = $_GET["end-time"];
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Appointment Confirmation</h1>
        <p>
            Thank you for booking an appointment at OurSpa! Your appointment details are below.
        </p>
        <ul>
            <li>
                First Name: <?php echo $first_name ?>
            </li>
            <li>
                Last Name: <?php echo $last_name ?>
            </li>
            <li>
                Email Address: <?php echo $email_address ?>
            </li>
            <li>
                Appointment Date: <?php echo $appt_date ?>
            </li>
            <li>
                Start Time: <?php echo $start_time ?>
            </li>
            <li>
                End Time: <?php echo $end_time ?>
            </li>
        </ul>
    </body>
</html>
