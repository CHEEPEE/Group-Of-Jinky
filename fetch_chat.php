<?php

include 'sessions.php';
include 'dbconnect.php';

$admin_id =$_SESSION['user_id'];
$student_id = $_SESSION['id'];

$sql = "SELECT * FROM chat_messeges WHERE chat_admin_id = $admin_id AND chat_student_id = $student_id";
$result = $conn->query($sql);
$arrayData = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $arrayData[] = $row;
    }
} else {
    echo "0 results";
}

echo json_encode($arrayData);

 ?>
