
<!DOCTYPE html>
<html class="fullheight">
<head>
  <?php


  include 'styles.php';
  include 'dbconnect.php';
  include 'sessions.php';
  $student_number = "";
  $search = $_SESSION['search_item'];
  $array_search = explode(" ",$search);
  $provider = $_SESSION['provider'];
  $schoolyearSemId = '';
  $sys =  $_REQUEST['sys'];

    # code...
    $sql = "SELECT * FROM student_list_scholars WHERE scholar_provider = '$provider' AND school_year_sem =$sys ";
    foreach ($array_search as $value)
    {
    $sql =$sql. "AND (student_number LIKE '%$value%' OR year_level = '$value' OR first_name LIKE '%$value%' OR last_name LIKE '%$value%' OR middle_name LIKE '%$value%' OR school LIKE '%$value%' OR course LIKE '%$value%' OR municipality LIKE '%$value%' OR status LIKE '%$value%' OR requirements_status = '$value' )";
    }
   $sql = $sql."ORDER BY id DESC";

$result = $conn->query($sql);
$row_cnt = $result->num_rows;
$sqlProvider_name = "SELECT * FROM scholar_provider WHERE provider_id = '$provider'";
$provider_name_result = $conn->query($sqlProvider_name);
$provider_name;

if ($provider_name_result->num_rows>0) {
  # code...
  while ($row = $provider_name_result->fetch_assoc()) {
    # code...
    $provider_name = $row['provider_name'];
  }
}





   ?>
  <title></title>
</head>


<body class=" fullheight">
  <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">

  	  <li class="divider"></li>
  	  <!-- <li><a href="admin-management.php" class="blue-text">Management<i class="material-icons  user circle outline icon blue-text left"></i></a></li> -->
  	   <li class="divider"></li>
  	  <li><a href="logout.php" class="blue-text">Log out<i class="material-icons sign out icon blue-text left"></i></a></li>
  	</ul>
  	<div class="navbar-fixed ">
  		<nav>
  		    <div class="nav-wrapper fixed companylogo white blue-text" >
  		      <a href="admin-scholar.php?q=&sys=<?php echo $sys;?>" class="brand-logo blue-text "><i class=" large material-icons blue-text  ">insert_emoticon</i>Back</a>
  		    </div>
  		  </nav>
  	</div>
  </div>
   <div class="row fullheight">

    <div class="col s12 fullheight ">
      <div class="row">
      </div>
        <div class="card listcontainer" id="">
             <div class="row list-title-scholars">
              <div class="col s1 red-text lighten-2 center ">

                     <?php  echo $_SESSION['error'];?>

                   <?php $_SESSION['error'] ='';?>

              </div>
              <div class="col s4 ">
                     <form method="post" action="printsearchthis.php?sys=<?php echo $sys;?>">
                         <div class="col s12">
                           <label for="search">Search</label>
                           <input id="search" type="text" name="search" class="validate">
                         </div>
                         <div class="col s4">
                           <input type="submit" class="btn blue darken-2 white-text" value="Search">
                         </div>
                     </form>
              </div>
              <div class="col s6">
                <form class="" method="post" action ="get-school-year-sem.php">
                  <div class="input-field col s6">
                    <select name="sys">
                      <?php
                      $sqlgetProvider = "SELECT * FROM school_yeara_sem_list ORDER BY id DESC;";
                      $provider_result = $conn->query($sqlgetProvider);
                        if ($provider_result->num_rows>0) {
                          while ($row = $provider_result->fetch_assoc()) {
                            # code...
                            $value = $row['school_year_sem'];
                            $id_value = $row['id'];
                            if ($sys==$row['id']) {
                              # code...
                              echo "<option id='defaultprovider".$id_value."' value='$id_value' selected onSelect='setYearsem('$id_value')'>$value</option>";

                            }else {
                              echo "<option id='defaultprovider".$id_value."' value='$id_value'  onSelect='setYearsem('$id_value')'>$value</option>";
                            }
                            $schoolyearSemId = $id_value;

                          }
                        }
                      ?>
                 </select>
                 <label>School Year and Semester</label>
                </div>
                <div class=" input-field col s1">
                    <input type="submit" class='chip teal white-text teal lighten-2' value="Go">
                </div>
              </form>
            </div>


              <div class="col s2 right">
                        <input type="submit" class="btn white-text" name="" value="Print now" onclick="printDiv('print')">
              </div>

            </div>
          <div class="card-action" id = 'print'>

           <h5 class=" blue-text lighten-2">List of Scholars</h5>
          <!-- Modal Structure -->
          <div id="modal1" class="modal">
            <div class="modal-content">
              <h5>Add New Scholar</h5>
              <div class="card-action">
                <div class="row">
                   <form class="col s12" method="post" action="scholar_insert.php?sysid=<?php echo $sys;?>">
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
                    <!-- <div class="input-field col s3">
                      <input id="school" name="school" type="text" class="validate">
                      <label for="school">School</label>
                    </div> -->
                    <div class="input-field col s4">
                      <select name="school">
                        <?php
                        $sqlgetProvider = "SELECT * FROM school_list;";
                        $provider_result = $conn->query($sqlgetProvider);
                          if ($provider_result->num_rows>0) {
                            # code...
                          echo "<option id='defaultprovider' value='' selected></option>";
                            while ($row = $provider_result->fetch_assoc()) {
                              # code...
                               $value = $row['school_list'];
                               $id_value = $row['id'];
                               echo "<option id='defaultprovider' value='$value'>$value</option>";

                            }
                          }
                        ?>
                   </select>
                   <label>School</label>
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
            <div class='chip teal white-text teal lighten-2'>
                Result :
                <?php   echo "$row_cnt";?>
            </div>


          <ul class="collapsible">
            <li>
              <div class='collapsible-header'>
                <div class='col s2 blue-text text-darken-2  '>Student Name</h6>
                </div>
                <div class='col s1 teal-text '>
                  Student Number
                </div>

                <div class='col s1 teal-text'>
                    Scholarship Status
                </div>
                <div class='col s1 teal-text'>
                  Requirements Status
                </div>
                <div class='col s1'>
                  Municipality
                </div>
                <div class='col s2'>
                  School
                </div>
                <div class='col s2'>
                  Course
                </div>
                <div class='col s1'>
                  Year Level
                </div>
                <div class='col s1'>

                </div>



              </div>

            </li>

              <?php
              if ($result->num_rows > 0) {
                  // output data of each row

                  while($row = $result->fetch_assoc()) {

                    echo "
                    <li>
                      <div class='collapsible-header'>
                        <div class='col s2 blue-text text-darken-2 '>".$row['last_name']." ".$row['first_name']. ", ".$row['middle_name']. "</h6>
                        </div>
                        <div class='col s1'>

                           ".$row['student_number']."
                        </div>
                        <div class='col s1'>
                           ".$row['status']."
                        </div>
                        <div class='col s1'>
                           ".$row['requirements_status']."
                        </div>
                        <div class='col s1'>
                           ".$row['municipality']."
                        </div>
                        <div class='col s2'>
                           ".$row['school']."
                        </div>
                        <div class='col s2'>
                           ".$row['course']."
                        </div>
                        <div class='col s1'>
                           ".$row['year_level']."
                        </div>
                        <div class='col s1'>
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
     function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

     </script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
<!-- <i class="teal-text text-lighten-2 material-icons prefix announcement icon"> -->
</body>
</html>
<?php $_SESSION['search_item'] = ""; ?>
