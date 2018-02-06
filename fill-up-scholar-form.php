<!DOCTYPE html>
<html class="fullheight">
<head>
	<?php


	include 'styles.php';

	  $student_number ="";
	  $student_number = $_REQUEST["q"];
	  $firstname="";
	  $lastname = "";
	  $middlename = "";
	  $schoolraw = "";

	  $course = "";
	  $yearlevel = "";
	  $municipality = "";
	  $status = "";
	  $scolar_provider = "";
	  $_SESSION['update_studentn_number'] = $student_number;

		$req_stat = "";


	include 'dbconnect.php';
	$searchql = "SELECT * FROM student_list_scholars WHERE student_number = '$student_number'";
	$result = $conn->query($searchql);
	if ($result->num_rows > 0) {
    // output data of each row
	    while($row = $result->fetch_assoc()) {
	       /* echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";*/

	       $firstname = $row['first_name'];
	       $lastname =$row['last_name'];
	       $middlename = $row['middle_name'];
	       $schoolraw  =str_replace("&#039;", '\'', $row['school']);
	       $course = $row['course'];
	       $yearlevel = $row['year_level'];
	       $municipality = $row['municipality'];
	       $scolar_provider = $row['scholar_provider'];
				 $status = $row['status'];
				 $req_stat = $row['requirements_status'];
	    }
	}
	$school =htmlspecialchars($schoolraw, ENT_QUOTES);

 ?>
	<title></title>
</head>


<body class="grey lighten-4 fullheight">
	<!-- Dropdown Structure -->

	    	<div class="card listcontainer">

	    				<div class="red-text"></div>

		    	<div class="card-action">
 					<h5>Edit Scholar Details</h5>
				      <div class="card-action">
				      	<div class="row">
				      		 <form class="col s12" method="post" action="update_scholar_details.php">
						      <div class="row">
						      	<div class="input-field col s2">
						          <input id="student-number" disabled name="student-number" type="text" class="validate" value="<?php echo $student_number;?>">
						          <label for="student-number">Student Number</label>
						        </div>
						         <div class="input-field col s4">
						          <input id="firstname" name="firstname" type="text" class="validate" value="">
						          <label for="firstname">First Name</label>
						        </div>
						        <div class="input-field col s4">
						          <input id="last_name" name="last_name" type="text" class="validate" value="">
						          <label for="last_name">Last Name</label>
						        </div>
						         <div class="input-field col s2">
						          <input id="middle_name" name="middlename" type="text" class="validate" value="">
						          <label for="middle_name">Middle Name</label>
						        </div>
						      </div>
						      <div class="row">
						      	<div class="input-field col s3">
						          <input id="school" name="school" type="text" class="validate" value="">
						          <label for="school">School</label>
						        </div>
						        <div class="input-field col s3">
						          <input id="course" name="course" type="text" class="validate" value="">
						          <label for="course">Course</label>
						        </div>
						        <div class="input-field col s2">
						          <input id="year" name="year-level" type="text" class="validate" value="">
						          <label for="year">Year Level</label>
						        </div>
						        <div class="input-field col s2">
						          <input id="municipality" name="municipality" type="text" class="validate" value="">
						          <label for="municipality">Municipality</label>
						        </div>
						        <div class="input-field col s2">
						          <input id="status" name="status" type="text" class="validate" value="">
						          <label for="status">Status</label>
						        </div>
						         <div class="input-field col s2">
						           <select name="provider">
												 <?php
												 $sqlgetProvider = "SELECT * FROM scholar_provider;";
												 $provider_result = $conn->query($sqlgetProvider);
													 if ($provider_result->num_rows>0) {
                             	echo "<option id='defaultprovider' value='' selected>Scholarship Provider</option>";
														 while ($row = $provider_result->fetch_assoc()) {
																$value = $row['provider_name'];
																echo "<option id='defaultprovider' value='$id_value'>$value</option>";

														 }
													 }
												 ?>


								    </select>
								    <label>Scholarship Provider</label>
						        </div>
						        <div class="input-field col s2">
						           <select name="requirements_status">
								      <option id="defaultprovider1" value="<?php echo $req_stat;?>" selected><?php echo $req_stat;?></option>
								     	<option id="optionprovider1" value="Complete">Complete</option>

								    </select>
								    <label>Scholarship Provider</label>
						        </div>
						      </div>
						       <div class="modal-content">
						        <BUTTON class="waves-effect waves-light btn blue lighten-2" type="submit" name="save"><input type="submit" name="save" value="Save Changes"></BUTTON>

						       </div>
						    </form>
				      	</div>
				      </div>


				<div class="row">
					<div class="col s12">




					</div>


				</div>



		     </div>
	   	</div>
    </div>

     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

     <script type="text/javascript">
			function selectOptions(){
				var getprovider = document.getElementById("defaultprovider").innerHTML;
				var getprovider1 = document.getElementById("defaultprovider1").innerHTML;

				if (getprovider == "Loren Legarda") {
					document.getElementById("optionprovider").innerHTML = "Rhodora Cadiao";
					document.getElementById("optionprovider").value = "Rhodora Cadiao";

				}else{
					document.getElementById("optionprovider").innerHTML = "Loren Legarda";
					document.getElementById("optionprovider").value = "Loren Legarda";
				}
				if (getprovider1 == "Complete") {
					document.getElementById("optionprovider1").innerHTML = "Incomplete";
					document.getElementById("optionprovider1").value = "Incomplete";

				}else{
					document.getElementById("optionprovider1").innerHTML = "Complete";
					document.getElementById("optionprovider1").value = "Complete";
				}
			}


     </script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
<!-- <i class="teal-text text-lighten-2 material-icons prefix announcement icon"> -->
</body>
</html>
