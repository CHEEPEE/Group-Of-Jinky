
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


<body class="grey lighten-4 fullheight">
  <!-- Dropdown Structure -->
  <?php include 'navbar.php';

  ?>
  </div>


   <div class="row fullheight main-content">

    <?php include 'sidenav.php';?>
    <div class="col s12 fullheight ">


        <div class="card listcontainer">

              <div class="red-text"><?php  echo $_SESSION['error'];
                  $_SESSION['provider'] =  "Loren Legarda";
              $student_number = "";
              $_SESSION['error'] = "";
                ;?></div>
              <div class="list-title-scholars">
                 <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
                <h5 class="blue-text text-lighten-2">Files</h5>

             </div>
          <div class="card-action">
              <div class="row">
                <div class="input-field col s3">
                   <a class="waves-effect waves-light btn modal-trigger blue" href="#modal1">Add Files</a>
                </div>
              </div>

          <!-- Modal Structure -->
          <div id="modal1" class="modal">
            <div class="modal-content">
              <h5 class="blue-text text-lighten-2">Add New Files</h5>
              <hr class="blue-text text-lighten-2">
              <div class="announcementcontainer ">
                <form method="post" action="file-insert.php" enctype="multipart/form-data">
                  <div class="row">
                      <div class="col s6">
                        <div class="card">
                          <div class="announcement-card">
                            <div class="input-field">
                              <input id="title" type="text" name="file_title" class="validate">
                              <label for="title">Title</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col s6">
                        <div class="card">
                          <div class="announcement-card">
                            <div class="file-field input-field">
                              <div class="btn">
                                <span>File</span>
                                <input required type="file" name="fileToUpload" id="fileToUpload">
                              </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col s12">
                        <div class="card">
                          <div class="announcement-card">
                            <div class="input-field">
                              <textarea id="textarea1" name="file_message" class="materialize-textarea"></textarea>
                              <label for="textarea1">Message</label>
                            </div>
                          <input type="submit" class="btn blue lighten-2" value="Post announcement">
                          </div>
                        </div>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>



        <!--    END OF MODAL STRACTURE -->

        <!-- Data list -->
        <div class="row">
          <div class="col s12">

          <ul class="collapsible">

                  <?php
                  $search = $_SESSION['search_item'];
                  $array_search = explode(" ",$search);
                  $provider = $_SESSION['provider'];
                  $sql = "SELECT * FROM files ";


              $update = "";
              $result = $conn->query($sql);


              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {

                    // if ($row['update_time_stamp']!=null) {
                    //   # code...
                    //   $update = "";
                    //
                    // }else {
                    //   $update = "";
                    //   $coltitle ="6";
                    // }

                      echo "
                      <li>
                        <div class='collapsible-header'>
                          <div class='col s2 blue-text text-lighten-2'>".$row['file_title']."
                          </div>

                          <div class='col s4 blue-text text-lighten-2'>
                          <div class='chip white-text blue lighten-2'>
                          ".$row['file_name']."
                          </div>

                          </div>
                          <div class='col s4 blue-text text-lighten-2'> <i class='material-icons blue-text calendar Outline icon'>
                            </i>".$row['time']."
                          </div>
                          <div class='col s1 blue-text text-lighten-2'>
                            <a href = 'delete-file.php?q=". $row['file_id']. "'>
                              <i class='material-icons Medium red-text text-lighten-2 delete icon'></i>
                            </a>
                          </div>
                        </div>
                        <div class='collapsible-body'>
                         <div class ='row'>
                           <div class='col s12'>
                            <div class='white-text'>
                              This is Just a Divier
                            </div>
                           </div>
                           <div class='col s12'>
                                <div class='chip white-text blue lighten-2 announcementchipcustom'>
                                Message
                                </div>
                                <div class='message-container'>
                                ".$row['file_body']."
                                </div>
                           </div>
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
