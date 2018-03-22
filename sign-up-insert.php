<?php
include 'dbconnect.php';
include 'functions.php';
$username =$_REQUEST['q'];
$password = $_POST['password'];
$school = htmlspecialchars($_POST['school'], ENT_QUOTES);
$student_name = getStudentName($username);
$hashedPassword = md5($password);
$sql = "INSERT INTO users (user_id,username, password,role,school,fullname)
VALUES ('$username', '$username', '$hashedPassword','student','$school','$student_name')";
if ($conn->query($sql) === TRUE) {
    header("location:login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




?>
