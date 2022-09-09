<?php

ob_start();
session_start();

?>l
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memberlits</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <?php

    include("header.php");
    include("config.inc.php");

    $SQL = "select * from tbl_65309010001";
    $objQuery = mysqli_query($connetion, $SQL);

    ?>
    <main class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Name</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Sex</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gmail</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $objResult['id']; ?></th>
                        <td><?php echo $objResult['firsname']; ?></td>
                        <td><?php echo $objResult['name']; ?></td>
                        <td><?php echo $objResult['lastname']; ?></td>
                        <td><?php echo $objResult['sex']; ?></td>
                        <td><?php echo $objResult['birthday']; ?></td>
                        <td><?php echo $objResult['address']; ?></td>
                        <td><?php echo $objResult['number']; ?></td>
                        <td><?php echo $objResult['gmail']; ?></td>

                        <?php
                        if (!isset($_POST["username"]) && $_SESSION['status'] == "admin") {
                        ?>
                        <td>
                                <a href="editfrom.php?get_id=<?php echo $objResult['id']; ?>" class="btn btn-outline-warning">แก้ไข<i class="bi bi-pencil-square"></i></a>
                            </td>
                            <td>
                                <a href="delmember.php?get_id=<?php echo $objResult['id']; ?>" class="btn btn-outline-danger">ลบ<i class="bi bi-trash3"></i></a>
                            </td>
                        <?php
                        }
                        ?>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </main>
    <?php
    include("footer.php")
    ?>
</body>

</html>