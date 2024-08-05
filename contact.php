<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACST | Contact Form</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Set the recipient email address.
    $to = "info@naturerwanda.org"; // Replace with your email address

    // Set the email subject.
    $subject = "New Contact Form Submission";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $headers = "From: $name <$email>";

    // Send the email.
    if (mail($to, $subject, $email_content, $headers)) {
        // Email sent successfully
        echo "Thank you! Your message has been sent.";
    } else {
        // Email not sent
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
}
?>

</body>
</html>