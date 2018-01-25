<?php
include 'sessions.php';

$student_number = $_REQUEST["q"];
$provider = $_SESSION['provider'];
include 'dbconnect.php';

$sql = "DELETE FROM student_list_scholars WHERE student_number = '$student_number' AND scholar_provider = '$provider' ;";

if ($conn->query($sql) === TRUE) {
	$_SESSION['error'] = "Deleted Succesfully";
	$provider = $_SESSION['provider'];
	 $location = 'location:admin-scholar.php?q='.$provider;
	 header($location);
} else {
    echo "Error deleting record: " . $conn->error;
}

?>
