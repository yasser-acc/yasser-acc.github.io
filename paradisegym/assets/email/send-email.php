<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // email parameters Set up
    $to = 'yasserdigi@gmail.com';  // Replace with your email address
    $headers = "From: $name <$email>";
    $body = "Subject: $subject\n\n$message";

    // Send the email
    $success = mail($to, $subject, $body, $headers);

}
?>
