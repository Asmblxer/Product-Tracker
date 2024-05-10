    
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
    <h2 style="margin-left: 10px; margin-right: 10px;">بيانات العميل</h2>
    <?php
    // connect to database
    require 'dbcon.php';
    // get client id from request
    $client_id = $_GET['id'];
    // edit client from database
    $sql = "SELECT * FROM clients WHERE ID = $client_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>
    <form action="edit_client.php" method="POST">
      <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="client_id" class="form-label">client id</label>
        <input type="text" class="form-control" id="client_id" name="client_id" value="<?php echo $row["ID"]?>" readonly>
      </div>
      <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="client_name" class="form-label">إسم الزبون</label>
        <input type="text" class="form-control" id="client_name" name="client_name" value="<?php echo $row["name"]?>">
      </div>
      <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="client_phone" class="form-label">تلفون الزبون</label>
        <input type="tel" class="form-control" id="client_phone" name="client_phone" value="<?php echo $row["phone"]?>">
      </div>
      <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="client_address" class="form-label">عنوان الزبون</label>
        <input type="text" class="form-control" id="client_address" name="client_address" value="<?php echo $row["address"]?>">
      </div>
      <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="client_come_from" class="form-label">عرفنا ازاي</label>
        <input type="text" class="form-control" id="client_come_from" name="client_come_from" value="<?php echo $row["come_from"]?>">
      </div>
      <div class="mb-3" style="margin-left: 10px; margin-right: 10px;" >
        <label for="note" class="form-label">ملحوظه</label>
        <input type="note" class="form-control" id="note" name="note" value="<?php echo $row["note"]?>">
      </div>
      <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <button type="submit" class="btn btn-success">أضف زبون</button>
        <a href="clients.php" class="btn btn-danger" style="margin-left: 100px;">إلغاء</a>
        <a href="clients.php" class="btn btn-primary" style="margin-left: 100px;">رجوع</a>
      </div>
    </form>
    <?php } else {
      echo "error";
      } 
      $conn->close();
    ?>
  </body>
</html>