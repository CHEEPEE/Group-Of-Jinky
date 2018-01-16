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


<body class=" grey lighten-4 fullheight">
  <!-- Dropdown Structure -->
  <?php include 'navbar.php';

  ?>
  </div>


   <div class="row fullheight">

    <?php include 'sidenav.php';?>
    <div class="col s10 fullheight ">
      <div class="container announcementcontainer ">
        <form method="post" action="post-insert.php">
          <div class="row">
              <div class="col s6">
                <div class="card">
                  <div class="announcement-card">
                    <div class="input-field">
                      <input id="title" type="text" name="announcement_title" class="validate">
                      <label for="title">Title</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s6">
                <div class="card">
                  <div class="announcement-card">
                    <div class="input-field">
                      <input id="subject" type="text" name="announcement_subject" class="validate">
                      <label for="subject">Subject</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s12">
                <div class="card">
                  <div class="announcement-card">
                    <div class="input-field">
                      <textarea id="textarea1" name="announcement_body" class="materialize-textarea"></textarea>
                      <label for="textarea1">Announcement</label>
                    </div>
                  <input type="submit" class="btn blue lighten-2" value="Post announcement">
                  </div>
                </div>
              </div>
          </div>
        </form>
      </div>
    </div>
</body>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

<script type="text/javascript">


</script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="index.js"></script>
