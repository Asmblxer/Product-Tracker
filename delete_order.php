<?php

require 'dbcon.php';
// Get the order ID from the URL
$orderID = $_GET['id'];

// Delete the order from the database
$sql = "DELETE FROM orders WHERE ID = '$orderID'";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error deleting order: " . $conn->error;
}
// Close the database connection
$conn->close();
?>
<a href="index.php" class="btn btn-danger" style="margin-left: 100px;"> رجوع </a>