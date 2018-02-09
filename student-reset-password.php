<?php
include 'dbconnect.php';
include 'sessions.php';

$studentnumber  = $_POST['student-number'];
$password  = md5($studentnumber);

$validateid = "SELECT * FROM users WHERE username = '$studentnumber'";
$result = $conn->query($validateid);
if ($result->num_rows>0) {

  $sql = "UPDATE users SET password='$password' WHERE username = '$studentnumber'";
  if ($conn->query($sql)) {

    # code...
     header("location:admin-management.php");

  }else {
    # code...
    echo "Error updating record: " . $conn->error;
  }
  # code...
}else {
echo "Student doesnt Exist";
}

?>
