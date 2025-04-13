<?php
$conn = new mysqli("localhost", "root", "", "leafnow_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$amount = $_POST['amount'] ?? '';

$sql = "INSERT INTO donations_money (username, email, phone, amount)
        VALUES ('$username', '$email', '$phone', '$amount')";

if ($conn->query($sql) === TRUE) {
    echo "Money donation recorded. Thank you!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
