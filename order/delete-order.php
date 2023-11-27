<?php
include "../DB-conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `order` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: ../order.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
