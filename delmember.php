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
    $recive_id = $_GET['get_id'];
    $delsql = "delete from tbl_65309010001 where id=$recive_id";
    $objQuery = mysqli_query($connetion, $delsql);

    if ($objQuery) {
        echo "
    <script>
    Swal.fire({
        icon: 'success',
        title: '<h3>ลบข้อมูลสำเร็จ</h3>',
        type: 'success',
        showConfirmButton: false,
        timer: 2000
    }).then(function() {
        window.location = 'memberlits.php';
    });
    </script>
    ";
    } else {
        echo "ลบไม่สำเร็จ";
    }
    ?>
</body>

</html>