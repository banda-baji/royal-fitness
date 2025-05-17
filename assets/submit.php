<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = htmlspecialchars($_POST['name']);
    $email    = htmlspecialchars($_POST['email']);
    $phone    = htmlspecialchars($_POST['phone']);
    $gender   = htmlspecialchars($_POST['gender']);
    $age      = htmlspecialchars($_POST['age']);
    $plan     = htmlspecialchars($_POST['plan']);
    $message  = htmlspecialchars($_POST['message']);

    $entry = "Name: $name\nEmail: $email\nPhone: $phone\nGender: $gender\nAge: $age\nPlan: $plan\nMessage: $message\n---\n";

    file_put_contents("submissions.txt", $entry, FILE_APPEND);

    // Redirect to thank-you page
    header("Location: thank-you.html");
    exit();
}
?>
