<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $submit = $_POST['submit'];


    if ($submitValue === 'Submit') {
    // Set up the email parameters
    $to = 'yasserdigi@gmail.com';  
    $headers = "From: $name <$email>";
    $body = "Subject: $subject\n\n$message";

    // Send the email
    $success = mail($to, $subject, $body, $headers);

    if ($success) {
        echo 'Message sent successfully!';
    } else {
        echo 'An error occurred while sending the message.';
    }
}
}
?>