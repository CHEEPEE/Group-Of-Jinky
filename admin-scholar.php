
<!DOCTYPE html>
<html class="fullheight">
<head>
  <?php


  include 'styles.php';
  include 'dbconnect.php';
  include 'sessions.php';
  $_SESSION['provider'] =  $_REQUEST["q"];
  $student_number = "";
  $search = $_SESSION['search_item'];
  $array_search = explode(" ",$search);
  $provider = $_REQUEST["q"];
  $schoolyearSemId = '';
  $sys =  $_REQUEST['sys'];
  if ($provider == null) {
    # code...
    $firtsProvider = "SELECT * FROM scholar_provider LIMIT 1";

    $firstProviderResult = $conn->query($firtsProvider);
    if ($firstProviderResult->num_rows>0) {
      # code...
      while ($row = $firstProviderResult->fetch_assoc()) {
        # code...
        $provider = $row['provider_id'];
        $_SESSION['provider'] =$row['provider_id'];
      }
    }
  }else {
    # code...
      $_SESSION['provider'] = $_REQUEST["q"];
  }

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
  <?php include 'navbar.php';

  ?>
  </div>
   <div class="row fullheight main-content">
    <?php include 'sidenav.php';?>
    <div class="col s12 fullheight ">
      <div class="row">
         <nav class="listcontainer">
          <div class="nav-wrapper blue darken-2">
            <div class="col s12">
              <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
              <a href="#!" class="breadcrumb">Scholars</a>
              <a href="#!" class="breadcrumb"><?php echo $provider_name;?></a>
            </div>
          </div>
        </nav>
      </div>
        <div class="card listcontainer">
             <div class="row list-title-scholars">
              <div class="col s1 red-text lighten-2 center ">

                     <?php  echo $_SESSION['error'];?>

                   <?php $_SESSION['error'] ='';?>

              </div>
              <div class="col s4 ">
                 <h5 class=" blue-text lighten-2">List of Scholars</h5>
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


              <div class="col s1 right">
                   <div class='chip teal white-text teal lighten-2'>
                      <a class="white-text" href="print.php?sys=<?php echo $sys; ?>" > Print</a>
                    </div>
              </div>

            </div>
          <div class="card-action">
              <div class="row">
                <div class="input-field col s3">
                   <a class="waves-effect waves-light btn modal-trigger blue  darken-2" href="#modal1">Add Scholar</a>
                </div>
                <div class="input-field col s3 offset-s5">
                  <form method="post" action="searchthis.php?sys=<?php echo $sys;?>">
                    <div class="$row">
                      <div class="col s12">
                        <label for="search">Search</label>
                        <input id="search" type="text" name="search" class="validate">
                      </div>
                      <div class="col s4">
                        <input type="submit" class="btn blue darken-2 white-text" value="Search">
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
                    <div class="input-field col s4">
                      <input id="course" name="course" type="text" class="validate">
                      <label for="course">Course</label>
                      <!-- <select name="course">
                        <?php
                        $sqlgetProvider = "SELECT * FROM course;";
                        $provider_result = $conn->query($sqlgetProvider);
                          if ($provider_result->num_rows>0) {
                            # code...
                          echo "<option id='defaultprovider' value='' selected></option>";
                            while ($row = $provider_result->fetch_assoc()) {
                              # code...
                               $value = $row['course'];
                               $id_value = $row['id'];
                               echo "<option id='defaultprovider' value='$value'>$value</option>";

                            }
                          }
                        ?>
                   </select> -->
                    </div>
                    <div class="input-field col s4">
                      <!-- <input id="year" name="year-level" type="text" class="validate">
                      <label for="year">Year Level</label> -->
                      <select name="year-level">
                        <?php
                        $sqlgetProvider = "SELECT * FROM year_level;";
                        $provider_result = $conn->query($sqlgetProvider);
                          if ($provider_result->num_rows>0) {
                            # code...
                          echo "<option id='defaultprovider' value='' selected></option>";
                            while ($row = $provider_result->fetch_assoc()) {
                              # code...
                               $value = $row['year'];
                               $id_value = $row['id'];
                               echo "<option id='defaultprovider' value='$value'>$value</option>";

                            }
                          }
                        ?>
                   </select>
                    </div>
                    <div class="input-field col s4">
                      <!-- <input id="municipality" name="municipality" type="text" class="validate">
                      <label for="municipality">Municipality</label> -->

                      <select name="municipality">
                        <?php
                        $sqlgetProvider = "SELECT * FROM municipality;";
                        $provider_result = $conn->query($sqlgetProvider);
                          if ($provider_result->num_rows>0) {
                            # code...
                          echo "<option id='defaultprovider' value='' selected></option>";
                            while ($row = $provider_result->fetch_assoc()) {
                              # code...
                               $value = $row['municipality'];
                               $id_value = $row['id'];
                               echo "<option id='defaultprovider' value='$value'>$value</option>";

                            }
                          }
                        ?>
                   </select>
                   <label for="municipality">Municipality</label>
                    </div>
                    <div class="input-field col s2">
                      <!-- <input id="status" name="status" type="text" class="validate">
                      <label for="status">Status</label> -->
                      <select name="requirements_status">
                        <?php
                        $sqlgetProvider = "SELECT * FROM status";
                        $provider_result = $conn->query($sqlgetProvider);
                          if ($provider_result->num_rows>0) {
                            # code...
                          echo "<option id='defaultprovider' value='' selected></option>";
                            while ($row = $provider_result->fetch_assoc()) {
                              # code...
                               $value = $row['status'];
                               $id_value = $row['id'];
                               echo "<option id='defaultprovider' value='$value'>$value</option>";

                            }
                          }
                        ?>
                   </select>
                   <label for="status">Status</label>
                    </div>
                    <div class="input-field col s5">
                     <input id="phone_number" name="phone_number" type="text" type="tel" class="validate">
                     <label for="phone_number">Phone Number</label>
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
                <div class='col s4 blue-text text-darken-2  '>Student Name</h6>
                </div>
                <div class='col s3 teal-text '>
                  Student Number
                </div>

                <div class='col s2 teal-text'>

                    Scholarship Status


                </div>
                <div class='col s3 teal-text'>

                  Requirements Status


                </div>
                <div class='col s3'>

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
                        <div class='col s4 blue-text text-darken-2  '>".$row['last_name']." ".$row['first_name']. ", ".$row['middle_name']. "</h6>
                        </div>
                        <div class='col s3'>
                        <div class='chip teal white-text teal darken-2'>
                           ".$row['student_number']."
                        </div>

                        </div>

                        <div class='col s2'>
                        <div class='chip teal white-text teal darken-2'>
                           ".$row['status']."
                        </div>

                        </div>
                        <div class='col s3'>
                        <div class='chip teal white-text teal darken-2'>
                           ".$row['requirements_status']."
                        </div>

                        </div>
                        <div class='col s1'>
                          <a href = 'admin-edit-scholar.php?q=". $row['student_number']. "&sys=".$sys."'>
                            <i class='material-icons small blue-text'>edit</i>
                          </a>
                        </div>
                        <div class='col s1'>
                          <a href = 'scholar_delete.php?q=".$row['student_number']."&sys=".$sys."'>
                            <i class='material-icons small red-text text-lighten-2'>delete_forever</i>
                          </a>
                        </div>
                        <div class='col s1'>
                          <i class='material-icons small blue-text comments outline'>chat</i>
                        </div>
                      </div>
                      <div class='collapsible-body'>
                       <div class ='row'>
                       <table class ='striped'>
                        <thead>
                          <tr>
                              <th class='teal-text text-lighten-2'>Municipality</th>
                              <th class='teal-text text-lighten-2'>School</th>
                              <th class='teal-text text-lighten-2'>Course</th>
                              <th class='teal-text text-lighten-2'>Year Level</th>
                                <th class='teal-text text-lighten-2'>Phone Number</th>

                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>".$row['municipality']."</td>
                            <td>".$row['school']."</td>
                            <td>".$row['course']."</td>
                            <td>".$row['year_level']."</td>
                            <td>".$row['phone_number']."</td>
                          </tr>
                        </tbody>
                      </table>
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
