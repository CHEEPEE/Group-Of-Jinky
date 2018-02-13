<!DOCTYPE html>
<html class="fullheight">
<head>
	<?php


	include 'styles.php';
	include 'sessions.php';


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
  $provider_session = $_SESSION['provider'];
	$req_stat = "";
	$sysid = $_REQUEST['sys'];


	include 'dbconnect.php';
	$searchql = "SELECT * FROM student_list_scholars WHERE student_number = '$student_number' AND scholar_provider ='$provider_session'";
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
	<?php include 'navbar.php';

	?>


	 <div class="row fullheight  main-content">

	 	<?php include 'sidenav.php';?>
    <div class="col s12 fullheight ">
    	<div class="row">
    		 <nav class="listcontainer">
			    <div class="nav-wrapper blue darken-2">
			      <div class="col s12">
			        <a href="#!" class="breadcrumb">Scholar</a>
			        <a href="#!" class="breadcrumb"><?php
			       echo $_SESSION['provider'];
			        ?></a>

			      </div>
			    </div>
			  </nav>
    	</div>

	    	<div class="card listcontainer">

	    				<div class="red-text"><?php  echo $_SESSION['error'];?></div>

		    	<div class="card-action">
 					<h5>Edit Scholar Details</h5>
				      <div class="card-action">
				      	<div class="row">
				      		 <form class="col s12" method="post" action="update_scholar_details.php?=<?php echo $provider_session;?>&sys=<?php echo $sysid?>">
						      <div class="row">
						      	<div class="input-field col s2">
						          <input id="student-number" disabled name="student-number" type="text" class="validate" value="<?php echo $student_number;?>">
						          <label for="student-number">Student Number</label>
						        </div>
						         <div class="input-field col s4">
						          <input id="firstname" name="firstname" type="text" class="validate" value="<?php echo$firstname;?>">
						          <label for="firstname">First Name</label>
						        </div>
						        <div class="input-field col s4">
						          <input id="last_name" name="last_name" type="text" class="validate" value="<?php echo$lastname;?>">
						          <label for="last_name">Last Name</label>
						        </div>
						         <div class="input-field col s2">
						          <input id="middle_name" name="middlename" type="text" class="validate" value="<?php echo$middlename;?>">
						          <label for="middle_name">Middle Name</label>
						        </div>
						      </div>
						      <div class="row">
						      	<!-- <div class="input-field col s3">
						          <input id="school" name="school" type="text" class="validate" value="<?php echo $school;?>">
						          <label for="school">School</label>
						        </div> -->
										<div class="input-field col s4">
											<select name="school">
												<?php
												$sqlgetProvider = "SELECT * FROM school_list;";
												$provider_result = $conn->query($sqlgetProvider);
													if ($provider_result->num_rows>0) {
														# code...
														while ($row = $provider_result->fetch_assoc()) {
															# code...
															$value = $row['school_list'];
															$id_value = $row['id'];
														if ($school==$row['school_list']) {
															# code...
															 echo "<option id='defaultprovider' value='$value' selected>$value</option>";
														}else {
															# code...
															echo "<option id='defaultprovider' value='$value'>$value</option>";
														}


														}
													}
												?>


									 </select>
									 <label>School</label>
									 </div>
						        <div class="input-field col s3">
						          <input id="course" name="course" type="text" class="validate" value="<?php echo $course;?>">
						          <label for="course">Course</label>
						        </div>
						        <div class="input-field col s2">
						          <input id="year" name="year-level" type="text" class="validate" value="<?php echo $yearlevel;?>">
						          <label for="year">Year Level</label>
						        </div>
						        <div class="input-field col s2">
						          <input id="municipality" name="municipality" type="text" class="validate" value="<?php echo $municipality;?>">
						          <label for="municipality">Municipality</label>
						        </div>
						        <div class="input-field col s2">
						          <input id="status" name="status" type="text" class="validate" value="<?php echo $status;?>">
						          <label for="status">Status</label>
						        </div>
						         <div class="input-field col s2">
						           <select name="provider">
												 <?php
												 $sqlgetProvider = "SELECT * FROM scholar_provider;";
												 $provider_result = $conn->query($sqlgetProvider);
													 if ($provider_result->num_rows>0) {
														 # code...
														 while ($row = $provider_result->fetch_assoc()) {
															 # code...
															 $value = $row['provider_name'];
															 $id_value = $row['provider_id'];
															if ($row['provider_id'] == $_SESSION['provider']) {
																# code...
																echo "<option id='defaultprovider' value='$id_value' selected>$value</option>";
															}else {
																# code...
																echo "<option id='defaultprovider' value='$id_value'>$value</option>";
															}
														 }
													 }
												 ?>


								    </select>
								    <label>Scholarship Provider</label>
						        </div>
						        <div class="input-field col s2">
						           <select name="requirements_status">
								      <option id="requirements_status_1" value="<?php echo $req_stat;?>" selected><?php echo $req_stat;?></option>
								     	<option id="requirements_status_2" value=""></option>

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
				var getprovider1 = document.getElementById("requirements_status_1").innerHTML;
				if (getprovider1 == "Complete") {
					document.getElementById("requirements_status_2").innerHTML = "Incomplete";
					document.getElementById("requirements_status_2").value = "Incomplete";

				}else{
					document.getElementById("requirements_status_2").innerHTML = "Complete";
					document.getElementById("requirements_status_2").value = "Complete";
				}
			}
			selectOptions();



     </script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
<!-- <i class="teal-text text-lighten-2 material-icons prefix announcement icon"> -->
</body>
</html>
