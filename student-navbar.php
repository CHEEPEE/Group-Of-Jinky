<ul id="dropdown1" class="dropdown-content">

	  <li class="divider"></li>
	  <li><a href="#!" class="blue-text">User Profile<i class="material-icons  user circle outline icon blue-text left"></i></a></li>
	   <li class="divider"></li>
	  <li><a href="logout.php" class="blue-text">Log out<i class="material-icons sign out icon blue-text left"></i></a></li>
	</ul>
  <?php
  $userid = $_SESSION['login_user'];
    $user_fullname;
    $sql = "SELECT * FROM student_list_scholars WHERE student_number ='$userid'";
    $user_result = $conn->query($sql);
    if ($user_result->num_rows>0) {
      # code...
      while ($row = $user_result->fetch_assoc()) {
        # code...
        $user_fullname = $row['first_name']." ".$row['last_name'];

      }
    }

   ?>
	<div class="navbar-fixed ">
		<nav>

		    <div class="nav-wrapper fixed companylogo white blue-text" >

		      <a href="#!" class="brand-logo blue-text "><i class=" medium material-icons blue-text  ">insert_emoticon</i><?php echo $user_fullname;?></a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="student-chats.php?id=" class="blue-text"><i class="material-icons blue-text comments icon left"></i>Chat</a></li>
		      	<li><a class="dropdown-trigger blue-text" href="#!" data-target="dropdown1"><i class="material-icons  user circle outline icon blue-text left"></i></a></li>
		      </ul>
		    </div>
		  </nav>
	</div>
