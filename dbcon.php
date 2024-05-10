
<?php
// Database configuration
$host = ""; // Replace with your database host
$dbName = ""; // Replace with your database name
$username = ""; // Replace with your database username
$password = ""; // Replace with your database password

// Create database connection
$conn = new mysqli($host, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
?>
