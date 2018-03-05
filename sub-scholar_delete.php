<?php
include 'sessions.php';


$student_number = $_REQUEST["q"];
$sysid = $_REQUEST['sys'];
$provider = $_SESSION['provider'];
include 'dbconnect.php';
include 'functions.php';
echo $student_number;
$studentName = getStudentName($student_number);


$sql = "DELETE FROM student_list_scholars WHERE student_number = '$student_number' AND scholar_provider = '$provider' ;";

if ($conn->query($sql) === TRUE) {
	$_SESSION['error'] = "Deleted Succesfully";
	$provider = $_SESSION['provider'];
	 $user =   $_SESSION['login_user'];
	 $timestamp = getTimeStamp();
	 $header = "$user Deleted ". $studentName;
	 $details = "$user Deleted Student Number: ".$student_number . "Student Name: $studentName";
	 $insertLog = "INSERT into history_logs (timestamp,header,details) VALUES ('$timestamp','$header','$details')";
	 if ($conn->query($insertLog)===TRUE) {
	   # code...
		 $location = 'location:sub-admin-scholar.php?q='.$provider.'&sys='.$sysid;
		 header($location);
	 }
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
