
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


   <div class="row fullheight main-content">

    <?php include 'sidenav.php';?>
    <div class="col s12 fullheight ">
      <div class="row">
        <div class="col s12">
          <h5>Admin Mangement</h5>
        </div>

      </div>

        <div class="row">
          <div class="col s6">
            <h5>Sub Admins</h5>

            <div class="row">
              <div class="col s6">
                  <a class="btn blue lighten-2 modal-trigger" href="#add-sub-admin-modal">Add Sub-admin</a>
              </div>

            </div>
            <div class="$row">
              <div class="col s12">
                <ul class="collapsible">
                  <li>
                    <div class='collapsible-header'>
                      <div class='col s12 blue-text text-lighten-2'>Sub-Admins</div>
                    </div>
                  </li>
                  <?php

                  $sql = "SELECT * FROM users WHERE role = 'sub-admin';";

                  $result = $conn->query($sql);
                  if ($result->num_rows>0) {
                    # code...
                    while ($row = $result->fetch_assoc()) {

                      $id = $row['id'];
                      $school = $row['school_handled'];
                      $schoolname;
                      $schoolid;


                      $sqlSchool = "SELECT * FROM school_list WHERE id =$school";
                      $resultsqlSchool = $conn->query($sqlSchool);
                      if ($resultsqlSchool->num_rows>0) {
                        # code...
                        while ($scholrow = $resultsqlSchool->fetch_assoc()) {
                          # code...
                          $schoolname = $scholrow['school_list'];
                          $schoolid = $scholrow['id'];



                        }
                      }
                      echo "
                      <li>
                        <div class='collapsible-header'>
                          <div class='col s4 blue-text text-lighten-2' id='subadmin$id'>".$row['username']."</div>
                          <div class='col s6 blue-text text-lighten-2' id='schooladmin$id'>".$schoolname."</div>
                            <div class='col s1'>
                                <i class='material-icons small blue-text modal-trigger' href='#edit-sub-admin-modal' onclick='editSubAdmin(".$row['id'].");'>edit</i>
                          </div>
                          <div class='col s1'>
                            <a href = 'provider-delete.php?q=". $row['id']. "'>
                              <i class='material-icons small red-text text-lighten-2'>delete_forever</i>
                            </a>
                          </div>
                          <div class='col s1'>
                            <a class='tooltipped' data-position='bottom' data-delay='50' data-tooltip='Reset Password' href = 'sub-admin-reset-password.php?q=". $row['id']. "'>
                              <i class='material-icons small teal-text text-lighten-2'>settings_backup_restore</i>
                            </a>
                          </div>
                        </div>
                      </li>
                      ";


                      # code...

                    }
                  }
                  ?>

                </ul>
              </div>
            </div>


          </div>
          <div class="col s6">
            <h5>Edit Your Profile</h5>
            <form action="adminchangepass.php?q=<?php echo $_SESSION['user_id'];?>" method="POST">
                <div class="row">
                  <div class="col s6">
                    <div class="input-field col s12">
                      <input id="current_password" name="current_password" type="password" class="validate" onkeyup='check();' >
                      <label for="current_password">Current Password</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col s6">
                    <div class="input-field col s12">
                      <input id="new_password" name="new_password" type="password" class="validate"  onkeyup='check();'>
                      <label for="new_password">New Password</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col s6">
                    <div class="input-field col s12">
                      <input id="confirm_new_password" name="confirm_new_password" type="password" class="validate"  onkeyup='check();'>
                      <label for="confirm_new_password">Confirm New Password</label>
                    </div>
                    <div class="col s12">
                      <input id='submit-btn' class="btn blue lighten-2" type="submit" name="Submit" >
                    </div>
                  </div>
                </div>
                <span id='message'><?php echo  $_SESSION['change_pass_error'];
                $_SESSION['change_pass_error'] = "";
                ?></span>
              </form>

          </div>

        </div>
    </div>
    <div class="col s12">

      <div class="row">
        <h5>Student Profiles</h5>
        <div class="col s6">
          <div class="row">
            <div class="col s12">
              School
            </div>
            <div class="col s12">
              <div class="row">

                <div class="col s11">
                  <ul class="collapsible">
                    <li>
                      <div class='collapsible-header'>
                        <div class='col s12 blue-text text-lighten-2'>Scholar Names</div>
                      </div>
                    </li>
                    <?php

                    $sql = "SELECT * FROM school_list;";
                    $result = $conn->query($sql);
                    if ($result->num_rows>0) {
                      # code...
                      while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        # code...
                        echo "
                        <li>
                          <div class='collapsible-header'>
                            <div class='col s10 blue-text text-lighten-2' id='edit$id'>".$row['school_list']."</div>
                              <div class='col s1'>
                                  <i class='material-icons small blue-text modal-trigger' href='#edit-school-modal' onclick='editSchool(".$row['id'].");'>edit</i>
                              </div>
                            <div class='col s1'>
                              <a href = 'school-delete.php?q=". $row['id']."'>
                                <i class='material-icons small red-text text-lighten-2'>delete_forever</i>
                              </a>
                            </div>
                          </div>
                        </li>
                        ";
                      }
                    }
                    ?>

                  </ul>


                </div>


              </div>
            </div>
            <div class="col s12">
              <a href="#add-school-modal" class="btn blue lighten-2 modal-trigger">Add School</a>
            </div>
          </div>
        </div>
        <div class="col s6">
          <h5>Reset Student Password</h5>
          <div class="row">

            <form class="" action="student-reset-password.php" method="post">
              <div class="input-field col s10">
                <input id="student-number" name="student-number" type="text" class="validate"  onkeyup='check();'>
                <label for="student-number">Student Number</label>
                <input id='submit-btn' class="btn blue lighten-2" type="submit" name="Submit" value="Reset Password" >
              </div>


            </form>

          </div>
        </div>
      </div>
      <!-- end of second section -->
      <!-- section III -->
      <div class="row">
        <div class="col s6">
          <h5>School Year And Semester</h5>
          <div class="row">
            <div class="col s12">
                <a class="btn blue lighten-2 modal-trigger" href="#schoolyear-semester-modal">Add School Year And Semester</a>
            </div>
            <div class="col s12">
              <!-- school Year List -->
              <div class="$row">
                <div class="col s12">
                  <ul class="collapsible">
                    <li>
                      <div class='collapsible-header'>
                        <div class='col s12 blue-text text-lighten-2'>School Year And Semester</div>
                      </div>
                    </li>
                    <?php

                    $sql = "SELECT * FROM school_yeara_sem_list;";
                    $result = $conn->query($sql);
                    if ($result->num_rows>0) {
                      # code...
                      while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        # code...
                        echo "
                        <li>
                          <div class='collapsible-header'>
                            <div class='col s10 blue-text text-lighten-2' id='yearsem$id'>".$row['school_year_sem']."</div>
                              <div class='col s1'>
                                  <i class='material-icons small blue-text modal-trigger' href='#edit-yearsem-modal' onclick='editSchoolYearSem(".$row['id'].");'>edit</i>
                              </div>
                            <div class='col s1'>
                              <a href = 'delete-yearsem.php?q=". $row['id']."'>
                                <i class='material-icons small red-text text-lighten-2'>delete_forever</i>
                              </a>
                            </div>
                          </div>
                        </li>
                        ";
                      }
                    }
                    ?>

                  </ul>
                </div>
              </div>

              <!-- end school Year -->

            </div>
          </div>


        </div>
        <!-- end of section III -->


      </div>
    </div>
  <!-- Modal Structure add-sub admin -->
  <div id="add-sub-admin-modal" class="modal">
    <div class="modal-content">
      <h5>Add Sub-Admin</h5>
      <div class="card-action">
        <div class="row">
           <form class="col s12" id ='add-sub-admin-form' method="post" action = "add-sub-admin.php">
            <div class="row">
              <div class="input-field col s6">
                <input id="username" name="username" type="text" class="validate" value="">
                <label for="username">Sub-Admin Username</label>
              </div>
              <div class="input-field col s6">
                <select name="school_handled">
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
                         echo "<option id='defaultprovider' value='$id_value'>$value</option>";

                      }
                    }
                  ?>


             </select>
             <label>School</label>
             </div>
             <div class="input-field col s6">
               <input id="password" name="password" type="password" class="validate" value=""  onkeyup="validate()">
               <label for="password">Password</label>
             </div>
             <div class="input-field col s6">
               <input id="confirm-password" name="confirm-password" type="password" class="validate" value=""  onkeyup="validate()">
               <label for="confirm-password">Confirm Password</label>
             </div>
            </div>
             <div class="modal-content">
              <BUTTON id="sub-admin-submit-btn" class="waves-effect white-text waves-light btn teal" type="submit" name="save"><input class="white-text" type="submit" name="save" value="Save Data"></BUTTON>
             </div>
                <span id="sub-admin-message"></span>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- modal school year and semester -->
  <div id="schoolyear-semester-modal" class="modal">
    <div class="modal-content">
      <h5>School Year and Semester</h5>
      <div class="card-action">
        <div class="row">
           <form class="col s12" id ='edit-form'  method="post" action="add-school-year-semester.php">
            <div class="row">
              <div class="input-field col s12">
                <input id="schoolyear-semester" name="schoolyear-semester" type="text" class="validate" value="">
                <label for="schoolyear-semester">School Year And Semester</label>
              </div>
            </div>
             <div class="modal-content">
              <BUTTON id="submit-btn" class="waves-effect white-text waves-light btn teal" type="submit" name="save"><input class="white-text" type="submit" name="save" value="Save Data"></BUTTON>
             </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Structure edit-sub admin -->
  <div id="edit-sub-admin-modal" class="modal">
    <div class="modal-content">
      <h5>Add Sub-Admin</h5>
      <div class="card-action">
        <div class="row">
           <form class="col s12" id ='edit-sub-admin-form' method="post" action = "update-sub-admin.php">
            <div class="row">
              <div class="input-field col s6">
                <input id="update-username" placeholder="Sub Admin Username" name="update-username" type="text" class="validate" value="">
                <label for="update-username">Sub-Admin Username</label>
              </div>
              <div class="input-field col s6">
                <select name="school_handled">
                  <?php
                  $sqlgetProvider = "SELECT * FROM school_list;";
                  $provider_result = $conn->query($sqlgetProvider);
                    if ($provider_result->num_rows>0) {
                      # code...
                    echo "<option id='selectdefaultprovider' value='' selected></option>";

                      while ($row = $provider_result->fetch_assoc()) {
                        # code...

                         $value = $row['school_list'];
                         $id_value = $row['id'];
                         echo "<option id='defaultprovider' value='$id_value'>$value</option>";
                      }
                    }
                  ?>
             </select>
             <label>School</label>
            </div>
            </div>
             <div class="modal-content">
               <BUTTON id="sub-admin-submit-btn" class="waves-effect white-text waves-light btn teal" type="submit" name="save"><input class="white-text" type="submit" name="save" value="Save Data"></BUTTON>
             </div>
                <span id="sub-admin-message"></span>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Structure add school -->
  <div id="add-school-modal" class="modal">
    <div class="modal-content">
      <h5>Add School</h5>
      <div class="card-action">
        <div class="row">
           <form class="col s12" id ='edit-form'  method="post" action="add-school.php">
            <div class="row">
              <div class="input-field col s12">
                <input id="school-name" name="school-name" type="text" class="validate" value="">
                <label for="school-name">School Name</label>
              </div>
            </div>
             <div class="modal-content">
              <BUTTON id="submit-btn" class="waves-effect white-text waves-light btn teal" type="submit" name="save"><input class="white-text" type="submit" name="save" value="Save Data"></BUTTON>
             </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Structure edit school -->
  <div id="edit-school-modal" class="modal">
    <div class="modal-content">
      <h5>Edit School</h5>
      <div class="card-action">
        <div class="row">
           <form class="col s12" id ='school-name-edit-form'  method="post" action="update-school.php">
            <div class="row">
              <div class="input-field col s12">
                <input id="edit-school-name" placeholder="School" name="edit-school-name" type="text" class="validate" value="">
                <label for="edit-school-name">School Name</label>
              </div>
            </div>
             <div class="modal-content">
              <BUTTON class="waves-effect white-text waves-light btn teal" type="submit" name="save"><input class="white-text" type="submit" name="save" value="Save Data"></BUTTON>
             </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- edit school-year-sem -->
  <div id="edit-yearsem-modal" class="modal">
    <div class="modal-content">
      <h5>Edit School</h5>
      <div class="card-action">
        <div class="row">
           <form class="col s12" id ='yearsem-name-edit-form'  method="post" action="update-school.php">
            <div class="row">
              <div class="input-field col s12">
                <input id="yearsem" placeholder="School" name="yearsem" type="text" class="validate" value="">
                <label for="yearsem">School Year And Semester</label>
              </div>
            </div>
             <div class="modal-content">
              <BUTTON class="waves-effect white-text waves-light btn teal" type="submit" name="save"><input class="white-text" type="submit" name="save" value="Save Data"></BUTTON>
             </div>
          </form>
        </div>
      </div>
    </div>
  </div>

     <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

     <script type="text/javascript">
     var check = function() {
      if ( document.getElementById('current_password').value =="" || document.getElementById('new_password').value =="" || document.getElementById('confirm_new_password').value =="") {
        document.getElementById("submit-btn").disabled = true;
        document.getElementById('message').innerHTML = '';
      }
      else if (document.getElementById('current_password') == "" && document.getElementById('confirm_new_password')== "") {
        document.getElementById("message").innerHTML = "";
      }
      else {
         if (document.getElementById('new_password').value ==
           document.getElementById('confirm_new_password').value) {
           document.getElementById('message').style.color = 'green';
           document.getElementById('message').innerHTML = 'Match';
           document.getElementById("submit-btn").disabled = false;
         } else {
           document.getElementById('message').style.color = 'red';
           document.getElementById('message').innerHTML = 'not Match';
           document.getElementById("submit-btn").disabled = true;

         }
       }

      }
      var validate = function() {
       if ( document.getElementById('password').value =="" || document.getElementById('confirm-password').value =="") {
         document.getElementById("sub-admin-submit-btn").disabled = true;
         document.getElementById('sub-admin-message').innerHTML = '';
       }
       else if (document.getElementById('password') == "" && document.getElementById('confirm-password')== "") {
         document.getElementById("sub-admin-message").innerHTML = "";
         document.getElementById("sub-admin-submit-btn").disabled = true;
       }
       else {
          if (document.getElementById('password').value ==
            document.getElementById('confirm-password').value) {
            document.getElementById('sub-admin-message').style.color = 'green';
            document.getElementById('sub-admin-message').innerHTML = 'Match';
            document.getElementById("sub-admin-submit-btn").disabled = false;
          } else {
            document.getElementById('sub-admin-message').style.color = 'red';
            document.getElementById('sub-admin-message').innerHTML = 'not Match';
            document.getElementById("sub-admin-submit-btn").disabled = true;
          }
        }
       }

     </script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
<!-- <i class="teal-text text-lighten-2 material-icons prefix announcement icon"> -->
</body>
</html>
<?php $_SESSION['search_item'] = ""; ?>
