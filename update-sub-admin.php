<?php
include 'dbconnect.php';
include 'sessions.php';

$username = $_POST['update-username'];
$schoolhandle = $_POST['school_handled'];
$admninid = $_REQUEST['q'];

echo $username.$schoolhandle;
$sql = "UPDATE users SET username = '$username',user_id = '$username',school_handled='$schoolhandle' WHERE id =$admninid";
if ($conn->query($sql)===TRUE) {
  # code...
  header("location:admin-management.php");

}else {
  # code...
    echo "Error updating record: " . $conn->error;
}


?>
