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
  <h2 style="text-align: center;">بيانات الطلب</h2>

  <form action="add_order.php" method="post">
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
      <label for="client_id" class="form-label">اختر العميل</label>
      <select class="form-control" id="client_id" name="client_id">
        <?php
          // Connect to the database
          require 'dbcon.php';
          // Query to get all clients
          $sql = "SELECT ID, name FROM clients";
          $result = $conn->query($sql);

          // Loop through the results and create an option for each client
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<option value='" . $row["ID"] . "'>" . $row["name"] . "</option>";
            }
          } else {
            echo "<option>No clients found</option>";
          }
        ?>
      </select>
    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
      <label for="order_date" class="form-label">تاريخ الطلب</label>
      <input type="date" class="form-control" id="order_date" name="order_date">
    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
      <label for="delivery_date" class="form-label">تاريخ التسليم</label>
      <input type="date" class="form-control" id="delivery_date" name="delivery_date">
    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
      <label for="order_type" class="form-label">نوع الطلب</label>
      <input type="text" class="form-control" id="order_type" name="order_type">
    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
      <label for="order_items" class="form-label">العناصر</label>
      <textarea class="form-control" id="order_items" name="order_items" rows="3"></textarea>
    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
      <label for="order_notes" class="form-label">ملاحظات</label>
      <textarea class="form-control" id="order_notes" name="order_notes" rows="3"></textarea>
    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;"> 
      <button type="submit" class="btn btn-primary" style="margin-left: 10px; margin-right: 100px;"> أضف طلب</button>
      <a href="index.php" class="btn btn-danger"> إلغاء </a>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
