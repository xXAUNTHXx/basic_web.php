<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>From</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
  <?php
  include("header.php")
  ?>
  <main <div class="container">
    <div class="card">
      <div class="card-body">
        <form name="forml" action="#" method="post">
          <!-------------row1------------->
          <div class="container text-center">
            <div class="row">
              <div class="col-md-2">
                <label for="firstname" class="form-label">คำนำหน้า</label><select class="form-select" aria-label="Default select example">
                  <option value="">คำนำหน้า</option>
                  <option value="1">นาย</option>
                  <option value="2">นาง</option>
                  <option value="3">นางสาว</option>
                </select>
              </div>

              <div class="col-md-5">
                <label for="name" class="form-label">ชื่อ</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="ชื่อ">
              </div>

              <div class="col-md-5">
                <label for="lastname" class="form-label">นางสกุล</label>
                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="นางสกุล">
              </div>
            </div>
          </div>
          <!-------------row1------------->

          <!-------------row2------------->
          <div class="container text-center">
            <div class="row">
              <div class="col-md-2">
                <div>
                  <label for="sex" class="form-label">เพศ</label>
                </div>
                <input type="radio" class="form-check-input" name="sex" id="sex">
                <label class="form-check-label" for="sex">ชาย
                </label>
                <input type="radio" class="form-check-input" name="sex" id="sex">
                <label class="form-check-label" for="sex">หญิง
                </label>
              </div>

              <div class="col-md-4">
                <label for="txt_birthdate" class="form-label">ว/ด/ป เกิด</label>
                <input type="date" class="form-control" id="txt_birthdate" name="txt_birthdate" 
                placeholder="00/00/0000" data-provide="datepicker" data-date-language="th-th">
              </div>

              <div class="col-md-6">
                <label for="address" class="form-label">ที่อยู่</label>
                <textarea name="address" class="form-control" id="address" placeholder="ที่อยู่"></textarea>
              </div>
            </div>
          </div>
          <!-------------row2------------->

          <!-------------row------------->
          <div class="container text-center">
            <div class="row">
              <div class="col-md-6">
                <label for="number" class="form-label">เบอร์โทร</label>
                <input type="number" name="number" class="form-control" id="number" placeholder="เบอร์โทร">
              </div>

              <div class="col-md-6">
                <label for="gmail" class="form-label">อีเมล์</label>
                <input type="gmail" name="gmail" class="form-control" id="gmail" placeholder="@gmail.com">
              </div>
            </div>
          </div>
          <!-------------row3------------->

          <div class="container text-center"><br>
            <div class="row">
              <div class="col-md-4">
                -
              </div>

              <div class="col-md-4">
              <button  type="button" class="btn btn-outline-success">
              บันทึก <i class="bi bi-check2-circle"></i></button>
              <button type="button" class="btn btn-outline-danger">
              ยกเลิก <i class="bi bi-x"></i></button>
              </div>

              <div class="col-md-4">
                -
              </div>
            </div>
          </div>

        </form>
      </div>
    </div>
    </div>
  </main>
  <?php
  include("footer.php")
  ?>
</body>

</html>