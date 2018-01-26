
<!DOCTYPE html>
<html class="fullheight">
  <head>
    <?php
    include 'styles.php';
    ?>
    <title></title>
  </head>
  <body>
    <div class="navbar-fixed  ">
  		<nav>

  		    <div class="nav-wrapper fixed companylogo white-text blue lighten-1" >

  		      <a href="#!" class="brand-logo white-text ">Antique Scholarship</a>

  		      <ul class="right hide-on-med-and-down blue lighten-1">
              <li><a href="#introduction">Home</a></li>
              <li><a href="announcements-page.php">Anouncements</a></li>
              <li><a href="#structure">About</a></li>
              <li><a href="#initialization">Grant</a></li>
              <li><a href="#initialization">Sign In</a></li>
  		      </ul>
  		    </div>
  		  </nav>
  	</div>
    <div class="row">
      <div class="col s12 m9 l12">
        <div >
          <h1>Section 1</h1>
          <p id="introduction" class="section scrollspy">Content
              <?php include 'lorem.php'; ?>
          </p>
        </div>

        <div >
          <h1 >Section 2</h1>
          <p id="structure" class="section scrollspy">Content
            <?php include 'lorem.php'; ?></p>
        </div>

        <div>
          <h1>Section 3</h1>
          <p  id="initialization" class="section scrollspy">Content
            <?php include 'lorem.php'; ?> </p>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
  </body>
</html>
