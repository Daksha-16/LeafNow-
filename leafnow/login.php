<?php
$conn = new mysqli("localhost", "root", "", "leafnow_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username && $password) {
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "✅ Login successful. Welcome, $username!";
    } else {
        echo "❌ Invalid username or password.";
    }
} else {
    echo "⚠️ All fields are required.";
}

$conn->close();
?>
