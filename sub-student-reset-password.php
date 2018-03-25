<?php
include 'dbconnect.php';
include 'sessions.php';
$q =   $_SESSION['provider'];
$sys = $_SESSION['sys'];
$studentnumber  = $_POST['student-number'];
$password  = md5($studentnumber);

$validateid = "SELECT * FROM users WHERE username = '$studentnumber'";
$result = $conn->query($validateid);
if ($result->num_rows>0) {

  $sql = "UPDATE users SET password='$password' WHERE username = '$studentnumber'";
  if ($conn->query($sql)) {

    # code...
     header("location:sub-admin-scholar.php?q=$q&sys=$sys");

  }else {
    # code...
    echo "Error updating record: " . $conn->error;
  }
  # code...
}else {
echo "Student doesnt Exist";
}
?>
