<?php
include "../DB-conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $reviews = $_POST['reviews'];
    

    $sql = "UPDATE `menu` SET `name`='$name',`description`='$description',`price`='$price',`reviews` = '$reviews' WHERE id = $id";
    //   INSERT INTO `menu`(`id`, `name`, `description`, `price`, `profile`, `reviews`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../menu.php?msg=Data updated successfully");
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

        .card {
            width: 100%;
            border: none;
            background-color: transparent;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card img {
            width: 200px;
            border-radius: 50%;
            object-fit: cover;
        }

        .card label {
            margin-top: 30px;
            text-align: center;
            height: 40px;
            cursor: pointer;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .card input {
            display: none;
        }
    </Style>
    <title>Dash RESTIAM - ADD new Product</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #FE7F32;">
        Products
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Edit Product Information</h3>
            <p class="text-muted">Click update after changing any information</p>
        </div>

        <?php
        $sql = "SELECT * FROM `menu` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>



        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">



                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Name:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">

                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">description:</label>
                    <!-- <textarea name="description" id="" cols="20" rows="5" class="form-control"  value="></textarea> -->
                    <input type="text" name="description" id="description" class="form-control" value="<?php echo $row['description'] ?>">
                </div>


                <div class="mb-3">
                    <label class="form-label">price:</label>
                    <input type="number" class="form-control" name="price" value="<?php echo $row['price'] ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">reviews:</label>
                    <input type="number" class="form-control" name="reviews" value="<?php echo $row['reviews'] ?>">
                </div>

                <br>


                <div class="button-container">

                    <br>
                    <button type="submit" class="btn btn-success" name="submit" style="background-color: #FE7F32; border: 2px solid black">Update</button>
                    <a href="../menu.php" class="btn btn-danger" style="background-color: #FE7F32; border: 2px solid black">Cancel</a>

                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
     <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>