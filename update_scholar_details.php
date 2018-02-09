<?php
include 'dbconnect.php';
include 'sessions.php';

$firstname =$_POST['firstname'];
$lastname = $_POST['last_name'];
$middlename = $_POST['middlename'];
$schoolraw = $_POST['school'];
$school =  htmlspecialchars($schoolraw, ENT_QUOTES);
$course = $_POST['course'];
$yearlevel = $_POST['year-level'];
$municipality = $_POST['municipality'];
$status = $_POST['status'];
$requirements_status = $_POST['requirements_status'];

$id =  $_SESSION['update_studentn_number'];
$provider = $_POST['provider'];

$provider_session = $_SESSION['provider'];

// echo $studentNumber;
// echo $firstname;
// echo $lastname;
// echo $middlename;
// echo $school;
// echo $course;
// echo $yearlevel;
// echo $municipality;
// echo $status;
echo $provider;


 $sql = "UPDATE student_list_scholars SET student_number = '$id',first_name='$firstname',last_name='$lastname',middle_name = '$middlename',school='$school',course='$course',year_level='$yearlevel',municipality = '$municipality',status = '$status', scholar_provider = '$provider',requirements_status = '$requirements_status' WHERE student_number = '$id' AND scholar_provider = '$provider_session'";
if ($conn->query($sql) === TRUE) {
 $_SESSION['update_studentn_number'] = "";
 $_SESSION['error'] = 'Updated successfully';
 header("location:admin-scholar.php?q=");

} else {
   echo "Error updating record: " . $conn->error;
    $_SESSION['error'] = 'successfully';
}



?>

<!--  <ul class="collapsible">
   <li>
     <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
     <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
   </li>
   <li>
     <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
     <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
   </li>
   <li>
     <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
     <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
   </li>
 </ul> -->
