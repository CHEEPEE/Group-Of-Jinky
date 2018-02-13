<?php
include 'dbconnect.php';
include 'sessions.php';
$id = $_REQUEST['q'];
$school_year_sem = $_POST['yearsem'];
$sql = "UPDATE school_yeara_sem_list SET school_year_sem ='$school_year_sem' WHERE id=$id ";
if ($conn->query($sql)) {
  # code...
  header("location:admin-management.php");

}else {

echo "Errror" . $conn->error;
}

 ?>
