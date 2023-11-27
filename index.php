<?php
  include "DB-conn.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

<!-- =============== Navigation ================ -->
    <div class="containerr">
        <div class="navigation">
            <ul>
                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="finger-print-outline"></ion-icon>
                        </span>
                        <span class="title">RESTIAM</span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="menu.php">
                        <span class="icon">
                        <ion-icon name="ice-cream-outline"></ion-icon>
                        </span>
                        <span class="title">Menu</span>
                    </a>
                </li>

                <li>
                    <a href="delivery.php">
                        <span class="icon">
                        <ion-icon name="location-outline"></ion-icon>
                        </span>
                        <span class="title">Shipping Agents</span>
                    </a>
                </li>

                <li>
                    <a href="team.php">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Chefs</span>
                    </a>
                </li>


                <li>
                    <a href="Order.php">
                        <span class="icon">
                            
                            <ion-icon name="receipt-outline"></ion-icon>
                        </span>
                        <span class="title">Orders</span>
                    </a>
                </li>

                <li>
                    <a href="client.php">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Clients</span>
                    </a>
                </li>

                <li>
                    <a href="login.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

<!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/716-1693323428.jpg" alt="">
                </div>
            </div>

<!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                    <div class="numbers">
                        <?php
                        $sql = "SELECT COUNT(*) as order_count FROM `order`";

                        // Execute the query
                        $result = $conn->query($sql);

                        // Check if the query was successful
                        if ($result) {
                            // Fetch the result as an associative array
                            $row = $result->fetch_assoc();

                            // Access the count value
                            $orderCount = $row['order_count'];

                            // // Output the count on the front end
                            echo "$orderCount";

                            // Free the result set
                            $result->free();
                        } else {
                            // Handle query error
                            // echo "Error " ;
                        }

                        ?>
                    </div>
                        <div class="cardName">Orders</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="paper-plane-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                    <div class="numbers">
                        <?php
                        $sql = "SELECT COUNT(*) as order_count FROM menu";

                        // Execute the query
                        $result = $conn->query($sql);

                        // Check if the query was successful
                        if ($result) {
                            // Fetch the result as an associative array
                            $row = $result->fetch_assoc();

                            // Access the count value
                            $orderCount = $row['order_count'];

                            // // Output the count on the front end
                            echo "$orderCount";

                            // Free the result set
                            $result->free();
                        } else {
                            // Handle query error
                            // echo "Error " ;
                        }

                        ?>
                       </div>
                        <div class="cardName">Products</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                    <div class="numbers">
                        <?php
                        $sql = "SELECT COUNT(*) as order_count FROM crud";

                        // Execute the query
                        $result = $conn->query($sql);

                        // Check if the query was successful
                        if ($result) {
                            // Fetch the result as an associative array
                            $row = $result->fetch_assoc();

                            // Access the count value
                            $orderCount = $row['order_count'];

                            // // Output the count on the front end
                            echo "$orderCount";

                            // Free the result set
                            $result->free();
                        } else {
                            // Handle query error
                            // echo "Error " ;
                        }

                        ?>
                       </div>
                        <div class="cardName">Clients</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-circle-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                    <div class="numbers">$
                        <?php
                         $sql = "SELECT SUM(menu.price) as total_prices FROM `order`
                         INNER JOIN menu ON `order`.Menu_Id = menu.id";
             
                 // Execute the query
                 $result = $conn->query($sql);
             
                 // Check if the query was successful
                 if ($result) {
                     // Fetch the result as an associative array
                     $row = $result->fetch_assoc();
             
                     // Access the total prices value
                     $totalPrices = $row['total_prices'];
             
                     // Output the total prices on the front end
                     echo number_format($totalPrices, 2); // Format as a currency with two decimal places
             
                     // Free the result set
                     $result->free();
                 } else {
                     // Handle query error
                     // echo "Error ";
                 }
                        ?>
                       </div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

<!-- ================ Order Details List ================= -->


<div class="container">
 <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Order ID</th>
          <th scope="col">Client Name</th>
          <th scope="col">Address Order</th>
          <th scope="col">Product Name</th>
          <th scope="col">Total Price $</th>
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


  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

            <!-- ================= New Customers ================ -->

        </div>
    </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>