 <?php
include 'dbconnect.php';
include 'sessions.php';
include 'functions.php';

$studentNumber = $_POST['student-number'];
$firstname =$_POST['firstname'];
$lastname = $_POST['last_name'];
$middlename = $_POST['middlename'];
$schoolraw = $_POST['school'];
$school = htmlspecialchars($schoolraw, ENT_QUOTES);
$course = $_POST['course'];
$yearlevel = $_POST['year-level'];
$municipality = $_POST['municipality'];
$status = "New";
$provider = $_SESSION['provider'];
$schoolyearsem = $_REQUEST['sysid'];
$requirements_status = $_POST['requirements_status'];


echo $studentNumber;
echo $firstname;
echo $lastname;
echo $middlename;
echo $school;
echo $course;
echo $yearlevel;
echo $municipality;
echo $status;

$searchql = "SELECT * FROM student_list_scholars WHERE student_number LIKE '$studentNumber' AND scholar_provider = '$provider' AND school_year_sem = '$schoolyearsem'";
$result = $conn->query($searchql);

if ($result->num_rows>0) {
    // output data of each row
   /* */
      while($row = $result->fetch_assoc()) {
      	if ($row['scholar_provider']==$provider) {
      		# code...
      		$_SESSION['error'] = 'Student Already been Inserted';
          $provider = $_SESSION['provider'];
           $location = 'location:admin-scholar.php?q='.$provider.'&sys='.$schoolyearsem;
           header($location);
      	}
        else
      	{
      		$sql = "INSERT INTO student_list_scholars (student_number, first_name, last_name,middle_name,school,course,year_level,municipality,status,scholar_provider,requirements_status,school_year_sem)
			    VALUES ('$studentNumber','$firstname','$lastname','$middlename','$school','$course','$yearlevel','$municipality','$status','$provider','$requirements_status',$schoolyearsem)";

    			if ($conn->query($sql) === TRUE) {
    			     $_SESSION['error'] = '';
               $provider = $_SESSION['provider'];
                $location = 'location:admin-scholar.php?q='.$provider.'&sys='.$schoolyearsem;
                header($location);
    			} else {
    			     $_SESSION['error'] = "Error: " . $sql . "<br>" . $conn->error;;
    			}
		}
   }
}
elseif ($result->num_rows==0) {
	# code...
  if ($row['scholar_provider']==$provider) {
    # code...
    $_SESSION['error'] = 'Student Already been Inserted';
  }else {
    # code...
    $sql = "INSERT INTO student_list_scholars (student_number, first_name, last_name,middle_name,school,course,year_level,municipality,status,scholar_provider,requirements_status,school_year_sem )
    VALUES ('$studentNumber', '$firstname', '$lastname','$middlename','$school','$course','$yearlevel','$municipality','$status','$provider','$requirements_status','$schoolyearsem')";

    if ($conn->query($sql) === TRUE) {
         $_SESSION['error'] = '';
         $provider = $_SESSION['provider'];

         $user =   $_SESSION['login_user'];
         $timestamp = getTimeStamp();
         $header = "$user Inserted ".$firstname." ".$lastname;
         $details = "Student Number: $studentNumber First Name: $firstname Last Name: $lastname School: $school Course: $course Year Level: $yearlevel Municipality: $municipality Status: $status Scholarsip Provider: $provider requirement Status: $requirements_status";
         $insertLog = "INSERT into history_logs (timestamp,header,details) VALUES ('$timestamp','$header','$details')";

         if ($conn->query($insertLog)===TRUE) {
           # code...
           $location = 'location:admin-scholar.php?q='.$provider.'&sys='.$schoolyearsem;
           header($location);
         }
        else {
           echo "Error updating record: " . $conn->error;
            $_SESSION['error'] = 'successfully';
        }



    } else {
         $_SESSION['error'] = "Error: " . $sql . "<br>" . $conn->error;;
    }
  }

}
?>
