<?php

$sql = "SELECT * FROM scholar_provider;";
$provider_result = $conn->query($sql);
 ?>
  <ul id="slide-out" class="sidenav blue sidenav-fixed custom-side-nav">
     <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a href="student-status.php" class="collapsible-header white-text">Status<i class="material-icons info icon white-text"></i></a>
        </li>
        <li>
          <a href="student-announcement.php" class="collapsible-header white-text">announcement<i class="material-icons announcement icon white-text"></i></a>
        </li>
        <li>
          <a href="student-manage-account.php" class="collapsible-header white-text">Manage My Account<i class="material-icons user  icon white-text"></i></a>
        </li>
      </ul>
    </li>
  </ul>
