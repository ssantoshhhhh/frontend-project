<?php
$host = "127.0.0.1:3310";
$user = "root";        // your MySQL username
$password = "password";        // your MySQL password
$database = "fd_db";

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$find_website = $_POST['find_website'];
$helpful = $_POST['helpful'];
$experience_rating = $_POST['experience_rating'];
$recommend = $_POST['recommend'];
$suggestions = $_POST['suggestions'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO fd (find_website, helpful, experience_rating, recommend, suggestions) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssiss", $find_website, $helpful, $experience_rating, $recommend, $suggestions);

if ($stmt->execute()) {
    echo "<h2>Thank you for your feedback!</h2>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
