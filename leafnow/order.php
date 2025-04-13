<?php
$conn = new mysqli("localhost", "root", "", "leafnow_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$product = $_POST['product_name'] ?? '';
$price = $_POST['price'] ?? '';
$name = $_POST['customer_name'] ?? '';
$email = $_POST['email'] ?? '';
$address = $_POST['address'] ?? '';
$quantity = $_POST['quantity'] ?? 1;

$sql = "INSERT INTO orders (product_name, price, customer_name, email, address, quantity) 
        VALUES ('$product', '$price', '$name', '$email', '$address', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "✅ Order placed successfully!";
} else {
    echo "❌ Error: " . $conn->error;
}

$conn->close();
?>
