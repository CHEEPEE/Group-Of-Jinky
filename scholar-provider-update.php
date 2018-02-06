<?php
include 'dbconnect.php';
include 'sessions.php';

$provider_name = $_POST['provider-name'];
$provider_id = $_REQUEST["q"];

echo $provider_name;

$sql = "UPDATE scholar_provider SET provider_name = '$provider_name' WHERE provider_id = $provider_id";
if ($conn->query($sql) ===TRUE) {
  # code...
  header("location:scholar-providers.php");
}else {
  # code...
     echo "Error updating record: " . $conn->error;
}

?>
