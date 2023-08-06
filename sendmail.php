<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set up email parameters
$to = 'mustafa.sahin03@outlook.com';
$subject = 'New contact form submission';
$body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

// Send email
mail($to, $subject, $body);

// Redirect user to a thank you page
header('Location: thankyou.html');
?>
