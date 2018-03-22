<?php
include 'dbconnect.php';
include("config.php");
session_start();
$_SESSION['error']="";
$error = "";

$student_number = $_REQUEST['q'];

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
 <body class="container center grey lighten-4">

  <div class="row logincard">
     <div class="col l3 m2"></div>
      <div class="col s12 l6 m8">
     <div class="card center">
          <div class="container">
            <div class="row center">
                   <form class="col s12 cform" name="sign-up-insert.php" action="sign-up-insert.php?q=<?php echo $student_number;?>" method="post">
                     <div class="row">
                           <div class="input-field col s12">

                                  <h5 class="grey-text">User Create Account</h5>
                           </div>

                       <div class="input-field col s12">
                        <i class="blue-text text-lighten-2 material-icons prefix user outline icon"></i>
                         <input id="username" name="username" class="blue-text text-lighten-2" type="text" class="validate" disabled value="<?php echo $student_number;?>">
                         <label for="username">Username</label>
                       </div>
                       <div class="input-field col s12">
                         <select name="school">
                           <?php
                           include 'dbconnect.php';
                           $sqlgetProvider = "SELECT * FROM school_list;";
                           $provider_result = $conn->query($sqlgetProvider);
                             if ($provider_result->num_rows>0) {
                               # code...
                             echo "<option id='defaultprovider' value='' selected></option>";
                               while ($row = $provider_result->fetch_assoc()) {
                                 # code...
                                  $value = $row['school_list'];
                                  $id_value = $row['id'];
                                  echo "<option id='defaultprovider' value='$value'>$value</option>";

                               }
                             }
                           ?>
                      </select>
                      <label>School</label>
                      </div>

                     </div>

                       <div class="input-field col s12">
                           <i class="blue-text text-lighten-2 material-icons prefix privacy icon"></i>
                         <input id="password" name="password" class="blue-text text-lighten-2 " type="password" class="validate" onkeyup='check();'>
                         <label for="password">Password</label>
                       </div>
                       <div class="input-field col s12">
                           <i class="blue-text text-lighten-2 material-icons prefix privacy icon"></i>
                         <input id="confirm-password" name="confirm-password" class="blue-text text-lighten-2 " type="password" onkeyup='check();' class="validate">
                         <label for="confirm-password">Confirm Password</label>
                         <span id='message'></span>
                       </div>

                     </div>
                     <BUTTON id ='submit-btn' class="waves-effect waves-light btn blue lighten-2" type="submit" name="Login"><input type="submit" name="login" value="Create Account"></BUTTON>
                     <div class="row signuplabel red-text text-lighten-2">
                         <?php echo $error;?>
                     </div>
                   </form>
               </div>
          </div>
       </div>
     </div>
     <div class="col l3 m2"></div>
     <!-- Modal Structure -->
   <!--    END OF MODAL STRACTURE -->

   <script type="text/javascript">
   var check = function() {
    if ( document.getElementById('password').value =="") {
      document.getElementById("submit-btn").disabled = true;
     document.getElementById('message').innerHTML = '';
    }
    else {
       if (document.getElementById('password').value ==
         document.getElementById('confirm-password').value) {
         document.getElementById('message').style.color = 'green';
         document.getElementById('message').innerHTML = 'Match';
         document.getElementById("submit-btn").disabled = false;
       } else {
         document.getElementById('message').style.color = 'red';
         document.getElementById('message').innerHTML = 'not Match';
         document.getElementById("submit-btn").disabled = true;

       }
     }

    }

   </script>
   <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
  <script type="text/javascript" src="index.js"></script>

  </div>
</body>
</html>
