<?php
  // Database configuration
  require 'dbcon.php';
  // update client details
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client_id = $_POST['client_id'];
    $client_name = $_POST['client_name'];
    $client_phone = $_POST['client_phone'];
    $client_address = $_POST['client_address'];
    $client_come_from = $_POST['client_come_from'];
    $note = $_POST['note'];
    $sql = "UPDATE clients SET name='$client_name', phone='$client_phone', address='$client_address', come_from='$client_come_from', note='$note' WHERE ID=$client_id";
    if ($conn->query($sql) === TRUE) {
      header("Location: client_details.php?id=$client_id");
    } else {
        echo "<h1> Error </h1>";
    }
}
// Close the database connection
$conn->close();
?>
<a href= class="btn btn-danger" style="margin-left: 100px;"> رجوع </a>
