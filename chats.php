
<!DOCTYPE html>
<html class="fullheight">
<head>
  <?php
  include 'styles.php';
  include 'dbconnect.php';
  include 'sessions.php';
  include 'functions.php';
//  $student_name = getUserName($_REQUEST['studentnum']);

  ?>
</head>
<body>
  <?php include 'navbar.php';?>
  </div>
   <div class="row fullheight main-content">
    <?php include 'chat-side-nav.php';?>
    <div class="col s11 fullheight">
      <!-- chat list -->
      <div class="row">
        <div class="">
          <div class="chat-list">
    
          </div>
        </div>
      </div>
    </div>
    <div class="input-message-bar">
        <div class="col s6">
          <input type="text" name="" value="" placeholder="Chat Text Here">
        </div>
        <div class="col s4">
          <input type="submit" class = 'btn' name="" value="Send">
        </div>
    </div>
    <!-- <div class="input-message-bar">
      <div class="row">
        <div class="col s8">
          <input type="text" name="" value="" placeholder="Chat Text Here">
        </div>
        <div class="col s4">
          <input type="submit" class = 'btn' name="" value="Send">
        </div>
      </div>
    </div> -->
  </div>
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

  <script type="text/javascript">


  </script>
 <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
 <script type="text/javascript" src="index.js"></script>
</body>
</html>
