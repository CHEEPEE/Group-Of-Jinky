<?php

$sql = "SELECT * FROM scholar_provider;";
$provider_result = $conn->query($sql);
 ?>
  <ul id="slide-out" class="sidenav blue darken-3 sidenav-fixed custom-side-nav">
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header white-text">Scholars<i class="material-icons users icon white-text"></i></a>
          <div class="collapsible-body">
            <ul class="blue darken-4">
              <?php
              $session_sys = $_SESSION['sys'];
                if ($provider_result->num_rows>0) {
                  # code...
                  while ($row = $provider_result->fetch_assoc()) {
                    # code...
                    echo "  <li class='' ><a href='admin-scholar.php?q=".$row['provider_id']."&sys=".$session_sys."' class='white-text' >".$row['provider_name']."</a></li>
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
          <a href="announcements.php" class="collapsible-header white-text">Announcements<i class="material-icons announcement  icon white-text"></i></a>
        </li>
        <li>
            <a href="files-management.php" class="collapsible-header white-text">Files<i class="material-icons  white-text">attach_file</i></a>
        </li>
        <li>
          <a href="admin-management.php" class="collapsible-header white-text">Management<i class="material-icons settings icon white-text"></i></a>
        </li>
        <li>
          <a href="scholar-providers.php" class="collapsible-header white-text">Scholar Provider<i class="material-icons user  icon white-text"></i></a>
        </li>
        <li>
              <a href="history_logs.php" class="collapsible-header white-text">history<i class="material-icons  white-text">history</i></a>
        </li>

      </ul>
    </li>
  </ul>
