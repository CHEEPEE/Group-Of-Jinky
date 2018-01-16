<?php
session_start();
$_SESSION['search_item'] = $_POST['search'];
echo $_SESSION['search_item'] ;
header('location:admin-scholar-loren-legarda.php');

?>
