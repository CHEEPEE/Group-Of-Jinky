
<!DOCTYPE html>
<html class="fullheight">
<head>
  <?php
  include 'styles.php';
  include 'dbconnect.php';
  include 'sessions.php';
  include 'functions.php';
//  $student_name = getUserName($_REQUEST['studentnum']);

if ($_REQUEST['id']=='') {
  # code...
  $_SESSION['id'] = getFirstRegisteredUser();
}else {
  # code...
    $_SESSION['id'] = $_REQUEST['id'];
}

  ?>
</head>
<body>
  <?php include 'navbar.php';?>
  </div>
   <div class="row fullheight main-content">
    <?php include 'student-chat-side-nav.php';?>
    <div class="col s11 fullheight">
      <!-- chat list -->
      <div class="row">
        <div class="">
          <div class="chat-list" id="chat-list">
          </div>
        </div>
      </div>
    </div>
    <div class="input-message-bar white">
      <!-- <form class="" action="insert-chat.php" method="post"> -->
        <div class="col s6">
          <input type="text" id="input-message" name="input-message" placeholder="Chat Text Here">
        </div>
        <div class="col s4">
          <input type="submit" id = "send-btn" class = 'btn' name="" value="Send">
        </div>
      <!-- </form> -->

    </div>

  </div>
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

  <script type="text/javascript">
    var user_id = <?php echo $_SESSION['user_id']; ?>;
   $(document).ready(function(){

     function fetch_data()
        {
          $.ajax({
             type: "Post",
             url: "student-fetch_chat.php",
             success: function(data) {
                    var obj = $.parseJSON(data);
                   var result =""
                   $.each(obj, function() {
                      if (this['user_id']!=user_id) {
                        result+="<div class='row'><div class='custom-chip right teal white-text teal darken-2'>"+this['message']+"<br>"+this['chat_time']+"<br></div></div>";
                      }else {
                        result+="<div class='row'><div class='custom-chip left teal white-text teal darken-2'>"+this['message']+"<br>"+this['chat_time']+"<br></div></div>";
                      }
                     });
                   result = result + ""
                   $("#chat-list").html(result);
             }
           });
        }
        fetch_data();
        $(document).ready(function(){
          setInterval(function(){
         fetch_data();
       }, 1000);



      $(document).on('click', '#send-btn', function(){
      var getInputMessage = document.getElementById('input-message');
     if(getInputMessage.value != '')
     {

      $.ajax({
       url:"student-insert-chat.php",
       method:"POST",
       data:{message:getInputMessage.value},
       success:function(data)
       {
        // $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
        // $('#user_data').DataTable().destroy();
        // fetch_data();
        getInputMessage.value = "";
        fetch_data();
       }
      });
      setInterval(function(){
       $('#alert_message').html('');
      }, 5000);
     }
     else
     {
      alert("Both Fields is required");
     }
    });
});







  </script>
 <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
 <script type="text/javascript" src="index.js"></script>
</body>
</html>
