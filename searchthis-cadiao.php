<?php
session_start();
$sys = $_REQUEST['sys'];
$_SESSION['search_item'] = $_POST['search'];
echo $_SESSION['search_item'] ;
header('location:admin-scholar-cadiao.php');


?>
