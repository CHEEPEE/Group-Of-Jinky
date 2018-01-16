<!DOCTYPE html>
<html class="fullheight">
<head>

	<?php

	include'sessions.php';
	include 'styles.php';
	 ?>
	<title></title>
</head>


<body class="fullheight">
	<!-- Dropdown Structure -->
	<?php include 'navbar.php';

	?>

	 <div class="row fullheight">

     <?php include 'sidenav.php';?>
  <!--   <div class="col s10 fullheight">
    	<div class="row">
    		 <nav class="listcontainer blue darken-2">
			    <div class="nav-wrapper">
			      <div class="col s12">
			        <a href="#!" class="breadcrumb">Scholar</a>
			        <a href="#!" class="breadcrumb">Loren Legarda</a>
			      </div>
			    </div>
			  </nav>
    	</div> -->
    	
    	<div class="card listcontainer">
    				
    			
    		<!-- <h5 class="list-title-scholars">List of Scholars</h5>
	    	<div class="card-action">
	           <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Add Scholar</a> -->

			 <!--   Modal Structure -->
			  <div id="modal1" class="modal">
			    <div class="modal-content">
			      <h5>Add New Scholar</h5>
			      <div class="card-action">
			      	<div class="row">
			      		 <form class="col s12" method="post" action="">
					      <div class="row">
					      	<div class="input-field col s2">
					          <input id="student-number" name="student-number" type="text" class="validate">
					          <label for="student-number">Student Number</label>
					        </div>
					         <div class="input-field col s4">
					          <input id="firstname" type="text" class="validate">
					          <label for="firstname">First Name</label>
					        </div>
					        <div class="input-field col s4">
					          <input id="last_name" type="text" class="validate">
					          <label for="last_name">Last Name</label>
					        </div>
					         <div class="input-field col s2">
					          <input id="middle_name" type="text" class="validate">
					          <label for="middle_name">Middle Name</label>
					        </div>
					      </div>
					      <div class="row">
					      	<div class="input-field col s3">
					          <input id="school" type="text" class="validate">
					          <label for="school">School</label>
					        </div>
					        <div class="input-field col s3">
					          <input id="course" type="text" class="validate">
					          <label for="course">Course</label>
					        </div>
					        <div class="input-field col s2">
					          <input id="year" type="text" class="validate">
					          <label for="year">Year Level</label>
					        </div>
					        <div class="input-field col s2">
					          <input id="municipality" type="text" class="validate">
					          <label for="municipality">Municipality</label>
					        </div>
					        <div class="input-field col s2">
					          <input id="status" type="text" class="validate">
					          <label for="status">Status</label>
					        </div>
					      </div>
					       <div class="modal-content">
					        <BUTTON class="waves-effect waves-light btn teal" type="submit" name="save"><input type="submit" name="save" value="Save Data"></BUTTON> 
					       </div>
					    </form>
			      	</div>
			      </div>
			    </div>
			  </div>


	       </div>


	    </div> 
	    
	  </div>

     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
<!-- <i class="teal-text text-lighten-2 material-icons prefix announcement icon"> -->
</body>
</html>