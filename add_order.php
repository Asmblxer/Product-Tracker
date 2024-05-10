<?php
require 'dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client_id = $_POST['client_id'];
    $order_date = $_POST['order_date'];
    $delivery_date = $_POST['delivery_date'];
    $order_type = $_POST['order_type'];
    $order_items = $_POST['order_items'];
    $order_notes = $_POST['order_notes'];

    $sql = "INSERT INTO orders (client_id, date, delivery_date, type, items, note) VALUES ('$client_id', '$order_date','$delivery_date', '$order_type', '$order_items', '$order_notes')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: ". $sql. "<br>". $conn->error;
    }
}
// Close the database connection
$conn->close();
?>
<a href="index.php" class="btn btn-danger" style="margin-left: 100px;"> رجوع </a>
