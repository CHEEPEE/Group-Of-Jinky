<?php
include 'dbconnect.php';
include 'sessions.php';


$userId = $_REQUEST['q'];
$currentPassword = $_POST['current_password'];
$new_password = $_POST['new_password'];
$new_password = md5($new_password);
$currentPassword = md5($currentPassword);




$sql = "SELECT * FROM users WHERE id = $userId AND password ='$currentPassword'";
$result = $conn->query($sql);
if ($result->num_rows>0) {
  $insertSql = "UPDATE users SET password = '$new_password' WHERE id =$userId";
  # code...
  if ($conn->query($insertSql) === TRUE) {
  // header("location:student-manage-account.php");
  }else {
    echo "Error: " .$conn->error;
  }


}else {
  # code...
  $_SESSION['change_pass_error'] = "wrong Password";
  //header("location:student-manage-account.php");


}

 ?>
