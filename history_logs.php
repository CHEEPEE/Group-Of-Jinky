
<!DOCTYPE html>
<html class="fullheight">
<head>
  <?php
  include 'styles.php';
  include 'dbconnect.php';
  include 'sessions.php';
  include 'functions.php';

  ?>
</head>
<body>
  <?php include 'navbar.php';?>
  </div>
   <div class="row fullheight main-content">
    <?php include 'sidenav.php';?>
    <div class="row grey lighten-4">
      <div class="class col s11">
          <?php
          $sql = "SELECT * FROM history_logs ORDER BY id DESC";



          $update = "";
          $result = $conn->query($sql);


          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                $timestamp = $row['timestamp'];
                $header = $row['header'];
                $details = $row['details'];


              echo "
              <div class = 'newsfeedcard white'>

              <div class = 'row'>
              <div class='col s3 chip white-text blue lighten-2'>
                $timestamp
              </div>
              <div class ='col s6'>
              $header
              </div>
              </div>
              <div class='row'>
                <div class='col s12'>
                  <div id = 'news' class = 'section scrollspy'>$details</div>
                </div>
              </div>


              </div>
              ";
              }
            }
          ?>
      </div>

      </div>
  </div>



  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

  <script type="text/javascript">


  </script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
  <script type="text/javascript" src="index.js"></script>

</body>
</html>
