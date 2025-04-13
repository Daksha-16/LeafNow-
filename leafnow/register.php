<?php
$conn = new mysqli("localhost", "root", "", "leafnow_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($username && $email && $password) {
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "🎉 Registered successfully!";
    } else {
        echo "❌ Error: " . $conn->error;
    }
} else {
    echo "⚠️ All fields are required.";
}

$conn->close();
?>
