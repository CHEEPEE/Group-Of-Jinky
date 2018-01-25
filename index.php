   <?php
   include 'dbconnect.php';
   include("config.php");
   session_start();
   $_SESSION['error']="";
   $error = "";


   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']);

      $sql = "SELECT id,role FROM admins WHERE username = '$myusername' and password = '$mypassword'";

      $queryrole = mysqli_query($db,"SELECT role FROM admins WHERE username = '$myusername' and password = '$mypassword'");

    $row = mysqli_fetch_array($queryrole,MYSQLI_ASSOC);
     $adminrole = $row["role"];
       echo $adminrole;
      $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // output data of each row
            //session_register($username);
            if ($adminrole=="superadmin"){
                 $_SESSION['login_user'] = $myusername;
                 $_SESSION['search_item']=null;
                header("location: admin-scholar.php?q= ");
            }else{
                 $_SESSION['login_user'] = $myusername;
                header("location: adminpanel_account_setting.php");
            }

        } else {
            $error = "Your Login Name or Password is invalid";

        }

}
?>
<!DOCTYPE>
<html>

    <head>
           <!--Import Google Icon Font-->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/components/icon.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/components/icon.min.css">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <!-- custom css -->
    <link href="style.css" rel="stylesheet">
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>
    <body class="container center">

     <div class="row logincard">
        <div class="col l3 m2"></div>
         <div class="col s12 l6 m8">
        <div class="card center">
             <div class="container">
               <div class="row center">
                      <form class="col s12 cform" name="loginform" onsubmit="" method="post">
                        <div class="row">
                              <div class="input-field col s12">

                                     <h5 class="grey-text">User Login</h5>
                              </div>
                          <div class="input-field col s12">
                           <i class="blue-text text-lighten-2 material-icons prefix user outline icon"></i>
                            <input id="username" name="username" class="blue-text text-lighten-2" type="text" class="validate">
                            <label for="username">Username</label>
                          </div>

                          <div class="input-field col s12">
                              <i class="blue-text text-lighten-2 material-icons prefix privacy icon"></i>
                            <input id="password" name="password" class="blue-text text-lighten-2 " type="password" class="validate">
                            <label for="password">Password</label>
                          </div>

                        </div>
                        <BUTTON class="waves-effect waves-light btn blue lighten-2" type="submit" name="Login"><input type="submit" name="login" value="Log In"></BUTTON>
                        <?php echo $error;?>
                      </form>
                  </div>
             </div>
          </div>
        </div>
        <div class="col l3 m2"></div>
     </div>
   </body>
</html>
