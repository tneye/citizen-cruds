<!-- modal Edit -->
  <div class="modal fade bd-example-modal-lg" id="editDataModal<?php echo $id; ?>"tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form action="update.php" method="POST" class="needs-validation" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User Informations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container mt-3">
    <div class="row g-5">
      <div class="col-md-12 col-lg-12">
          <div class="row g-3">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="col-sm-12">
              <label for="firstname" class="form-label">ชื่อ</label>
              <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $row['firstname']; ?>" >
            </div>

            <div class="col-sm-12">
              <label for="lastname" class="form-label">นามสกุล</label>
              <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $row['lastname']; ?>">
            </div>

            <div  div class="col-sm-6">
              <label for="idcard" class="form-label">เลขบัตรประชาชน</label>
              <input type="text" class="form-control" id="idcard" name="idcard" value="<?php echo $row['idcard']; ?>">
            </div>

            <div class="col-sm-6">
              <label for="religion" class="form-label">ศาสนา</label>
              <input type="text" class="form-control" id="religion" name="religion" value="<?php echo $row['religion']; ?>">
            </div>

            <div class="col-sm-6">
              <label for="gender" class="form-label">เพศ</label>
              <select class="form-control" id="gender" name="gender">
                <option value="ชาย" <?php if ($row['gender'] === 'ชาย') echo 'selected'; ?>>ชาย</option>
                <option value="หญิง" <?php if ($row['gender'] === 'หญิง') echo 'selected'; ?>>หญิง</option>
              </select>
            </div>

            <div class="col-sm-6">
              <label for="birthdate" class="form-label">วันเกิด</label>
              <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?php echo $row['birthdate']; ?>">
            </div>

            <div class="col-sm-6">
              <label for="issued_date" class="form-label">วันทำบัตร</label>
              <input type="date" class="form-control" id="issued_date" name="issued_date" value="<?php echo $row['issued_date']; ?>">
              
            </div>

            <div class="col-sm-6">
              <label for="expiry_date" class="form-label">วันหมดอายุบัตร</label>
              <input type="date" class="form-control" id="expiry_date" name="expiry_date" value="<?php echo $row['expiry_date']; ?>">

            </div>
 
            <div class="col-12">
              <label for="address" class="form-label">ที่อยู่</label>
              <textarea name="address" id="address" cols="30" rows="5" class="form-control"><?php echo $row['address']; ?></textarea>
            </div>

            <div class="col-12">
              <label for="image" class="form-label">รูปภาพ</label>
              <input type="file" class="form-control" id="image" name="image">
            </div>

          </div>
      </div>
    </div>
</div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary col-3"  type="submit" onclick="return confirm('คุณต้องการแก้ไขข้อมูลนี้ใช่หรือไม่?')">บันทึกการแก้ไขข้อมูล</button>
      </div>
      </form>
    </div>
  </div>
</div>