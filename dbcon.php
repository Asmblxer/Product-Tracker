
<?php
// Database configuration
$host = "srv1368.hstgr.io"; // Replace with your database host
$dbName = "u537321905_alandalos"; // Replace with your database name
$username = "u537321905_alandalos"; // Replace with your database username
$password = "Alandalos@Furniture123###"; // Replace with your database password

// Create database connection
$conn = new mysqli($host, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
?>
