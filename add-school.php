<?php
include 'dbconnect.php';
include 'sessions.php';

$school = htmlspecialchars($_POST['school-name'], ENT_QUOTES);
echo $school;

$sql = "INSERT INTO school_list (school_list) VALUES ('$school')";
if ($conn->query($sql)===TRUE) {
  header("location:admin-management.php");
  # code...
}else {
   echo "Error updating record: " . $conn->error;
};
?>
