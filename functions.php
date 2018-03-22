<?php

  function getTimeStamp(){
    date_default_timezone_set("Asia/Manila");
    $date =  date("h:i:a")." ".date("l"). ", " .getMonth(date("m"))." ".date("d").", ".date("Y");
    return $date;
  }
  function getMonth($diget_month)
  {
    $month = "";
    if ($diget_month == 1) {
      $month = "January";
    }else if ($diget_month = 2) {
      # code...
      $month = "Febuary";
    }
    else if ($diget_month = 3) {
      # code...
      $month = "March";
    }
    else if ($diget_month = 4) {
      # code...
      $month = "April";
    }
    else if ($diget_month = 5) {
      # code...
      $month = "May";
    }
    else if ($diget_month = 6) {
      # code...
      $month = "June";
    }
    else if ($diget_month = 7) {
      # code...
      $month = "July";
    }
    else if ($diget_month = 8) {
      # code...
      $month = "August";
    }
    else if ($diget_month = 9) {
      # code...
      $month = "september";
    }
    else if ($diget_month = 10) {
      # code...
      $month = "October";
    }
    else if ($diget_month = 11) {
      # code...
      $month = "November";
    }
    else if ($diget_month = 12) {
      # code...
      $month = "December";
    }
    return $month;
    # code...
  }

  function getUserName($studentNumber)
  {
    # code...
    include 'dbconnect.php';

    $sql = "SELECT * FROM student_list_scholars WHERE student_number = '$studentNumber' LIMIT 1;";
    $result = $conn->query($sql);
    if ($result->num_rows>0) {
      # code...
      while ($row = $result->fetch_assoc()) {
        # code...
        return $row['first_name']." ".$row['last_name'];
      }
    }
  }
  function getStudentName($studentNumber)
  {
    # code...
    include 'dbconnect.php';

    $sql = "SELECT * FROM student_list_scholars WHERE student_number = '$studentNumber' LIMIT 1;";
    $result = $conn->query($sql);
    if ($result->num_rows>0) {
      # code...
      while ($row = $result->fetch_assoc()) {
        # code...
        return $row['first_name']." ".$row['middle_name']." ".$row['last_name'];
      }
    }
  }

  function getFirstRegisteredUser()
  {
    # code...
    include 'dbconnect.php';

    $sql = "SELECT * FROM users WHERE role = 'student' LIMIT 1;";
    $result = $conn->query($sql);
    if ($result->num_rows>0) {
      # code...
      while ($row = $result->fetch_assoc()) {
        # code...
        return $row['id'];
      }
    }
  }

  function timeKey()
  {
    date_default_timezone_set("Asia/Manila");
    // mdHis

    return $timestamp;
  }



 ?>
