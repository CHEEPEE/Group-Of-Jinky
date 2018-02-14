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
      </ul>
    </li>
  </ul>
