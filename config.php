<?php
  //config your database
  $host_1301160186 = "localhost";
  $user_1301160186 = "root";
  $password_1301160186 = "";
  $db_1301160186 = "db_1301160186";
  $conn = mysqli_connect($host_1301160186, $user_1301160186, $password_1301160186, $db_1301160186);

  if (mysqli_connect_errno()){
    die ("Disconnect. " . mysqli_connect_error());
  } 
?>