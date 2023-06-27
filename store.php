<?php
include('connection.php');

$image = $_FILES['image']['name'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$idcard = $_POST['idcard'];
$birthdate = $_POST['birthdate'];
$expiryDate = $_POST['expiry_date'];
$issuedDate = $_POST['issued_date'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$address = $_POST['address'];

$targetDirectory = 'uploads/';
$targetFile = $targetDirectory . basename($image);
move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);

$sql = "INSERT INTO users (image, firstname, lastname, idcard, birthdate, expiry_date, issued_date, gender, religion,address) VALUES ('$targetFile', '$firstname', '$lastname', '$idcard', '$birthdate', '$expiryDate', '$issuedDate', '$gender', '$religion','$address')";

if (mysqli_query($conn, $sql)) {
  header('Location: index.php');
} else {
  echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
