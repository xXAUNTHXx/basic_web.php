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
    ob_start();
    session_start();
    include("config.inc.php");
    $text_username = $_POST['text_username'];
    $text_password = $_POST['text_password'];

    //echo $text_username;
    //echo "<br>";
    //echo $text_password;

    $sql = "SELECT * FROM tbl_65309010001 WHERE username='$text_username' && password='$text_password'";
    $objQusery = mysqli_query($connetion, $sql);
    $objResult = mysqli_fetch_array($objQusery);
    if ($objResult) {
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: '<h3>ล็อคอินสำเร็จ</h3>',
            type: 'success',
            showConfirmButton: false,
            timer: 2000
        }).then(function() {
            window.location = 'index.php';
        });
            </script>";
        $_SESSION["name"] = $objResult['name'];
        $_SESSION["lastname"] = $objResult['lastname'];
        $_SESSION["status"] = $objResult['status'];
    } else {
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: '<h3>ล็อคอินไม่สำเร็จ</h3>',
            type: 'error',
            showConfirmButton: false,
            timer: 2000
        }).then(function() {
            window.location = 'login.php';
        });
            </script>";
    }
    ?>
</body>

</html>