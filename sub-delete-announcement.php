<?php
include 'sessions.php';

$id = $_REQUEST["q"];
include 'dbconnect.php';

$sql = "DELETE FROM announcements WHERE id = '$id' ;";

if ($conn->query($sql) === TRUE) {
	$_SESSION['error'] = "Deleted Succesfully";
   header("location:sub-announcements.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

?>
