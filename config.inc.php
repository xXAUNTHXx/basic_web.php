<?php
    $servername = "localhost";
    $username = "admin_db_member";
    $password = "123456";
    $dbname = "db_member65";

    $connetion = new mysqli($servername, $username, $password, $dbname);

    $connetion -> set_charset("utf8");


    /*
if ($connetion->connect_error) {
    die("Connection failed: " . $connetion->connect_error);
  }
  else{
  echo "Connnect Successfully!";
  }
   */
?>