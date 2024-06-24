<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "your-email@example.com";
    $headers = "From: $email";

    $body = "Name: $fullname\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message: $message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent.";
    } else {
        echo "Email sending failed.";
    }
}
?>
