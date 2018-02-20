
<!DOCTYPE html>
<html class="fullheight">
  <head>
    <?php
    include 'styles.php';
    include 'dbconnect.php';

    ?>
    <title></title>
  </head>
  <body class="body-custom">
    <div class="navbar-fixed  ">
  		<nav>

  		    <div class="nav-wrapper fixed companylogo white-text blue lighten-1" >
  		      <a href="#!" class="brand-logo white-text ">Antique Scholarship</a>

  		      <ul class="right hide-on-med-and-down blue lighten-1">
              <li><a href="Homepage.php">Home</a></li>
              <li><a href="announcements-page.php">Anouncements</a></li>
              <li><a href="index.php">Sign In</a></li>
  		      </ul>
  		    </div>
  		  </nav>
  	</div>
    <div class="row grey lighten-4">
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
      <div class="col s3">
          <div class="fix-custom">
            <div class="white newsfeedcard scrollers">
              <ul class="section table-of-contents">

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
                echo "

                <li><a href = '#news$id'>$title</a></li>


                ";
                }
              }
            ?>
          </ul>
          </div>
          </div>
        </div>
      </div>


    </div>


    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
  </body>
</html>
