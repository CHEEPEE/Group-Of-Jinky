<?php
include 'dbconnect.php';
include 'sessions.php';

$school_name =  htmlspecialchars($_POST['edit-school-name'], ENT_QUOTES);

$school_id = $_REQUEST['q'];

echo $school_name.$school_id;

$sql = "UPDATE school_list SET school_list = '$school_name' WHERE id = $school_id;";
if ($conn->query($sql)===TRUE) {

  # code..
  header("location:admin-management.php");

}else {
    echo "Error updating record: " . $conn->error;
}

 ?>
