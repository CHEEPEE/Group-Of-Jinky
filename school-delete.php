<?php
include 'dbconnect.php';
include 'sessions.php';

$schoolid = $_REQUEST['q'];
echo $schoolid;

$sql = "DELETE FROM school_list WHERE id=$schoolid; ";
if ($conn->query($sql)===TRUE) {
  header("location:admin-management.php");
  # code...
}else {
  # code...
    echo "Error updating record: " . $conn->error;
}
?>
