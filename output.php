<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    include("config.inc.php");

    $f_name = $_POST['first_name'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $sex = $_POST['sex'];
    $date = $_POST['date_birthdate'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $email = $_POST['gmail'];

    $sql = "INSERT INTO tbl_65309010001 (id,firsname,name,lastname,sex,birthday,address,number,gmail) 
    VALUES ('', '$f_name','$name','$last_name','$sex','$date','$address','$number','$email')";

    /*
    $sql = "INSERT INTO tbl_number (id, name) VALUES ('', '$name')";
    $sql = "INSERT INTO tbl_number (id, lastname) VALUES ('', '$last_name')";
    $sql = "INSERT INTO tbl_number (id, sex) VALUES ('', '$sex')";
    $sql = "INSERT INTO tbl_number (id, birthday) VALUES ('', '$date')";
    $sql = "INSERT INTO tbl_number (id, address) VALUES ('', '$address')";
    $sql = "INSERT INTO tbl_number (id, number) VALUES ('', '$number')";
    $sql = "INSERT INTO tbl_number (id, gmail) VALUES ('', '$email')";
    */

    if (mysqli_query($connetion, $sql)) {
        echo " <script>
    Swal.fire({
        icon: 'success',
        title: '<h3>ระบบทำการบันทึกข้อมูลสำเร็จ</h3>',
        type: 'success',
        showConfirmButton: false,
        timer: 2000
    }).then(function() {
        window.location = 'index.php';
    });
        </script>";
    } else {
        echo "เพิ่มข้อมูลไม่สำเร็จ";
    }
    $connetion->close();

    /*
    echo $f_name;
    echo $name;
    echo "\n";
    echo $last_name;
    echo "<br>";
    echo "เพศ :";
    echo "\n";
    echo $sex;
    echo "\n";
    echo "เกิดวันที่ :";
    echo "\n";
    echo $date;
    echo "<br>";
    echo "ที่อยู่ :";
    echo "\n";
    echo $address;
    echo "<br>";
    echo "เบอร์โทร :";
    echo "\n";
    echo $number;
    echo "\n";
    echo "อีเมล์ :";
    echo "\n";
    echo $gmail;
    echo "\n";
    */
    ?>
</body>

</html>