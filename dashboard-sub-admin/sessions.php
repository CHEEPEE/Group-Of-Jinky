<?php
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"select username,id from users where username = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['username'];
    $user_id = $row["id"];
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }

    $user_profile_sql = mysqli_query($db,"select admin_name,profile_picture from admin_profile where id = '$user_id' ");
    $row_profile = mysqli_fetch_array($user_profile_sql,MYSQLI_ASSOC);
    $user_name = $row_profile["admin_name"];
    $user_profile_picture = $row_profile["profile_picture"];
?>
