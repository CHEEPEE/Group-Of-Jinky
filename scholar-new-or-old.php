<?php
include 'dbconnect.php';
$student_number = $_POST['student-number'];
$school = $_POST['school'];
$sql = "SELECT * from student_list_scholars WHERE student_number = '$student_number'";
$result = $conn->query($sql);
if ($result->num_rows >0) {
  # code...
  $getid = "SELECT * from users WHERE user_id = '$student_number'";
  $resultgetId = $conn->query($getid);
  if ($resultgetId->num_rows >0) {
    # code...
    header("location:index.php");

  }else {
    # code...
    header("location:sign-up.php?q=$student_number");
  }


}else {
  # code...
  header("location:404/demo1.html");
}


 ?>
