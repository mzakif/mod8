<?php
  include 'config.php';
  /* Insert Your Query to Edit and Delete User*/
  function edt($conn){
    $id = $_POST['id'];
    $name = $_POST['nama'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $q = "UPDATE participants SET name = '$name', gender = '$gender', email = '$email' WHERE id_users = $id";
    mysqli_query($conn, $q);
  }
  function del($conn){
    $id = $_POST['id'];
    $q = "DELETE FROM users WHERE id_users = '$id'";
    mysqli_query($conn, $q);
  }
  if (isset($_POST['delete'])) {
    del($conn); 
    header('Location: index.php');
  } else if (isset($_POST['edit'])) {
    edt($conn); 
    header('Location: index.php');
  }
?>