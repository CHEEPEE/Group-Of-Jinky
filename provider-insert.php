<?php
include 'dbconnect.php';
include 'sessions.php';
$provider = $_POST['provider-name'];


$sql = "INSERT INTO scholar_provider (provider_name) VALUES ('$provider');";

if ($conn->query($sql) === TRUE) {
 header("location:scholar-providers.php");
}else {
  echo "Error: " .$conn->error;
}
?>
