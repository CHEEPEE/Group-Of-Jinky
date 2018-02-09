<?php
session_start();
$_SESSION['search_item'] = htmlspecialchars($_POST['search'], ENT_QUOTES);;
echo $_SESSION['search_item'] ;
//header('location:admin-scholar-loren-legarda.php');

?>
