<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "encinasj.angel@gmail.com";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $project = $_POST["project"];
    $message = $_POST["message"];
    $subject = "New message from $name about $project";
    $body = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $body)) {
        echo "Message sent successfully";
    } else {
        echo "Error sending message";
    }
}
?>
