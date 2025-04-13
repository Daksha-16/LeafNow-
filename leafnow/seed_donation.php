<?php
$conn = new mysqli("localhost", "root", "", "leafnow_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$donation_description = $_POST['donation_description'] ?? '';

$sql = "INSERT INTO donations_seed (username, email, phone, donation_description) 
        VALUES ('$username', '$email', '$phone', '$donation_description')";

if ($conn->query($sql) === TRUE) {
    echo "Seed/Plant donation recorded successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
