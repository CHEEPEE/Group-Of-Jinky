<?php
include 'dbconnect.php';
include 'sessions.php';
date_default_timezone_set("Asia/Manila");
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

$announcement_title= htmlspecialchars($_POST['announcement_title'], ENT_QUOTES);
$announcement_subject = htmlspecialchars($_POST['announcement_subject'], ENT_QUOTES);
$announcement_body = htmlspecialchars($_POST['announcement_body'], ENT_QUOTES);
$date = date("l"). ", " .getMonth(date("m"))." ".date("d").", ".date("Y");
$hour = date("h:i:a");
echo $hour;
echo $date;

$sql = "INSERT INTO announcements (title,subject,message,timestamp,hour) VALUES ('$announcement_title','$announcement_subject','$announcement_body','$date','$hour');";

if ($conn->query($sql) === TRUE) {
 header("location:announcements.php");
}else {
  echo "Error: " .$conn->error;
}
?>
