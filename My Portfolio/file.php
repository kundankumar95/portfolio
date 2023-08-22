<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $Phone = $_POST["Phone"];
    $message = $_POST["message"];
    
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message = "Phone: $Phone\n";
    $message .= "message: $message\n";
    
    $to = "kundanburnwal95078@gmail.com";
    $subject = "New Form Submission";
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
