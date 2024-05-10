<?php
  require 'dbcon.php';
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $client_name = $_POST['client_name'];
    $client_phone = $_POST['client_phone'];
    $client_address = $_POST['client_address'];
    $client_come_from = $_POST['client_come_from'];
    $note = $_POST['note'];
    // Perform database insertion here
    // Assuming you have a table called 'clients' with columns 'name', 'phone', 'address', 'come_from', 'note'
    $sql = "INSERT INTO clients (name, phone, address, come_from, note) VALUES ('$client_name', '$client_phone', '$client_address', '$client_come_from', '$note')";
    if ($conn->query($sql) === TRUE) {
        header("Location: clients.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error . "\n";
    }
  }
  // Close the database connection
  $conn->close();
?>
<a href="clients.php" class="btn btn-danger" style="margin-left: 100px;"> رجوع </a>
