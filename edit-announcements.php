<!DOCTYPE html>
<html class="fullheight">
<head>
	<?php


	include 'styles.php';
	include 'sessions.php';


	  $student_number ="";
	  $id = $_REQUEST["q"];
		$annoucnements_title = "";
		$announcements_subject = "";
		$announcements_body = "";


	include 'dbconnect.php';
	$searchql = "SELECT * FROM announcements WHERE id = '$id'";
	$result = $conn->query($searchql);
	if ($result->num_rows > 0) {
    // output data of each row
	    while($row = $result->fetch_assoc()) {


				 $annoucnements_title = $row['title'];
				 $announcements_subject = $row['subject'];
				 $announcements_body = $row['message'];
				 $_SESSION['announcement_id'] = $id;
	    }
	} else {
	    echo "0 results";
	}


 ?>
	<title></title>
</head>


<body class="grey lighten-4 fullheight">
	<!-- Dropdown Structure -->
	<?php include 'navbar.php';

	?>


	 <div class="row fullheight main-content">

	 	<?php include 'sidenav.php';?>
    <div class="col s12 fullheight main-content">
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
				      		 <form class="col s12" method="post" action="update-announcements.php">
										 <div class="row">
												 <div class="col s6">
													 <div class="card">
														 <div class="announcement-card">
															 <div class="input-field">
																 <input id="title" type="text" name="announcement_title" class="validate" value="<?php echo $annoucnements_title?>">
																 <label for="title">Title</label>
															 </div>
														 </div>
													 </div>
												 </div>
												 <div class="col s6">
													 <div class="card">
														 <div class="announcement-card">
															 <div class="input-field">
																 <input id="subject" type="text" name="announcement_subject" class="validate" value="<?php echo $announcements_subject;  ?>">
																 <label for="subject">Subject</label>
															 </div>
														 </div>
													 </div>
												 </div>
												 <div class="col s12">
													 <div class="card">
														 <div class="announcement-card">
															 <div class="input-field">
																 <textarea id="textarea1" name="announcement_body" class="materialize-textarea"><?php echo $announcements_body;?></textarea>
																 <label for="textarea1">Announcement</label>
															 </div>
														 <input type="submit" class="btn blue lighten-2" value="Update Announcement">
														 </div>
													 </div>
												 </div>
										 </div>
								   </form>
						    </div>
						  </div>
		     </div>
	   	</div>
    </div>


     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

     <script type="text/javascript">
			function selectOptions(){
				var getprovider = document.getElementById("defaultprovider").innerHTML;

				if (getprovider == "Loren Legarda") {
					document.getElementById("optionprovider").innerHTML = "Rhodora Cadiao";
					document.getElementById("optionprovider").value = "Rhodora Cadiao";

				}else{
					document.getElementById("optionprovider").innerHTML = "Loren Legarda";
					document.getElementById("optionprovider").value = "Loren Legarda";
				}
			}
			selectOptions();

     </script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
<!-- <i class="teal-text text-lighten-2 material-icons prefix announcement icon"> -->
</body>
</html>
