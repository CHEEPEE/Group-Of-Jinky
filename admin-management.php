
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

        <div class="card listcontainer">
             <div class="row list-title-scholars">
              <div class="col s1 red-text lighten-2 center ">

                     <?php  echo $_SESSION['error'];?>

                   <?php $_SESSION['error'] ='';?>

              </div>
              <div class="col s4 ">
                 <h5 class=" blue-text lighten-2">List of Scholars</h5>
              </div>
              <div class="col s1 right">
                   <div class='chip teal white-text teal lighten-2'>
                         Print
                  </div>
              </div>

            </div>
          <div class="card-action">
              <div class="row">
                <div class="input-field col s3">
                   <a class="waves-effect waves-light btn modal-trigger blue" href="#modal1">Add Scholar Provider</a>
                </div>
                <div class="input-field col s3 offset-s5">
                  <form method="post" action="searchthis-loren.php">
                    <div class="$row">
                      <div class="col s12">
                        <label for="search">Search</label>
                        <input id="search" type="text" name="search" class="validate">
                      </div>
                      <div class="col s4">
                        <input type="submit" class="btn blue lighten-2 white-text" value="Search">
                      </div>
                    </div>
                  </form>

                </div>
              </div>



        <!-- Data list -->

        <div class="row">

          <div class="col s12">
            <div class='chip teal white-text teal lighten-2'>
                Result :

            </div>


          <ul class="collapsible">
            <li>
              <div class='collapsible-header'>
                <div class='col s12 blue-text text-lighten-2  '>Scholar Provider Names</div>
              </div>
            </li>
            <?php

            $sql = "SELECT * FROM scholar_provider;";
            $result = $conn->query($sql);
            if ($result->num_rows>0) {
              # code...
              while ($row = $result->fetch_assoc()) {
                $id = $row['provider_id'];
                # code...
                echo "
                <li>
                  <div class='collapsible-header'>
                    <div class='col s10 blue-text text-lighten-2' id='edit$id'>".$row['provider_name']."</div>
                    <div class='col s1'>

                        <i class='material-icons small blue-text modal-trigger' href='#edit-modal' onclick='editProviderid(".$row['provider_id'].");'>edit</i>

                    </div>
                    <div class='col s1'>
                      <a href = 'scholar_delete.php?q=". $row['provider_id']. "'>
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
      </div>
    </div>
    <!-- Modal Structure -->
    <div id="modal1" class="modal">
      <div class="modal-content">
        <h5>Add New Scholar</h5>
        <div class="card-action">
          <div class="row">
             <form class="col s12" method="post" action="provider-insert.php">
            <div class="row">
              <div class="input-field col s12">
                <input id="provider-name" name="provider-name" type="text" class="validate">
                <label for="provider-name">Provider Name</label>
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
  <!--    END OF MODAL STRACTURE -->
  <!-- Modal Structure -->
  <div id="edit-modal" class="modal">
    <div class="modal-content">
      <h5>Edit Provider Name</h5>
      <div class="card-action">
        <div class="row">
           <form class="col s12" method="post" action="provider-insert.php">
          <div class="row">
            <div class="input-field col s12">
              <input id="edit-provider-name" name="provider-name" type="text" class="validate" value="l">
              <label for="edit-provider-name">Provider Name</label>
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


     </script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
<!-- <i class="teal-text text-lighten-2 material-icons prefix announcement icon"> -->
</body>
</html>
<?php $_SESSION['search_item'] = ""; ?>
