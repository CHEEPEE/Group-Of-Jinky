
<?php


if (isset($_POST['search-user'])) {
  # code...
  $username = $_POST['search_user'];
  $sql = "SELECT * FROM scholar_provider;";
  $provider_result = $conn->query($sql);
   ?>

    <ul id="slide-out" class="sidenav blue sidenav-fixed custom-side-nav">

      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <!-- Modal Trigger -->
            <a class="waves-effect waves-light btn modal-trigger" href="#search-person">Search</a>

            <!-- Modal Structure -->
            <div id="search-person" class="modal">
              <div class="modal-content">
                Search
                <form class="" action="chats.php?id=" method="post">
                  <input type="text" name="search_user" value="">
                  <input type="submit" name="search-user">
                </form>
              </div>
            </div>
          </li>
          <li>
            <a href="announcements.php" class="collapsible-header white-text">Home<i class="material-icons white-text">arrow_back</i></a>
          </li>

          <?php

          $registerdStudentListSql = "SELECT * FROM users WHERE role = 'student' and fullname LIKE '%$username%'  ORDER by chat_time_stamp desc";
          $regStudentsResult = $conn->query($registerdStudentListSql);
          if ($regStudentsResult->num_rows>0) {
            # code...
            while ($reg_rows = $regStudentsResult->fetch_assoc()) {
              $student_id = $reg_rows['username'];
              $usr_id =  $reg_rows['id'];
              # code...
              echo "<li><a href = 'chats.php?id=$usr_id' class='collapsible-header white-text'>".getUserName($student_id)."<i class='material-icons white-text'></i></a> </li>";
            }
          }
          ?>
        </ul>
      </li>
    </ul>
    <?php
  }else {
    # code...
    $sql = "SELECT * FROM scholar_provider;";
    $provider_result = $conn->query($sql);
     ?>
      <ul id="slide-out" class="sidenav blue sidenav-fixed custom-side-nav">
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <!-- Modal Trigger -->
              <a class="waves-effect waves-light btn modal-trigger" href="#search-person">Search</a>

              <!-- Modal Structure -->
              <div id="search-person" class="modal">
                <div class="modal-content">
                  Search
                  <form class="" action="chats.php?id=" method="post">
                    <input type="text" name="search_user" value="">
                    <input type="submit" name="search-user">
                  </form>
                </div>
              </div>
            </li>
            <li>
              <a href="announcements.php" class="collapsible-header white-text">Home<i class="material-icons white-text">arrow_back</i></a>
            </li>
            <li>

            </li>
            <?php
            $registerdStudentListSql = "SELECT * FROM users WHERE role = 'student' ORDER by chat_time_stamp desc";
            $regStudentsResult = $conn->query($registerdStudentListSql);
            if ($regStudentsResult->num_rows>0) {
              # code...

              while ($reg_rows = $regStudentsResult->fetch_assoc()) {
                $student_id = $reg_rows['username'];
                $usr_id =  $reg_rows['id'];
                # code...
                echo "<li><a href = 'chats.php?id=$usr_id' class='collapsible-header white-text'>".getUserName($student_id)."<i class='material-icons white-text'></i></a> </li>";
              }
            }
            ?>

          </ul>
        </li>
      </ul>
      <?php
      }
      ?>
