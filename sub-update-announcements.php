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



$id = $_SESSION['announcement_id'];
$annoucnements_title = $_POST['announcement_title'];
$announcements_subject = $_POST['announcement_subject'];
$announcements_body = $_POST['announcement_body'];
$date = date("h:i:a")." ". date("l"). ", " .getMonth(date("m"))." ".date("d").", ".date("Y");
$hour = date("h:i:a");



	$sql = "UPDATE announcements SET title = '$annoucnements_title',subject='$announcements_subject',message='$announcements_body',update_time_stamp = '$date'
  WHERE id = '$id'";
if ($conn->query($sql) === TRUE) {
	 $_SESSION['announcement_id'] = "";
    $_SESSION['error'] = 'Announcement Updated successfully';
  header("location:sub-announcements.php");

} else {
    echo "Error updating record: " . $conn->error;
     $_SESSION['error'] = 'successfully';
}

?>
