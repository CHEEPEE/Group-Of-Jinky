
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
    <div class="col s6">
      <h5>Edit Your Profile</h5>
      <form action="student-change-pass.php?q=<?php echo $_SESSION['user_id'];?>" method="POST">
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
          <span id='message'></span>
        </form>

    </div>

  </div>
</body>
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
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="index.js"></script>
</html>
