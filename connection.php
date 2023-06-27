<?php
$host = "localhost"; // หรือชื่อโฮสต์ของคุณ
$username = "root"; // ชื่อผู้ใช้ฐานข้อมูล
$password = ""; // รหัสผ่านฐานข้อมูล
$database = "user_crud"; // ชื่อฐานข้อมูล

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die("Fail Connect to Database : " . mysqli_connect_error());
}
?>
