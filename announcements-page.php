
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
              <li><a href="#structure">About</a></li>
              <li><a href="#initialization">Grant</a></li>
              <li><a href="#initialization">Sign In</a></li>
  		      </ul>
  		    </div>
  		  </nav>
  	</div>
    <div class="row grey lighten-4">
      <div class="class col s9">
          <?php
          $sql = "SELECT * FROM announcements";


          $update = "";
          $result = $conn->query($sql);


          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                $title = $row['title'];
                $message = $row['message'];
                $id = $row['id'];
              echo "
              <div class = 'newsfeedcard white'>
              <h3 >$title</h3>
              <p id = 'news$id' class = 'section scrollspy'>$message</p>
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
            $sql = "SELECT * FROM announcements";
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
