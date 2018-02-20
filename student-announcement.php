
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
    <div class="class col s9">
        <?php
        $sql = "SELECT * FROM announcements ORDER BY id DESC";


        $update = "";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $title = $row['title'];
              $message = $row['message'];
              $id = $row['id'];
              $subject = $row['subject'];
              $timestamp = $row['timestamp'];
              $time =$row['hour'];

            echo "
            <div class = 'newsfeedcard white'>
            <h3 >$title</h3>
            <div class = 'row'>
              <div class='col s6 grey-text'>
                To : $subject
              </div>
              <div class = 'col s6 right'>
                 <div class='chip white-text blue lighten-2'>
                  $time  $timestamp
                </div>
              </div>
            </div>
            <div class='row'>
              <div class='col s12'>
                <div id = 'news$id' class = 'section scrollspy'>$message</div>
              </div>
            </div>


            </div>
            ";
            }
          }
        ?>
    </div>

  </div>
</body>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="index.js"></script>
</html>
