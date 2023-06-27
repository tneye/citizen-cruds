
<div class="modal fade" id="readDataModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['firstname'] ?> Information</h5>
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
            <div class="containerimg col-sm-12" >
                <img src="<?php echo $row['image']; ?>" width="100%" >
            </div>
            <div class="col-sm-12 mb-1">
              <label for="firstname" class="form-label">ชื่อ</label>
              <input disabled type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $row['firstname']; ?>" >
            </div>

            <div class="col-sm-12 mb-1">
              <label for="lastname" class="form-label">นามสกุล</label>
              <input type="text" disabled class="form-control" id="lastname" name="lastname" value="<?php echo $row['lastname']; ?>">
            </div>

            <div  div class="col-sm-6 mb-1">
              <label for="idcard" class="form-label">เลขบัตรประชาชน</label>
              <input disabled type="text" class="form-control" id="idcard" name="idcard" value="<?php echo $row['idcard']; ?>">
            </div>

            <div class="col-sm-6 mb-1">
              <label for="religion" class="form-label">ศาสนา</label>
              <input disabled type="text" class="form-control" id="religion" name="religion" value="<?php echo $row['religion']; ?>">
            </div>

            <div class="col-sm-6 mb-1">
              <label for="gender" class="form-label">เพศ</label>
              <input disabled type="text" class="form-control" id="gender" name="gender" value="<?php echo $row['gender']; ?>">
            </div>

            <div class="col-sm-6 mb-1">
              <label for="birthdate" class="form-label">วันเกิด</label>
              <input type="date" disabled class="form-control" id="birthdate" name="birthdate" value="<?php echo $row['birthdate']; ?>">
            </div>

            <div class="col-sm-6 mb-1">
              <label for="issued_date" class="form-label">วันทำบัตร</label>
              <input type="date" disabled class="form-control" id="issued_date" name="issued_date" value="<?php echo $row['issued_date']; ?>">
              
            </div>

            <div class="col-sm-6 mb-1">
              <label for="expiry_date" class="form-label">วันหมดอายุบัตร</label>
              <input type="date" disabled class="form-control" id="expiry_date" name="expiry_date" value="<?php echo $row['expiry_date']; ?>">

            </div>
 
            <div class="col-12 mb-3">
              <label for="address" class="form-label">ที่อยู่</label>
              <textarea name="address" disabled  id="address" cols="30" rows="5" class="form-control"><?php echo $row['address']; ?></textarea>
            </div>
          </div>
      </div>
    </div>
</div>
      </div>

    </div>
  </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>