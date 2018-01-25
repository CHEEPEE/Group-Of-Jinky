<?php
session_start();
$_SESSION['search_item'] = $_POST['search'];
$provider = $_SESSION['provider'];
echo $_SESSION['search_item'] ;
$location = 'location:admin-scholar.php?q='.$provider;
header($location);

?>
