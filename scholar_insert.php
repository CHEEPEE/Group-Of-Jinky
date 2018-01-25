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
      		if ($provider == "Loren Legarda") {
      			# code...
      			header("location:admin-scholar-loren-legarda.php");
      		}else{
      			header("location:admin-scholar-cadiao.php");
      		}
      	}else
      	{
      		$sql = "INSERT INTO student_list_scholars (student_number, first_name, last_name,middle_name,school,course,year_level,municipality,status,scholar_provider,requirements_status)
			VALUES ('$studentNumber','$firstname','$lastname','$middlename','$school','$course','$yearlevel','$municipality','$status','$provider','incomplete')";

			if ($conn->query($sql) === TRUE) {
			     $_SESSION['error'] = '';
		     	if ($provider == "Loren Legarda") {
      			header("location:admin-scholar-loren-legarda.php");
      		}else{
      			header("location:admin-scholar-cadiao.php");
      		}
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
	   $sql = "INSERT INTO student_list_scholars (student_number, first_name, last_name,middle_name,school,course,year_level,municipality,status,scholar_provider,requirements_status)
	VALUES ('$studentNumber', '$firstname', '$lastname','$middlename','$school','$course','$yearlevel','$municipality','$status','$provider','incomplete')";

	if ($conn->query($sql) === TRUE) {
	     $_SESSION['error'] = '';
       $provider = $_SESSION['provider'];
     		$location = 'location:admin-scholar.php?q='.$provider;
        header($location);
	} else {
	     $_SESSION['error'] = "Error: " . $sql . "<br>" . $conn->error;;

	}
}
?>
