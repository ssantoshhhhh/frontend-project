<?php
$servername = "127.0.0.1:3310"; // or the server name
$username = "root"; // MySQL username
$password = "password"; // MySQL password
$dbname = "feedback_db"; // Database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect and sanitize input
$source = $conn->real_escape_string($_POST['source']);
$helpful = (int)$_POST['helpful'];
$rating = (int)$_POST['rating'];
$recommend = (int)$_POST['recommend'];
$improvements = $conn->real_escape_string($_POST['improvements']);

// Insert data into the feedback table
$sql = "INSERT INTO feedback (source, helpful, rating, recommend, improvements) VALUES ('$source', '$helpful', '$rating', '$recommend', '$improvements')";

if ($conn->query($sql) === TRUE) {
    echo "Feedback submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>