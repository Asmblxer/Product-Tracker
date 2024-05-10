<?php
require 'dbcon.php';

// get id from header
$order_id = $_GET['id'];

// get order details
$sql = "SELECT * FROM orders WHERE ID = $order_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $client_id = $row["client_id"];
  $sql2 = "SELECT name, phone, address FROM clients WHERE ID = $client_id";
  $result2 = $conn->query($sql2);

  if ($result2->num_rows > 0) {
    $row2 = $result2->fetch_assoc();
    $name = $row2["name"];
    $phone = $row2["phone"];
    $address = $row2["address"];
  } else {
    $name = "";
    $phone = "";
    $address = "";
  }
} else {
  echo "error";
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AlandaloSystem</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <nav class="nav nav-pills nav-fill" style="background-color: #212529;">
    <a class="nav-link" href="order_form.php">أضف طلب</a>
    <a class="nav-link" href="index.php">قائمة الطلبات</a>
    <a class="nav-link" href="clients.php">قائمة العملاء</a>
    <a class="nav-link" href="client_form.php">أضف عميل</a>
  </nav>
  <h2 style="text-align: center;">تفاصيل الطلب</h2>
  <div class="card">
    <h4 class="card-header" style="text-align: center;"> معلومات العميل</h5>
    <div class="card-body">
      <h5 class="card-title"><?php echo $name; ?></h5>
      <label for="client_address" class="form-label">رقم الهاتف</label>
      <p class="card-text"> <?php echo $phone; ?> </p>
      <label for="client_address" class="form-label">العنوان</label>
      <p class="card-text"> <?php echo $address; ?> </p>
      <a href='client_details.php?id="<?php echo $client_id; ?>"' class="btn btn-primary">تفاصيل العميل </a>
    </div>
  </div>
  <table class="table">
    <form action="edit_order.php" method="Post">
      <label for="order_id" class="form-label">رقم الطلب</label>
      <input type='text' class="form-control" id="order_id" name="order_id" value="<?php echo $row["ID"]; ?>" readonly>
      <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
      <label for="order_date" class="form-label">تاريخ الطلب</label>
      <input type="text" class="form-control" id="order_date" name="order_date" value="<?php echo $row["date"]; ?>">
      <label for="delivery_date" class="form-label">تاريخ التوصيل</label>
      <input type="date" class="form-control" id="delivery_date" name="delivery_date" value="<?php echo $row["delivery_date"]; ?>">
      <label for="model" class="form-label">الموديل</label>
      <input type="text" class="form-control" id="model" name="model" value="<?php echo $row["model"]; ?>">
      <label for="type" class="form-label">النوع</label>
      <input type="text" class="form-control" id="type" name="type" value="<?php echo $row["type"]; ?>">
      <label for="items" class="form-label">العناصر</label>
      <input type="text" class="form-control" id="items" name="items" value="<?php echo $row["items"]; ?>">
    <thead>
      <tr>
        <th scope="col"> المهمة </th>
        <th scope="col">المطلوب</th>
        <th scope="col">المسئول</th>
        <th scope="col">تاريخ البدأ</th>
        <th scope="col">تاريخ الانتهاء</th>
        <th scope="col">التكلفة</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td> النجارة </td>
          <td><input type="text" class="form-control" name="nagar_required" value="<?php echo $row["nagar_required"]; ?>"></td>
          <td><input type="text" class="form-control" name="nagar_name" value="<?php echo $row["nagar_name"]; ?>"></td>
          <td><input type="text" class="form-control" name="nagar_start" value="<?php echo $row["nagar_start"]; ?>"></td>
          <td><input type="text" class="form-control" name="nagar_finish" value="<?php echo $row["nagar_finish"]; ?>"></td>
          <td><input type="text" class="form-control" name="nagar_cost" value="<?php echo $row["nagar_cost"]; ?>"></td>
        </tr>
        <tr>
          <td> الدهان </td>
          <td><input type="text" class="form-control" name="color_required" value="<?php echo $row["color_required"]; ?>"></td>
          <td><input type="text" class="form-control" name="estorgy_name" value="<?php echo $row["estorgy_name"]; ?>"></td>
          <td><input type="text" class="form-control" name="estorgy_start" value="<?php echo $row["estorgy_start"]; ?>"></td>
          <td><input type="text" class="form-control" name="estorgy_finish" value="<?php echo $row["estorgy_finish"]; ?>"></td>
          <td><input type="text" class="form-control" name="estorgy_cost" value="<?php echo $row["estorgy_cost"]; ?>"></td>
        </tr>
        <tr>
          <td> التنجيد </td>
          <td><input type="text" class="form-control" name="tanged_required" value="<?php echo $row["tanged_required"]; ?>"></td>
          <td><input type="text" class="form-control" name="menaged_name" value="<?php echo $row["menaged_name"]; ?>"></td>
          <td><input type="text" class="form-control" name="menaged_start" value="<?php echo $row["menaged_start"]; ?>"></td>
          <td><input type="text" class="form-control" name="menaged_finish" value="<?php echo $row["menaged_finish"]; ?>"></td>
          <td><input type="text" class="form-control" name="menaged_cost" value="<?php echo $row["menaged_cost"]; ?>"></td>
        </tr>
        <tr>
          <td> التقميش </td>
          <td><input type="text" class="form-control" name="cloth_required" value="<?php echo $row["cloth_required"]; ?>"></td>
          <td><input type="text" class="form-control" name="clother_name" value="<?php echo $row["clother_name"]; ?>"></td>
          <td><input type="text" class="form-control" name="clother_start" value="<?php echo $row["clother_start"]; ?>"></td>
          <td><input type="text" class="form-control" name="clother_finish" value="<?php echo $row["clother_finish"]; ?>"></td>
          <td><input type="text" class="form-control" name="cloth_cost" value="<?php echo $row["cloth_cost"]; ?>"></td>
        </tr>
        <tr>
          <td> الزجاج </td>
          <td><input type="text" class="form-control" name="glass_required" value="<?php echo $row["glass_required"]; ?>"></td>
          <td><input type="text" class="form-control" name="glasser_name" value="<?php echo $row["glasser_name"]; ?>"></td>
          <td><input type="text" class="form-control" name="glasser_start" value="<?php echo $row["glasser_start"]; ?>"></td>
          <td><input type="text" class="form-control" name="glasser_finish" value="<?php echo $row["glasser_finish"]; ?>"></td>
          <td><input type="text" class="form-control" name="glass_cost" value="<?php echo $row["glass_cost"]; ?>"></td>
        </tr>
        <tr>
          <td> الرخام </td>
          <td><input type="text" class="form-control" name="marble_required" value="<?php echo $row["marble_required"]; ?>"></td>
          <td><input type="text" class="form-control" name="marbler_name" value="<?php echo $row["marbler_name"]; ?>"></td>
          <td><input type="text" class="form-control" name="marbler_start" value="<?php echo $row["marbler_start"]; ?>"></td>
          <td><input type="text" class="form-control" name="marbler_finish" value="<?php echo $row["marbler_finish"]; ?>"></td>
          <td><input type="text" class="form-control" name="marble_cost" value="<?php echo $row["marble_cost"]; ?>"></td>
        </tr>
        <tr>
          <td> المقابض </td>
          <td><input type="text" class="form-control" name="makbad_required" value="<?php echo $row["makbad_required"]; ?>"></td>
          <td><input type="text" class="form-control" name="makbad_maker" value="<?php echo $row["makbad_maker"]; ?>"></td>
          <td><input type="text" class="form-control" name="makbad_start" value="<?php echo $row["makbad_start"]; ?>"></td>
          <td><input type="text" class="form-control" name="makbad_finish" value="<?php echo $row["makbad_finish"]; ?>"></td>
          <td><input type="text" class="form-control" name="makbad_cost" value="<?php echo $row["makbad_cost"]; ?>"></td>
        </tr>
        <tr>
          <td> الإضاءات </td>
          <td><input type="text" class="form-control" name="lights_required" value="<?php echo $row["lights_required"]; ?>"></td>
          <td><input type="text" class="form-control" name="lighter_name" value="<?php echo $row["lighter_name"]; ?>"></td>
          <td><input type="text" class="form-control" name="lighter_start" value="<?php echo $row["lighter_start"]; ?>"></td>
          <td><input type="text" class="form-control" name="lighter_finish" value="<?php echo $row["lighter_finish"]; ?>"></td>
          <td><input type="text" class="form-control" name="lights_cost" value="<?php echo $row["lights_cost"]; ?>"></td>
        </tr>
        <tr>
          <td> الستانلس </td>
          <td><input type="text" class="form-control" name="stainless_required" value="<?php echo $row["stainless_required"]; ?>"></td>
          <td><input type="text" class="form-control" name="stainless_maker" value="<?php echo $row["stainless_maker"]; ?>"></td>
          <td><input type="text" class="form-control" name="stainless_start" value="<?php echo $row["stainless_start"]; ?>"></td>
          <td><input type="text" class="form-control" name="stainless_finish" value="<?php echo $row["stainless_finish"]; ?>"></td>
          <td><input type="text" class="form-control" name="stainless_cost" value="<?php echo $row["stainless_cost"]; ?>"></td>
        </tr>
        <tr>
          <td> الأرجل والكعوب </td>
          <td><input type="text" class="form-control" name="legs_required" value="<?php echo $row["legs_required"]; ?>"></td>
          <td><input type="text" class="form-control" name="legs_maker" value="<?php echo $row["legs_maker"]; ?>"></td>
          <td><input type="text" class="form-control" name="legs_start" value="<?php echo $row["legs_start"]; ?>"></td>
          <td><input type="text" class="form-control" name="legs_end" value="<?php echo $row["legs_end"]; ?>"></td>
          <td><input type="text" class="form-control" name="legs_cost" value="<?php echo $row["legs_cost"]; ?>"></td>
        </tr>
        <tr>
          <td> الأدراج والعلب</td>
          <td><input type="text" class="form-control" name="boxes_drawers" value="<?php echo $row["boxes_drawers"]; ?>"></td>
          <td><input type="text" class="form-control" name="boxes_drawers_makers" value="<?php echo $row["boxes_drawers_makers"]; ?>"></td>
          <td><input type="text" class="form-control" name="boxes_drawers_start" value="<?php echo $row["boxes_drawers_start"]; ?>"></td>
          <td><input type="text" class="form-control" name="boxes_drawers_end" value="<?php echo $row["boxes_drawers_end"]; ?>"></td>
          <td><input type="text" class="form-control" name="boxes_drawers_cost" value="<?php echo $row["boxes_drawers_cost"]; ?>"></td>
        </tr>
        <tr>
          <td> المواسير والدواخل </td>
          <td><input type="text" class="form-control" name="pipes_interiors" value="<?php echo $row["pipes_interiors"]; ?>"></td>
          <td><input type="text" class="form-control" name="pipes_interiors_maker" value="<?php echo $row["pipes_interiors_maker"]; ?>"></td>
          <td><input type="text" class="form-control" name="pipes_interiors_start" value="<?php echo $row["pipes_interiors_start"]; ?>"></td>
          <td><input type="text" class="form-control" name="pipes_interiors_end" value="<?php echo $row["pipes_interiors_end"]; ?>"></td>
          <td><input type="text" class="form-control" name="pipes_interiors_cost" value="<?php echo $row["pipes_interiors_cost"]; ?>"></td>
        </tr>
        <tr>
          <td> الحدايد والمفصلات </td>
          <td><input type="text" class="form-control" name="iron_hinges" value="<?php echo $row["iron_hinges"]; ?>"></td>
          <td><input type="text" class="form-control" name="iron_hinges_maker" value="<?php echo $row["iron_hinges_maker"]; ?>"></td>
          <td><input type="text" class="form-control" name="iron_hinges_start" value="<?php echo $row["iron_hinges_start"]; ?>"></td>
          <td><input type="text" class="form-control" name="iron_hinges_end" value="<?php echo $row["iron_hinges_end"]; ?>"></td>
          <td><input type="text" class="form-control" name="iron_hinges_cost" value="<?php echo $row["iron_hinges_cost"]; ?>"></td>
        </tr>
        <tr>
          <td> العجل والسكك </td>
          <td><input type="text" class="form-control" name="wheels_rails" value="<?php echo $row["wheels_rails"]; ?>"></td>
          <td><input type="text" class="form-control" name="wheels_rails_make" value="<?php echo $row["wheels_rails_make"]; ?>"></td>
          <td><input type="text" class="form-control" name="wheels_rails_start" value="<?php echo $row["wheels_rails_start"]; ?>"></td>
          <td><input type="text" class="form-control" name="wheels_rails_end" value="<?php echo $row["wheels_rails_end"]; ?>"></td>
          <td><input type="text" class="form-control" name="wheels_rails_cost" value="<?php echo $row["wheels_rails_cost"]; ?>"></td>
        </tr>
        <tr>
          <td> تنجيد الأدراج </td>
          <td><input type="text" class="form-control" name="drawers_tanged" value="<?php echo $row["drawers_tanged"]; ?>"></td>
          <td><input type="text" class="form-control" name="drawers_menaged" value="<?php echo $row["drawers_menaged"]; ?>"></td>
          <td><input type="text" class="form-control" name="drawers_tanged_start" value="<?php echo $row["drawers_tanged_start"]; ?>"></td>
          <td><input type="text" class="form-control" name="drawers_tanged_end" value="<?php echo $row["drawers_tanged_end"]; ?>"></td>
          <td><input type="text" class="form-control" name="drawers_tanged_cost" value="<?php echo $row["drawers_tanged_cost"]; ?>"></td>
        </tr>
        <tr>
          <td> الهدايا </td>
          <td><input type="text" class="form-control" name="gifts" value="<?php echo $row["gifts"]; ?>"></td>
          <td><input type="text" class="form-control" name="gifts_maker" value="<?php echo $row["gifts_maker"]; ?>"></td>
          <td><input type="text" class="form-control" name="gifts_start" value="<?php echo $row["gifts_start"]; ?>"></td>
          <td><input type="text" class="form-control" name="gifts_end" value="<?php echo $row["gifts_end"]; ?>"></td>
          <td><input type="text" class="form-control" name="gifts_cost" value="<?php echo $row["gifts_cost"]; ?>"></td>
        </tr>
        <tr>
          <td> الإضافات </td>
          <td><input type="text" class="form-control" name="additions" value="<?php echo $row["additions"]; ?>"></td>
          <td></td>
          <td></td>
          <td></td>
          <td><input type="text" class="form-control" name="additions_cost" value="<?php echo $row["additions_cost"]; ?>"></td>
          </tr>
          <tr>
            <td> الإجمالي </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" class="form-control" name="total_cost" value="<?php echo $row["total_cost"]; ?>"></td>
          </tr>
          <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
            <label for="order_notes" class="form-label">ملاحظات</label>
            <input type="text" class="form-control" name="note" value="<?php echo $row["note"]; ?>">
          </div>
          
    </tbody>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;"> 
            <button type="submit" class="btn btn-primary" style="margin-left: 10px; margin-right: 100px;"> حفظ  </button>
            <a href="index.php" class="btn btn-danger"> إلغاء </a>
          </div>
    </form>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>