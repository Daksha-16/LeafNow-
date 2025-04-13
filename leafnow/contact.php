<?php
$conn = new mysqli("localhost", "root", "", "leafnow_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO contact_messages (email, subject, message)
        VALUES ('$email', '$subject', '$message')";

if ($conn->query($sql)) {
    echo "Message submitted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
