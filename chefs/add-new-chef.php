<?php
include "../DB-conn.php";

if (isset($_POST["submit"])) {
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $post = $_POST['post'];
   $salary = $_POST['salary'];
   $gender = $_POST['gender'];
   $profile = $_FILES['profile']['name'];
   $temp_name = $_FILES['profile']['tmp_name'];
   $folder = "assets/imgs/".$profile;
   

   $sql = "INSERT INTO `team`(`id`, `first_name`, `last_name`,`phone` ,`email`,`post`,`salary`, `gender`,`profile`) 
   VALUES (NULL,'$first_name','$last_name','$phone','$email','$post','$salary','$gender','$folder')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: ../team.php?msg=New user created successfully");
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
        .card{
        width:100%;
        border : none;
        background-color:transparent;
        display:flex;
        justify-content:center;
        align-items:center;
    }

    .card img{
        width:200px;
        border-radius:50%;
        object-fit:cover;
    }
    .card label{
        margin-top:30px;
        text-align:center;
        height:40px;
        cursor:pointer;
        font-weight:bold;
        margin-bottom:20px;
    }
    .card input{
        display:none;
    }
   </Style>
   <title>Dash RESTIAM - ADD new Chef</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #FE7F32;">
       Chef
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New Chef</h3>
         <p class="text-muted">Complete the form below to add a new Chef</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" enctype="multipart/form-data"  style="width:50vw; min-width:300px;">
                    
              <div class="card">
                    <img src="../assets/imgs/OIP.jpeg" alt="image" id="image">
                    <label for="input-file">Choose Image</label>
                    <input type="file" accept="image/jpg , image/png , image/jpeg" id="input-file" name="profile" required>
                </div>

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

            <div class="mb-3">
               <label class="form-label">Email:</label>
               <input type="email" class="form-control" name="email" placeholder="name@example.com"  required>
            </div>

            <div class="mb-3">
               <label class="form-label">salary:</label>
               <input type="number" class="form-control" name="salary" placeholder="$6500" required>
            </div>

           <br>
           

            <div class="button-container">
               

                <div class="form-group mb-3">
               <label>Post:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="post" id="Executive_chef" value="Executive chef">
               <label for="Executive_chef" class="form-input-label">Executive chef</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="post" id="Pastry_chef" value="Pastry chef">
               <label for="Pastry_chef" class="form-input-label">Pastry chef</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="post" id="Sous_chef" value="Sous chef">
               <label for="Sous_chef" class="form-input-label">Sous chef</label>
            </div>
  <br> 
            <div class="form-group mb-3">
               <label>Gender:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="male" value="male">
               <label for="male" class="form-input-label">Male</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="female" value="female">
               <label for="female" class="form-input-label">Female</label>
            </div> <br>
               <button type="submit" class="btn btn-success" name="submit" style="background-color: #FE7F32; border: 2px solid black">Save</button>
               <a href="../team.php" class="btn btn-danger"  style="background-color: #FE7F32;  border: 2px solid black"">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
      let image = document.getElementById("image");
      let input = document.getElementById("input-file");

      input.onchange=()=>{
         image.src= URL.createObjectURL(input.files[0]);
      }
    </script>
</body>

</html>