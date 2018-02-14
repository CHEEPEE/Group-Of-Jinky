<?php
session_start();
$sys = $_REQUEST['sys'];
$_SESSION['search_item'] = htmlspecialchars($_POST['search'], ENT_QUOTES);
$provider = $_SESSION['provider'];
echo $_SESSION['search_item'] ;
$location = 'location:sub-admin-scholar.php?q='.$provider.'&sys='.$sys;
header($location);

?>
