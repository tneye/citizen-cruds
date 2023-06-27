<?php
include('connection.php');

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = $id";

if (mysqli_query($conn, $sql)) {
  header('Location: index.php');
} else {
  echo "เกิดข้อผิดพลาดในการลบข้อมูล: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
