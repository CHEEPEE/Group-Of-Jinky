<?php
include 'sessions.php';

$id = $_REQUEST["q"];
include 'dbconnect.php';

$sql = "DELETE FROM files WHERE file_id = '$id' ;";

if ($conn->query($sql) === TRUE) {
	$_SESSION['error'] = "Deleted Succesfully";
   header("location:files-management.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

?>
