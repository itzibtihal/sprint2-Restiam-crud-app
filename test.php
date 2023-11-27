<?php
  include "DB-conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<div class="container">
 <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Order ID</th>
          <th scope="col">Client Name</th>
          <th scope="col">Address Order</th>
          <th scope="col">Product Name</th>
          <th scope="col">Total Price</th>
          <th scope="col">Shipping Agent</th>
          <th scope="col">Agent Phone</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $sql =  $sql = "SELECT
        `order`.id,
        crud.first_name AS Client_name,
        crud.address AS Address_order,
        menu.name AS product_name,
        menu.price AS total_price,
        delivery.first_name AS shipping_Agent,
        delivery.phone AS Agent_phone
        FROM
        `order`
        INNER JOIN crud ON `order`.Client_Id = crud.id
        INNER JOIN menu ON `order`.Menu_Id = menu.id
        INNER JOIN delivery ON `order`.shippingAgent_Id = delivery.id";

        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {

        ?>

        <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["Client_name"] ?></td>
            <td><?php echo $row["Address_order"] ?></td>
            <td><?php echo $row["product_name"] ?></td>
            <td><?php echo $row["total_price"] ?></td>
            <td><?php echo $row["shipping_Agent"] ?></td>
            <td><?php echo $row["Agent_phone"] ?></td>
        </tr>





        <?php
        }
        ?>
      </tbody>
    </table>

</div>


<script src="assets/js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>



<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>