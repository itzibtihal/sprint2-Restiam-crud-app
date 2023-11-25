<?php
include "../DB-conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `menu` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: ../menu.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
