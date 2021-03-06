

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
              <a href="#!" class="breadcrumb">Requirements</a>
              <a href="#!" class="breadcrumb">Rhodoro Cadiao</a>
             
            </div>
          </div>
        </nav>
      </div>
      
        <div class="card listcontainer">

              <div class="red-text"><?php  echo $_SESSION['error'];
                  $_SESSION['provider'] =  "Rhodora Cadiao";
              $student_number = "";
              $_SESSION['error'] = "";
                ;?></div>
              <h5 class="list-title-scholars">List of Scholars</h5>
          <div class="card-action">

               <a class="waves-effect waves-light btn modal-trigger blue" href="#modal1">Add Scholar</a>

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
          <!--  <table class="highlight">
              < <thead>
                  <tr>
                      <th>Student Number</th>
                      <th>Last Name</th>
                      <th>First Name</th>
                      <th>Middle Name</th>
                      <th>School</th>
                      <th>Course</th>
                      <th>Year</th>
                      <th>Municipality</th>
                      <th>Status</th>
                      <th></th>
                      <th></th>
                      <th></th>

                  </tr>
                </thead>

                <tbody> -->
                  <?php 
                  $provider = $_SESSION['provider'];

                  $sql = "SELECT * FROM student_list_scholars WHERE scholar_provider LIKE '$provider'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      /*echo "<tr><td class='blue-text text-lighten-1 '> ". $row["student_number"]. "</td><td>" . $row["first_name"]. "</td><td> " . $row["last_name"]. "</td><td>". $row["middle_name"]."</td><td>". $row["school"]."</td><td>". $row["course"]."</td><td>". $row["year_level"]."</td><td>". $row["municipality"]."</td><td>". $row["status"]."</td><td>
                       <a href = 'admin-edit-scholar.php?q=". $row['student_number']. "'>
                        <i class='material-icons blue-text edit icon'></i></td><td></a>
                     <a href = 'scholar_delete.php?q=". $row['student_number']. "'>
                      <i class='material-icons red-text text-lighten-2 delete icon'></i></a>
                      </td><td><i class='material-icons blue-text comments outline icon'> </td></tr>";*/
                      echo "<li><div class='collapsible-header'> <i class='material-icons user icon'></i>".$row['first_name']."</div>
                        <div class='collapsible-body'><span>Lorem ipsum dolor sit amet.</span></div>
                        </li> ";


                  }
              } else {
                /*  echo "0 results";*/
                  
              }
            

                  ?>
            
                 

              <!--   </tbody>
              </table> -->
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