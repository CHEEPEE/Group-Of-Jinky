<?php
include 'dbconnect.php';
include 'sessions.php';

$id =  $_REQUEST["q"];

$sql  = "DELETE FROM scholar_provider WHERE provider_id = $id";

if ($conn->query($sql) === TRUE) {
  header("location:scholar-providers.php");
  # code...
}
else {
  echo "Error updating record: " . $conn->error;
}
?>
