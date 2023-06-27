<?php
include('connection.php');

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$idcard = $_POST['idcard'];
$birthdate = $_POST['birthdate'];
$expiryDate = $_POST['expiry_date'];
$issuedDate = $_POST['issued_date'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$address = $_POST['address'];



  // ตรวจสอบว่ามีการอัปโหลดรูปภาพหรือไม่
  if (isset($_FILES['image']) && $_FILES['image']['name'] !== '') {
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    // อัปโหลดไฟล์รูปภาพไปยังโฟลเดอร์ uploads
    move_uploaded_file($image_tmp, "uploads/" . $image);
    $targetDirectory = 'uploads/';
    $targetFile = $targetDirectory . basename($image);
    // อัปเดตชื่อรูปภาพในฐานข้อมูล
    $sql = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', idcard = '$idcard', birthdate = '$birthdate', expiry_date = '$expiryDate', issued_date = '$issuedDate', gender = '$gender', religion = '$religion', address = '$address', image = '$targetFile' WHERE id = $id";
  } else {
    // ไม่มีการอัปโหลดรูปภาพใหม่ อัปเดตข้อมูลอื่นๆ ยกเว้นฟิลด์รูปภาพ
    $sql = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', idcard = '$idcard', birthdate = '$birthdate', expiry_date = '$expiryDate', issued_date = '$issuedDate', gender = '$gender', religion = '$religion', address = '$address' WHERE id = $id";
  }

  if (mysqli_query($conn, $sql)) {
    header('Location: index.php');
  } else {
    echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล: " . mysqli_error($conn);
  }

mysqli_close($conn);
?>
