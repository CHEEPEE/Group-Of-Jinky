
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
  <?php include 'student-navbar.php';
  ?>
  </div>


   <div class="row fullheight main-content">

    <?php include 'student-sidenav.php';?>
    <div class="col s12 fullheight ">
      <div class="row">
        <div class="col s12">
          Student Informations
        </div>
        <?php
        $select_student = "SELECT * FROM student_list_scholars WHERE student_number = '$userid' LIMIT 1";
        $student_result = $conn->query($select_student);
        if ($student_result->num_rows>0) {
          # code...
          while ($row_student = $student_result->fetch_assoc()) {
            # code...
          ?>
          <div class="row studentinfo-custom">
            <div class="col s6">
              <div class="col s4 grey-text">
                Name
              </div>
              <div class="col s8">
                <div class='chip blue white-text lighten-2'>
                    <?php echo $row_student['first_name']." ".$row_student['middle_name']." ".$row_student['last_name']; ?>
                </div>
              </div>
              <div class="col grey-text s4">
                Student Number
              </div>
              <div class="col s8">
                <div class='chip blue  white-text  lighten-2'>
                    <?php echo $row_student['student_number'] ?>
                </div>
              </div>
              <div class="col grey-text s4">
                Municipality

              </div>
              <div class="col s8">
                <div class='chip blue  white-text  lighten-2'>
                    <?php echo $row_student['municipality'] ?>
                </div>
              </div>
              <div class="col grey-text s4">
                School

              </div>
              <div class="col s8">
                <div class='chip blue  white-text  lighten-2'>
                    <?php echo $row_student['school'] ?>
                </div>
              </div>
              <div class="col grey-text s4">
                Course

              </div>
              <div class="col s8">
                <div class='chip blue  white-text  lighten-2'>
                    <?php echo $row_student['course'] ?>
                </div>
              </div>
              <div class="col grey-text s4">
                Year Level

              </div>
              <div class="col s8">
                <div class='chip blue  white-text  lighten-2'>
                    <?php echo $row_student['year_level'] ?>
                </div>
              </div>
              <div class="col grey-text s4">
                Status

              </div>
              <div class="col s8">
                <div class='chip blue  white-text  lighten-2'>
                    <?php echo $row_student['status'] ?>
                </div>
              </div>
              <div class="col grey-text s4">
                Requirements

              </div>
              <div class="col s8">
                <div class='chip blue  white-text  lighten-2'>
                    <?php echo $row_student['requirements_status'] ?>
                </div>
              </div>


            </div>
            <div class="col s6">

            </div>


          </div>

          <?php
        }
        }else {
          echo "Error updating record: " . $conn->error;
        }
        ?>
        <div class="col s12">

        </div>
      </div>
    </div>
  </div>
</body>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="index.js"></script>
</html>
