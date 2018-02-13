<?php
include 'dbconnect.php';
include 'sessions.php';

$schoolYearSemester = $_POST['schoolyear-semester'];
echo $schoolYearSemester;

$sql = "INSERT INTO school_yeara_sem_list  (school_year_sem) VALUES ('$schoolYearSemester');";
if ($conn->query($sql)===TRUE) {
  # code...
  header("location:admin-management.php");

}else {
  echo "Error: " .$conn->error;
}
?>
