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
        $id = $_POST['text_id'];

        $f_name = $_POST['first_name'];
        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
        $sex = $_POST['sex'];
        $date = $_POST['date_birthdate'];
        $address = $_POST['address'];
        $number = $_POST['number'];
        $email = $_POST['gmail'];
        
        //echo $texe_id;
        $sql = "UPDATE tbl_65309010001 SET firsname='$f_name', name='$name',lastname='$last_name',sex='$sex',birthday='$date',address='$address',number='$number',gmail='$email' WHERE id='$id'";

        if(mysqli_query($connetion, $sql)) {
            echo " <script>
        Swal.fire({
            icon: 'success',
            title: '<h3>อัพเดทข้อมูลสำเร็จ</h3>',
            type: 'success',
            showConfirmButton: false,
            timer: 2000
        }).then(function() {
            window.location = 'memberlits.php';
        });
            </script>";
        } else {
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: '<h3>อัพเดทข้อมูลไม่สำเร็จ</h3>',
                type: 'success',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location = 'memberlits.php';
            });
                </script>";
        }
    ?>
</body>
</html>