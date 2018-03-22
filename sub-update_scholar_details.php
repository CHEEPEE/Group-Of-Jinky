<?php
include 'dbconnect.php';
include 'sessions.php';
include 'functions.php';

$firstname =$_POST['firstname'];
$lastname = $_POST['last_name'];
$middlename = $_POST['middlename'];
$schoolraw = $_POST['school'];
$school =  htmlspecialchars($schoolraw, ENT_QUOTES);
$course = $_POST['course'];
$yearlevel = $_POST['year-level'];
$municipality = $_POST['municipality'];
$status = $_POST['status'];
$sysid = $_REQUEST['sys'];
$requirements_status = $_POST['requirements_status'];
$id =  $_SESSION['update_studentn_number'];
$provider = $_POST['provider'];
$phone_number = $_POST['phone_number'];
$provider_session = $_SESSION['provider'];

// echo $studentNumber;
// echo $firstname;
// echo $lastname;
// echo $middlename;
// echo $school;
// echo $course;
// echo $yearlevel;
// echo $municipality;
// echo $status;
echo $provider;


 $sql = "UPDATE student_list_scholars SET student_number = '$id',first_name='$firstname',last_name='$lastname',middle_name = '$middlename',school='$school',course='$course',year_level='$yearlevel',municipality = '$municipality',status = '$status', scholar_provider = '$provider',requirements_status = '$requirements_status', phone_number = '$phone_number' WHERE student_number = '$id' AND scholar_provider = '$provider_session'";
if ($conn->query($sql) === TRUE) {
 $_SESSION['update_studentn_number'] = "";
 $_SESSION['error'] = 'Updated successfully';

 $user =   $_SESSION['login_user'];
 $timestamp = getTimeStamp();
 $header = "$user Updated ".$firstname." ".$lastname;
 $details = "Student Number: $studentNumber First Name: $firstname Last Name: $lastname School: $school Course: $course Year Level: $yearlevel Municipality: $municipality Status: $status Scholarsip Provider: $provider requirement Status: $requirements_status";
 $insertLog = "INSERT into history_logs (timestamp,header,details) VALUES ('$timestamp','$header','$details')";
 if ($conn->query($insertLog)===TRUE) {
   # code...
   header("location:sub-admin-scholar.php?q=$provider_session&sys=$sysid");
 }

} else {
   echo "Error updating record: " . $conn->error;
    $_SESSION['error'] = 'successfully';
}



?>
