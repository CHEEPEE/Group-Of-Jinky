 <?php
include 'dbconnect.php';
include 'sessions.php';

$studentNumber = $_POST['student-number'];
$firstname =$_POST['firstname'];
$lastname = $_POST['last_name'];
$middlename = $_POST['middlename'];
$schoolraw = $_POST['school'];
$school = htmlspecialchars($schoolraw, ENT_QUOTES);
$course = $_POST['course'];
$yearlevel = $_POST['year-level'];
$municipality = $_POST['municipality'];
$status = $_POST['status'];
$provider = $_SESSION['provider'];
$schoolyearsem = $_REQUEST['sysid'];

echo $studentNumber;
echo $firstname;
echo $lastname;
echo $middlename;
echo $school;
echo $course;
echo $yearlevel;
echo $municipality;
echo $status;

$searchql = "SELECT student_number,scholar_provider FROM student_list_scholars WHERE student_number LIKE '$studentNumber'";
$result = $conn->query($searchql);

if ($result->num_rows== 1) {
    // output data of each row
   /* */
      while($row = $result->fetch_assoc()) {
      	if ($row['scholar_provider']==$provider) {
      		# code...
      		$_SESSION['error'] = 'Student Already been Inserted';
      	}
        else
      	{
      		$sql = "INSERT INTO student_list_scholars (student_number, first_name, last_name,middle_name,school,course,year_level,municipality,status,scholar_provider,requirements_status,school_year_sem)
			VALUES ('$studentNumber','$firstname','$lastname','$middlename','$school','$course','$yearlevel','$municipality','$status','$provider','incomplete',$schoolyearsem)";

			if ($conn->query($sql) === TRUE) {
			     $_SESSION['error'] = '';
			} else {
			     $_SESSION['error'] = "Error: " . $sql . "<br>" . $conn->error;;
		     		if ($provider == "Loren Legarda") {
      				header("location:admin-scholar-loren-legarda.php");
		      		}else{
		      			header("location:admin-scholar-cadiao.php");
		      		}
			}
		}
   }


}elseif ($result->num_rows >=2) {
	$_SESSION['error'] = 'Student Already been Inserted';
	if ($provider == "Loren Legarda") {
		header("location:admin-scholar-loren-legarda.php");
	}else{
		header("location:admin-scholar-cadiao.php");
	}
} elseif ($result->num_rows ==0) {
	# code...
	   $sql = "INSERT INTO student_list_scholars (student_number, first_name, last_name,middle_name,school,course,year_level,municipality,status,scholar_provider,requirements_status,school_year_sem )
	VALUES ('$studentNumber', '$firstname', '$lastname','$middlename','$school','$course','$yearlevel','$municipality','$status','$provider','incomplete','$schoolyearsem')";

	if ($conn->query($sql) === TRUE) {
	     $_SESSION['error'] = '';
       $provider = $_SESSION['provider'];
     		$location = 'location:sub-admin-scholar.php?q='.$provider.'&sys='.$schoolyearsem;
        header($location);
	} else {
	     $_SESSION['error'] = "Error: " . $sql . "<br>" . $conn->error;;

	}
}
?>
