<div class="modal fade bd-example-modal-lg" id="createDataModal"tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form action="store.php" method="POST" class="needs-validation" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insert User Informations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container mt-3">
    <div class="row g-5">
      <div class="col-md-12 col-lg-12">
        
          <div class="row g-3">
            <div class="col-sm-12">
            <label for="firstname" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
            </div>

            <div class="col-sm-12">
            <label for="lastname" class="form-label">นามสกุล</label>
            <input type="text" class="form-control" id="lastname" name="lastname" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
            </div>

            <div class="col-sm-6">
              <label for="idcard" class="form-label">เลขบัตรประชาชน</label>
              <input type="text" class="form-control" id="idcard" name="idcard" placeholder=""  required>
              <div class="invalid-feedback">
                idcard is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="religion" class="form-label">ศาสนา</label>
              <input type="text" class="form-control" id="religion" name="religion" required>
              <div class="invalid-feedback">
                Valid religion is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="gender" class="form-label">เพศ</label>
              <select class="form-control" id="gender" name="gender" required>
                <option value="ชาย">ชาย</option>
                <option value="หญิง">หญิง</option>
              </select>
              <div class="invalid-feedback">
                Valid Gender is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="birthdate" class="form-label">วันเกิด</label>
              <input type="date" class="form-control" id="birthdate" name="birthdate" required>
              <div class="invalid-feedback">
                Birthdate is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="issued_date" class="form-label">วันทำบัตร</label>
              <input type="date" class="form-control" id="issued_date" name="issued_date" required>
              <div class="invalid-feedback">
                  Expiry date is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="expiry_date" class="form-label">วันหมดอายุบัตร</label>
              <input type="date" class="form-control" id="expiry_date" name="expiry_date" required>
              <div class="invalid-feedback">
                Expiry date is required.
              </div>
            </div>
 

            <div class="col-12">
            <label for="address" class="form-label">ที่อยู่</label>
        <textarea name ="address" id ="address" cols="30" rows="5" class="form-control" required></textarea>
              <div class="invalid-feedback">
                Please enter the address.
              </div>
            </div>

            <div class="col-12">
              <label for="image" class="form-label">รูปภาพ</label>
              <input type="file" class="form-control" id="image" name="image">
              <div class="invalid-feedback">
                Please enter the Pictuer.
              </div>
            </div>
          </div>
        
      </div>
    </div>
</div>
      </div>
      <div class="modal-footer">

        <button class="btn btn-primary col-2" type="submit" onclick="return confirm('คุณต้องการเพิ่มข้อมูลนี้ใช่หรือไม่?')">บันทึกข้อมูล</button>
      </div>
      </form>
    </div>
  </div>
</div>