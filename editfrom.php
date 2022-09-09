<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>แก้ไขข้อมูล</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
  <?php

  include("header.php");
  include("config.inc.php");
  $recive_id = $_GET['get_id'];
  echo $recive_id;

  $sql = "select * from tbl_65309010001 where id=$recive_id";
  $objQuery = mysqli_query($connetion, $sql);
  $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

  ?>
  <main class="container mt-5">
    <div class="card">
      <div class="card-body">
        <form name="forml" action="update.php" method="post">
          <input type="hidden" class="from-control" name="text_id" id="text_id" value="<?php echo $objResult['id']; ?>">

          <!-------------row1------------->
          <div class="container text-center">
            <div class="row">
              <div class="col-md-2">
                <label for="first_name" class="form-label">คำนำหน้า</label>
                <select class="form-select" aria-label="Default select example" name="first_name" id="first_name">
                  <option value="<?php echo $objResult['firsname']; ?>"><?php echo $objResult['firsname']; ?></option>
                  <option value="นาย">นาย</option>
                  <option value="นาง">นาง</option>
                  <option value="นางสาว">นางสาว</option>
                </select>
              </div>

              <div class="col-md-5">
                <label for="name" class="form-label">ชื่อ</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="ชื่อ" value="<?php echo $objResult['name']; ?>">
              </div>

              <div class="col-md-5">
                <label for="last_name" class="form-label">นางสกุล</label>
                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="นางสกุล" value="<?php echo $objResult['lastname']; ?>">
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

                <?php
                if ($objResult['sex'] == 'ชาย') {
                ?>

                  <input type="radio" class="form-check-input" name="sex" id="sex" value="ชาย" checked="checked">
                  <label class="form-check-label" for="sex">ชาย
                  </label>

                  <input type="radio" class="form-check-input" name="sex" id="sex" value="หญิง">
                  <label class="form-check-label" for="sex">หญิง
                  </label>
              </div>

            <?php
                } else {
            ?>

              <input type="radio" class="form-check-input" name="sex" id="sex" value="ชาย">
              <label class="form-check-label" for="sex">ชาย
              </label>

              <input type="radio" class="form-check-input" name="sex" id="sex" value="หญิง" checked="checked">
              <label class="form-check-label" for="sex">หญิง
              </label>
            <?php
                }
            ?>

            <div class="col-md-5">
              <label for="date_birthdate" class="form-label">ว/ด/ป เกิด</label>
              <input type="date" class="form-control" id="date_birthdate" name="date_birthdate" placeholder="00/00/0000" data-provide="datepicker" data-date-language="th-th" value="<?php echo $objResult['birthday']; ?>">
            </div>

            <div class="col-md-5">
              <label for="address" class="form-label">ที่อยู่</label>
              <textarea name="address" class="form-control" id="address" placeholder="ที่อยู่"><?php echo $objResult['address']; ?></textarea>
            </div>
            </div>
          </div>
          <!-------------row2------------->

          <!-------------row------------->
          <div class="container text-center">
            <div class="row">
              <div class="col-md-6">
                <label for="number" class="form-label">เบอร์โทร</label>
                <input type="number" name="number" class="form-control" id="number" placeholder="เบอร์โทร" value="<?php echo $objResult['number']; ?>">
              </div>

              <div class="col-md-6">
                <label for="gmail" class="form-label">อีเมล์</label>
                <input type="gmail" name="gmail" class="form-control" id="gmail" placeholder="@gmail.com" value="<?php echo $objResult['gmail']; ?>">
              </div>
            </div>
          </div>
          <!-------------row3------------->

          <div class="container text-center"><br>
            <div class="row">
              <div class="col-md-4">
                -
              </div>
              <?php
              if (!isset($_SESSION["name"])) {
              } else {
              ?>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="memberlits.php">รายชื่อสมาชิก<i class="bi bi-clipboard"></i></i></a>
                </li>
              <?php
              }
              ?>
              <div class="col-md-4">
                <button type="submit" class="btn btn-outline-success">
                  ปรับปรุง <i class="bi bi-check2-circle"></i></button>
                <button type="reset" class="btn btn-outline-danger">
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