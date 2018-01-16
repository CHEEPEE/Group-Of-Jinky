

<!DOCTYPE html>
<html class="fullheight">
<head>
  <?php


  include 'styles.php';
  include 'dbconnect.php';
  include 'sessions.php';



   ?>
  <title></title>
</head>


<body class=" fullheight">
  <!-- Dropdown Structure -->
  <?php include 'navbar.php';

  ?>
  </div>


   <div class="row fullheight">

    <?php include 'sidenav.php';?>
    <div class="col s10 fullheight ">
      <div class="row">
         <nav class="listcontainer">
          <div class="nav-wrapper blue darken-2">
            <div class="col s12">
              <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
              <a href="#!" class="breadcrumb">Requirements</a>
              <a href="#!" class="breadcrumb">Loren Legarda</a>
            </div>
          </div>
        </nav>
      </div>

        <div class="card listcontainer">

              <div class="red-text"><?php  echo $_SESSION['error'];
                  $_SESSION['provider'] =  "Loren Legarda";
              $student_number = "";
              $_SESSION['error'] = "";
                ;?></div>
              <h5 class="list-title-scholars">List of Scholars</h5>
          <div class="card-action">
              <div class="row">
                <div class="input-field col s3">
                   <a class="waves-effect waves-light btn modal-trigger blue" href="#modal1">Add Scholar</a>
                </div>
                <div class="input-field col s3 offset-s5">
                  <form method="post" action="searchthis.php">
                    <div class="$row">
                      <div class="col s12">
                        <label for="search">Search</label>
                        <input id="search" type="text" name="search" class="validate">
                      </div>
                      <div class="col s4 right">
                        <input type="submit" class="btn blue lighten-2 white-text" value="Search">
                      </div>
                    </div>
                  </form>

                </div>
              </div>

          <!-- Modal Structure -->
          <div id="modal1" class="modal">
            <div class="modal-content">
              <h5>Add New Scholar</h5>
              <div class="card-action">
                <div class="row">
                   <form class="col s12" method="post" action="scholar_insert.php">
                  <div class="row">
                    <div class="input-field col s2">
                      <input id="student-number" name="student-number" type="text" class="validate">
                      <label for="student-number">Student Number</label>
                    </div>
                     <div class="input-field col s4">
                      <input id="firstname" name="firstname" type="text" class="validate">
                      <label for="firstname">First Name</label>
                    </div>
                    <div class="input-field col s4">
                      <input id="last_name" name="last_name" type="text" class="validate">
                      <label for="last_name">Last Name</label>
                    </div>
                     <div class="input-field col s2">
                      <input id="middle_name" name="middlename" type="text" class="validate">
                      <label for="middle_name">Middle Name</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s3">
                      <input id="school" name="school" type="text" class="validate">
                      <label for="school">School</label>
                    </div>
                    <div class="input-field col s3">
                      <input id="course" name="course" type="text" class="validate">
                      <label for="course">Course</label>
                    </div>
                    <div class="input-field col s2">
                      <input id="year" name="year-level" type="text" class="validate">
                      <label for="year">Year Level</label>
                    </div>
                    <div class="input-field col s2">
                      <input id="municipality" name="municipality" type="text" class="validate">
                      <label for="municipality">Municipality</label>
                    </div>
                    <div class="input-field col s2">
                      <input id="status" name="status" type="text" class="validate">
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
        <!--    END OF MODAL STRACTURE -->

        <!-- Data list -->
        <div class="row">
          <div class="col s12">

          <ul class="collapsible">

                  <?php
                  $search = $_SESSION['search_item'];
                  $array_search = explode(" ",$search);
                  $provider = $_SESSION['provider'];
                    $sql = "SELECT * FROM student_list_scholars WHERE scholar_provider = '$provider'";
                  foreach ($array_search as $value)
                  {
                  $sql =$sql. "AND (student_number LIKE '%$value%' OR year_level = '$value' OR first_name LIKE '%$value%' OR last_name LIKE '%$value%' OR middle_name = '%$value%' OR school LIKE '%$value%' OR course LIKE '%$value%' OR municipality LIKE '%$value%' OR status LIKE '%$value%' )";
                  }
                 $sql = $sql."ORDER BY last_name";

              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {


                      echo "
                      <li>
                        <div class='collapsible-header'>
                          <div class='col s3 blue-text text-lighten-2'> <i class='material-icons blue-text user icon'>
                            </i>".$row['last_name']." ".$row['first_name']. "
                          </div>
                          <div class='col s3'>
                            <div class='chip'>
                             Student Number
                            </div>
                           ".$row['student_number']."
                          </div>

                          <div class='col s2'>
                            <div class='chip'>
                              Status
                            </div>
                              ".$row['status']. "
                          </div>
                          <div class='col s3'>
                            <div class='chip'>
                             Requirements Status
                            </div>
                            ".$row['requirements_status']."
                          </div>
                           <div class='col s3'>
                          <a href = 'admin-edit-scholar.php?q=". $row['student_number']. "'>
                            <i class='material-icons large blue-text edit icon'></i>
                          </a>
                          <a href = 'scholar_delete.php?q=". $row['student_number']. "'>
                            <i class='material-icons large red-text text-lighten-2 delete icon'></i>
                          </a>
                          <i class='material-icons large blue-text comments outline icon'></i>
                          </div>
                        </div>
                        <div class='collapsible-body'>
                         <div class ='row'>
                           <div class='col s3'>
                            <div class='chip'>
                             Student Number
                            </div>
                           ".$row['student_number']."
                          </div>

                         </div>
                        </div>
                      </li>";


                  }
              } else {
                  echo "<script> M.toast({html: 'Zero Result', classes: 'rounded'});</script>";

              }


            ?>

            </ul>


          </div>


        </div>



         </div>
      </div>
    </div>

     <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

     <script type="text/javascript">


     </script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
<!-- <i class="teal-text text-lighten-2 material-icons prefix announcement icon"> -->
</body>
</html>
<?php $_SESSION['search_item'] = ""; ?>
