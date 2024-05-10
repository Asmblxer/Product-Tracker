<?php
    require 'dbcon.php';
    // get client id from request
    $client_id = $_GET['id'];
    // delete client from database
    $sql = "DELETE FROM clients WHERE ID = $client_id";
    if ($conn->query($sql) === TRUE) {
        header("Location: clients.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error . "\n";
    }
    // Close the database connection
    $conn->close();
?>
<a href="clients.php" class="btn btn-danger" style="margin-left: 100px;"> رجوع </a>
