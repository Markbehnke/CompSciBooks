<?php
$servername = "cosc499.ok.ubc.ca";
$username = "example";
$password = "p@ssw0rd";

echo "Starting connection test";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    echo "<p>Failed</p>";
    echo "<p>Failed</p>";
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>