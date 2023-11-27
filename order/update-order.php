<?php
include "../DB-conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $Client_Id = $_POST['Client_Id'];
    $shippingAgent_Id = $_POST['shippingAgent_Id'];
    $Menu_Id = $_POST['Menu_Id'];
    $is_dilevered = $_POST['is_dilevered'];


    $sql = "UPDATE `order` SET `name`='$name',`Client_Id`='$Client_Id',
    `shippingAgent_Id`='$shippingAgent_Id',`Menu_Id` = '$Menu_Id',`is_dilevered`='$is_dilevered' WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../order.php?msg=Data updated successfully");
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
    <title>Dash RESTIAM - update Orders</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #FE7F32;">
        Orders
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3> Edit Order Information </h3>
            <p class="text-muted">Click update after changing any information</p>
        </div>

        <?php
        $sql = "SELECT * FROM `order` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">

                <div class="card">
                    <img src="../assets/imgs/burger.jpeg" alt="image" id="image">
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Name:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">

                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Client Id:</label>
                    <input type="number" class="form-control" name="Client_Id" value="<?php echo $row['shippingAgent_Id'] ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">shippingAgent Id:</label>
                    <input type="number" class="form-control" name="shippingAgent_Id" value="<?php echo $row['shippingAgent_Id'] ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Menu Id:</label>
                    <input type="number" class="form-control" name="Menu_Id" value="<?php echo $row['Menu_Id'] ?>">
                </div>
                <br>


                <div class="button-container">

                    <div class="form-group mb-3">
                        <label>is dilevered:</label>
                        &nbsp;
                        <input type="radio" class="form-check-input" name="is_dilevered" id="true" value="true" <?php echo ($row["is_dilevered"] == 'true') ? "checked" : ""; ?>>
                        <label for="true" class="form-input-label">true</label>
                        &nbsp;
                        <input type="radio" class="form-check-input" name="is_dilevered" id="false" value="false" <?php echo ($row["is_dilevered"] == 'false') ? "checked" : ""; ?>>
                        <label for="false" class="form-input-label">false</label>
                    </div>




                    <br>
                    <button type="submit" class="btn btn-success" name="submit" style="background-color: #FE7F32; border: 2px solid black">Update</button>
                    <a href="../order.php" class="btn btn-danger" style="background-color: #FE7F32; border: 2px solid black">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>