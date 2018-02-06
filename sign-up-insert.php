<?php
include 'dbconnect.php';
$username =$_REQUEST['q'];
$password = $_POST['password'];

$hashedPassword = md5($password);
$sql = "INSERT INTO users (user_id,username, password,role)
VALUES ('$username', '$username', '$hashedPassword','student')";

if ($conn->query($sql) === TRUE) {
    header("location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
