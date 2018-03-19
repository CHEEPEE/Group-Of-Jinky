<?php

$sql = "SELECT * FROM scholar_provider;";
$provider_result = $conn->query($sql);
 ?>
  <ul id="slide-out" class="sidenav blue sidenav-fixed custom-side-nav">
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a href="student.php" class="collapsible-header white-text">Home<i class="material-icons white-text">arrow_back</i></a>
        </li>
        <?php
        $registerdStudentListSql = "SELECT * FROM users WHERE role LIKE '%admin'";
        $regStudentsResult = $conn->query($registerdStudentListSql);
        if ($regStudentsResult->num_rows>0) {
          # code...
          while ($reg_rows = $regStudentsResult->fetch_assoc()) {
            $student_id = $reg_rows['username'];
            $usr_id =  $reg_rows['id'];
            # code...
            echo "<li><a href = 'student-chats.php?id=$usr_id' class='collapsible-header white-text'>".$student_id."<i class='material-icons white-text'></i></a> </li>";
          }
        }
        ?>
      </ul>
    </li>
  </ul>
