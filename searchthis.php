<?php
session_start();
$_SESSION['search_item'] = htmlspecialchars($_POST['search'], ENT_QUOTES);
$provider = $_SESSION['provider'];
echo $_SESSION['search_item'] ;
$location = 'location:admin-scholar.php?q='.$provider;
header($location);

?>
