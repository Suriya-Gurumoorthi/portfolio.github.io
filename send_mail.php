<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "suriyagurumoorthi02@gmail.com";
    $subject = "New message from your website";
    $email_body = "Name: $name\nEmail: $email\nMessage: $message";
    
    $headers = "From: $email";
    
    if (mail($to, $subject, $email_body, $headers)) {
        echo "<p>Thank you for your message! We'll be in touch shortly.</p>";
    } else {
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
}
?>
