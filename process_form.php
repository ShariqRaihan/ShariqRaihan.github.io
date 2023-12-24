<?php

$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod === 'POST') {
    // Process form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

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