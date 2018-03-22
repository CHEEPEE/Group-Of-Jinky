
<!DOCTYPE html>
<html class="fullheight">
  <head>
    <?php
    include 'styles.php';
    include 'dbconnect.php';

    ?>

    <title></title>
    <style media="screen">
    .thebackground{
      background-color: #deebf7;
    }
    </style>
  </head>
  <body class="body-custom">
    <div class="navbar-fixed  ">
  		<nav>

  		    <div class="nav-wrapper fixed companylogo white-text blue lighten-1" >
  		      <a href="#!" class="brand-logo white-text ">Antique Scholarship</a>

  		      <ul class="right hide-on-med-and-down blue lighten-1">
              <li><a href="Homepage.php">Home</a></li>
              <li><a href="announcements-page.php">Anouncements</a></li>
                <li><a href="documents-page.php">Documents</a></li>
              <li><a href="index.php">Sign In</a></li>
  		      </ul>
  		    </div>
  		  </nav>
  	</div>
    <div class="row">

      <div class="col s2">

      </div>
      <div class="col s8">
        <ul class='collapsible popout' data-collapsible='accordion'>
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

              <li>
                  <div class='collapsible-header'>
                  <div class='col s4 blue-text text-darken-2'>$title
                  </div>
                  <div class='col s2 blue-text text-darken-2'>
                    <div class='chip white-text blue darken-2'>
                      $time
                    </div>
                  </div>
                  <div class='col s4 blue-text text-darken-2'> <i class='material-icons blue-text calendar Outline icon'>
                    </i>$timestamp
                  </div>
                  <div class='col s1 blue-text text-lighten-2'>

                  </div>
                  <div class='col s1 blue-text text-lighten-2'>

                  </div>

                  </div>
                  <div class='collapsible-body'>
                    <span>
                    <div class='col s12'>
                       <div class='chip white-text blue lighten-2'>
                       Subject
                       </div>
                       $subject
                    </div>
                    <div class='col s12'>
                     <div class='white-text'>
                     This is Just a Divier
                     </div>
                    </div>
                    <div class='chip white-text blue lighten-2 announcementchipcustom'>
                      Announcement
                    </div>
                    <br>
                    <br>
                    <div class = 'container'>
                        $message
                    </div>

                    </span>
                  </div>
              </li>
              ";
              }
            }
          ?>
        </ul>
      </div>
      <div class="col s2">

      </div>

      <!-- <div class="col s3">
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
        </div> -->
      </div>


    </div>


    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
  </body>
</html>
