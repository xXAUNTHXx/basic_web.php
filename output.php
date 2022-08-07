<?php

    $f_name = $_POST['first_name'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $sex = $_POST['sex'];
    $date = $_POST['date_birthdate'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $email = $_POST['gmail'];
    

   
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
    echo $email;
    echo "\n";

?>
