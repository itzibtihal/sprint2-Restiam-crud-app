<?php
include "../DB-conn.php";

if (isset($_POST["submit"])) {
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $phone = $_POST['phone'];
   

   $sql = "INSERT INTO `delivery`(`id`, `first_name`, `last_name`,`phone`) VALUES (NULL,'$first_name','$last_name','$phone')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: ../delivery.php?msg=New user created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <Style>
    .button-container {
            text-align: center;
        }
   </Style>
   <title>Dash RESTIAM - ADD new Shipping Agent</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #FE7F32;">
         Shipping Agent
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New Shipping Agent</h3>
         <p class="text-muted">Complete the form below to add a new Shipping Agent</p>
      </div>
     <br> <br>
      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">First Name:</label>
                  <input type="text" class="form-control" name="first_name" placeholder="Ibtihal" required>
               </div>

               <div class="col">
                  <label class="form-label">Last Name:</label>
                  <input type="text" class="form-control" name="last_name" placeholder="boukhanchouch"  required>
               </div>
            </div>
         
            <div class="mb-3">
               <label class="form-label">phone:</label>
               <input type="tel" class="form-control" name="phone" placeholder="+212 699873456" required>
            </div>
           <br>
           <br>

            <div class="button-container">
            
               <button type="submit" class="btn btn-success" name="submit" style="background-color: #FE7F32; border: 2px solid black">Save</button>
               <a href="../delivery.php" class="btn btn-danger"  style="background-color: #FE7F32;  border: 2px solid black"">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>