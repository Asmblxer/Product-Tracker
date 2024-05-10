<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AlandaloSystem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="normalize.css">
    <link rel="fontawsome" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  </head>
  <body> 
    <nav class="nav nav-pills nav-fill" style="background-color: #212529;">
      <a class="nav-link" href="order_form.php">أضف طلب</a>
      <a class="nav-link" href="index.php">قائمة الطلبات</a>
      <a class="nav-link" href="clients.php">قائمة العملاء</a>
      <a class="nav-link" href="client_form.php">أضف عميل</a>
    </nav>     
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Client ID</th>
          <th scope="col">إسم العميل</th>
          <th scope="col">تلفون العميل</th>
          <th scope="col">عنوان العميل</th>
          <th scope="col">جالنا منين</th>
          <th scope= "col">ملحوظة</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
      <?php
        require 'dbcon.php';
        $sql = "SELECT * FROM clients";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["ID"]. "</td>";
            echo "<td>" . $row["name"]. "</td>";
            echo "<td>" . $row["phone"]. "</td>";
            echo "<td>" . $row["address"]. "</td>";
            echo "<td>" . $row["come_from"]. "</td>";
            echo "<td>" . $row["note"]. "</td>";
            echo "<td>
              <a href='client_details.php?id=" . $row["ID"] . "' class='btn btn-primary'>View</a>
              <a href='delete_client.php?id=" . $row["ID"] . "' class='btn btn-danger'>Delete</a>
                </td>";
            echo "</tr>";
          }
        } else {
          echo "no clients";
        }
      ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
