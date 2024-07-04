<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    // Email parameters
    $to = "chilomalexandra@yahoo.com";
    $subject = "New RSVP from " . $name;
    $body = "Name: $name\nMessage:\n$message";
    $headers = "From: no-reply@yourdomain.com";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Multe mulțumiri pentru confirmare!";
    } else {
        echo "Mesajul nu a fost trimis. Mai încearcă o dată!";
    }
}
?>
