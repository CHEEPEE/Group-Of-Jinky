<ul id="dropdown1" class="dropdown-content">

	  <li class="divider"></li>
	  <li><a href="#!" class="blue-text">User Profile<i class="material-icons  user circle outline icon blue-text left"></i></a></li>
	   <li class="divider"></li>
	  <li><a href="logout.php" class="blue-text">Log out<i class="material-icons sign out icon blue-text left"></i></a></li>
	</ul>
	<div class="navbar-fixed ">
		<nav>

		    <div class="nav-wrapper fixed companylogo white blue-text" >

		      <a href="#!" class="brand-logo blue-text "><i class=" large material-icons blue-text  ">insert_emoticon</i>Admin Panel</a>

		      <ul class="right hide-on-med-and-down">

		        <li><a href="#!" class="blue-text"><i class="material-icons blue-text comments icon left"></i>Chat</a></li>
		      <li><a class="dropdown-trigger blue-text" href="#!" data-target="dropdown1"><?php echo $_SESSION['login_user'];?><i class="material-icons  user circle outline icon blue-text left"></i></a></li>
		      </ul>
		    </div>
		  </nav>
	</div>
