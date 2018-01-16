<?php 
include 'sessions.php';

$student_number = $_REQUEST["q"];
$provider = $_SESSION['provider'];
include 'dbconnect.php';

$sql = "DELETE FROM student_list_scholars WHERE student_number = '$student_number' AND scholar_provider = '$provider' ;";

if ($conn->query($sql) === TRUE) {
	$_SESSION['error'] = "Deleted Succesfully";
   if ($provider == "Loren Legarda") {		
   	
		header("location:admin-scholar-loren-legarda.php");
	}else{
		header("location:admin-scholar-cadiao.php");
	}
} else {
    echo "Error deleting record: " . $conn->error;
}

?>
