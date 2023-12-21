<?php

$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod === 'POST') {
    // Process form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate and sanitize input (you should add proper validation)

    $to = "shariqr2001@gmail.com";  // Replace with your email address
    $subject = "New Message from $name";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Use the mail() function to send the email
    if (mail($to, $subject, $body)) {
        echo "Form submitted successfully!";
    } else {
        echo "Error submitting the form. Please try again later.";
    }

    exit();
} else {
    // Handle cases where the script is not accessed via a POST request
    echo "Invalid request method.";
}
?>