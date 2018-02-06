<?php
include 'dbconnect.php';
include 'sessions.php';

$schoolid = htmlspecialchars($_POST['school_handled'], ENT_QUOTES);
$password = md5($_POST['password']);
$username =htmlspecialchars($_POST['username'], ENT_QUOTES);

$sql = "INSERT INTO users (user_id,username,password,school_handled,role) VALUES ('$username','$username','$password','$schoolid','sub-admin')";
if ($conn->query($sql)) {
  header("location:admin-management.php");

  # code...
}else {
  echo "Error updating record: " . $conn->error;
}

?>
