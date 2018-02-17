
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
  <?php include 'sub-navbar.php';

  ?>
  </div>


   <div class="row fullheight main-content">

    <?php include 'sub-sidenav.php';?>
    <div class="col s12 fullheight ">


        <div class="card listcontainer">

          <div class="col s6">
            <h5>Edit Your Profile</h5>
            <form action="sub-adminchangepass.php?q=<?php echo $_SESSION['user_id'];?>" method="POST">
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
