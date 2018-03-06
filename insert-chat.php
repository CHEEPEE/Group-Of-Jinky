<?php
include 'sessions.php';
include 'functions.php';
$connect = mysqli_connect("localhost", "root", "", "jinky");
if(isset($_POST["message"]))
{
 $admin_id =$_SESSION['user_id'];
 $student_id = $_SESSION['id'];
 $timestamp = getTimeStamp();
 $message =  mysqli_real_escape_string($connect, $_POST["message"]);
 $query = "INSERT INTO chat_messeges (chat_admin_id, chat_student_id, message, chat_time,user_id) VALUES('$admin_id', '$student_id','$message','$timestamp','$student_id')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
}else {
echo "Error: " .$connect->error;
}
}

?>
