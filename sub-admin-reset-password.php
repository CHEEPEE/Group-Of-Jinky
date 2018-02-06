<?php
include 'dbconnect.php';
include 'sessions.php';

$userid = $_REQUEST['q'];
$defaultpassword = md5("defaultpassword");
$sql = "UPDATE users SET password = '$defaultpassword' WHERE id=$userid";
if ($conn->query($sql)) {
  # code...
  header("location:admin-management.php");

}else {
   echo "Error updating record: " . $conn->error;
}

?>
