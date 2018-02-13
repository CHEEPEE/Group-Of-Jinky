<?php
include 'dbconnect.php';
include 'sessions.php';

$id  = $_REQUEST['q'];

$sql = "DELETE FROM school_yeara_sem_list WHERE id = $id";
if ($conn->query($sql)===TRUE) {
  header("location:admin-management.php");
  # code...
}else {
  echo "Error". $conn->error;
}
?>
