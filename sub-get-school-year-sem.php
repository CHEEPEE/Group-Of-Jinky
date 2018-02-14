<?php
include 'dbconnect.php';
include 'sessions.php';
$sys = $_POST['sys'];
$providerid= $_SESSION['provider'];
header("location:sub-admin-scholar.php?q=$providerid&sys=".$sys);
?>
