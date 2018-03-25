
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
  $q =   $_SESSION['provider'];
  $schoolid = $_SESSION['schoolhandle'];
  $selectSchool = "SELECT * FROM school_list WHERE id =$schoolid";
  $schoolname;
  $schoolResult = $conn->query($selectSchool);
  if ($schoolResult->num_rows>0) {
    # code...
    while ($row=$schoolResult->fetch_assoc()) {
      # code...
      $schoolname = $row['school_list'];
    }
  }

    # code...
    $sql = "SELECT * FROM student_list_scholars WHERE scholar_provider = '$provider' AND school_year_sem =$sys  AND school LIKE '%$schoolname%'";
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
  		      <a href="sub-admin-scholar.php?q=<?php echo $q;?>&sys=<?php echo $sys;?>" class="brand-logo blue-text "><i class=" large material-icons blue-text  ">insert_emoticon</i>Back</a>
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

        <!--    END OF MODAL STRACTURE -->

        <!-- Data list -->

        <div class="row">

          <div class="col s12">
            <div class='chip teal white-text teal lighten-2'>
                Result :
                <?php   echo "$row_cnt";?>
            </div>
        <div class="row">
          <table class ='striped'>
           <thead>
             <tr>
               <th class='teal-text text-lighten-2'>Student Name</th>
               <th class='teal-text text-lighten-2'>Student Number</th>
               <th class='teal-text text-lighten-2'>Scholarship Status</th>
               <th class='teal-text text-lighten-2'>Requirements Status</th>
               <th class='teal-text text-lighten-2'>Municipality</th>
               <th class='teal-text text-lighten-2'>School</th>
               <th class='teal-text text-lighten-2'>Course</th>
               <th class='teal-text text-lighten-2'>Year Level</th>
             </tr>
           </thead>

           <tbody>

              <?php
              if ($result->num_rows > 0) {
                  // output data of each row

                  while($row = $result->fetch_assoc()) {

                echo "
                   <tr>
                <td>".$row['last_name']." ".$row['first_name']. ", ".$row['middle_name']."</td>
                <td>" .$row['student_number']."</td>
                <td>" .$row['status']."</td>
                <td>" .$row['requirements_status']."</td>
                <td>" .$row['municipality']."</td>
                <td>" .$row['school']."</td>
                <td>" .$row['course']."</td>
                <td>" .$row['year_level']."</td>
                </tr>";
              }

              } else {
                  echo "<script> M.toast({html: 'Zero Result', classes: 'rounded'});</script>";

              }
              ?>
                 </tbody>
               </table>
              </div>
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
