<!DOCTYPE html>
<html>
<head>
  <title>ระบบจัดการผู้ใช้</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<!-- header  -->
<div class="container">
  <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-4">
          <h1>การจัดการผู้ใช้</h1>
        </div>
        <div class="row col-6 mt-2">
            <form action="index.php" method="GET" class="form search-form col-12">
                    <div class="input-group ">
                        <input  type="text" class="form-control col-xl-11 col-md-11 col-sm-10"  name="search" aria-label="Search" placeholder="ค้นหาจากชื่อหรือเลขบัตรประชาชน">
                        <button type="submit"  class="btn i btn-danger ml-0"><i class="bi bi-search" aria-hidden="true"></i>ค้นหา</button>
                    </div>
            </form>
        </div>
        <div class="col-2 mt-2 ml-0 pl-0">
            <a href="#addModel" class="btn btn-success" data-toggle="modal" data-target="#createDataModal"><i class="bi bi-plus-lg"></i><span>เพิ่มข้อมูลผู้ใช้</span></a>
        </div>
      </div>

    </div>

    <table class="table table-striped table-hover">
      <thead>
        <tr>
            <th scope="col"> </th>
            <th scope="col">ชื่อนามสกุล</th>
            <th scope="col">เลขบัตรประชาชน</th>
            <th scope="col">วันเริ่มทำบัตร</th>
            <th scope="col">วันหมดอายุบัตร</th>
            <th scope="col"> </th>
        </tr>
      </thead>
      <tbody>

      <?php
            include('connection.php');
            include('create.php');
            if (empty($_GET['search'])){
                $search = '';
            }else{
                $search = $_GET['search']; }
            $sql = "SELECT * FROM users ";
            if (!empty($search)) {
                $sql .= "WHERE firstname LIKE '%$search%' OR idcard LIKE '%$search%'";
            }
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            include('edit.php');
            include('readMore.php');
        ?>

        <tr>
          <td><img src="<?php echo $row['image']; ?>" width="50"></td>
          <td><span width="100%"><?php echo $row['firstname'] . ' ' . $row['lastname']; ?></span></td>
          <td><?php echo $row['idcard']; ?></td>
          <td><?php echo $row['issued_date']; ?></td>
          <td><?php echo $row['expiry_date']; ?></td>
          <td class="col-2">
            <a href="#viewModal" class="view" data-toggle="modal" data-target="#readDataModal<?php echo $id; ?>"><i class="bi bi-eye-fill"></i></i></a>
            <a href="#editModal" class="edit" data-toggle="modal" data-target="#editDataModal<?php echo $id; ?>"><i class="bi bi-pencil-square"></i></i></a>
            <a href="delete.php?id=<?php echo $row['id']; ?>" class="delete" onclick="return confirm('คุณต้องการลบข้อมูลนี้ใช่หรือไม่?')"><i class="bi bi-trash-fill"></i></a>
          </td>
        </tr>

        <?php
            }
            mysqli_close($conn);
        ?>

      </tbody>
    </table>
  </div>
</div>

              





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
