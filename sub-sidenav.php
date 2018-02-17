<?php

$sql = "SELECT * FROM scholar_provider;";
$provider_result = $conn->query($sql);
 ?>
  <ul id="slide-out" class="sidenav blue sidenav-fixed custom-side-nav">
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header white-text">Scholars<i class="material-icons users icon white-text"></i></a>
          <div class="collapsible-body">
            <ul class="blue darken-2">
              <?php
              $session_sys = $_SESSION['sys'];
                if ($provider_result->num_rows>0) {
                  # code...
                  while ($row = $provider_result->fetch_assoc()) {
                    # code...
                    echo "  <li class='' ><a href='sub-admin-scholar.php?q=".$row['provider_id']."&sys=".$session_sys."' class='white-text' >".$row['provider_name']."</a></li>
                      ";
                  }
                }
              ?>
            </ul>
          </div>
        </li>
      </ul>
    </li>
     <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a href="sub-announcements.php" class="collapsible-header white-text">Announcements<i class="material-icons announcement  icon white-text"></i></a>
        </li>
        <li>
          <a class="collapsible-header white-text modal-trigger" href="#modal1">Reset Student Password<i class="material-icons undo icon white-text"></i></a>
        </li>
      </ul>
    </li>
  </ul>

  <div id="modal1" class="modal">
  <div class="modal-content">
    <div class="col s6">
      <h5>Reset Student Password</h5>
      <div class="row">

        <form class="" action="sub-student-reset-password.php" method="post">
          <div class="input-field col s10">
            <input id="student-number" name="student-number" type="text" class="validate"  onkeyup='check();'>
            <label for="student-number">Student Number</label>
            <input id='submit-btn' class="btn blue lighten-2" type="submit" name="Submit" value="Reset Password" >
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
