<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            echo "<h2>Thank you, $name!</h2>";
            echo "<p>We have received your message:</p>";
            echo "<p>$message</p>";
            echo "<p>We will get back to you at $email.</p>";
        } else {
            echo "<p>There was an error submitting your form. Please try again.</p>";
        }
        ?>
         <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $organization = htmlspecialchars($_POST['organization']);
            $message = htmlspecialchars($_POST['message']);

            echo "<h2>Thank you, $name!</h2>";
            echo "<p>We have received your message:</p>";
            echo "<p>$message</p>";
            echo "<p>We will get back to you at $email.</p>";
        } else {
            echo "<p>There was an error submitting your form. Please try again.</p>";
        }
        ?>
</body>
</html>