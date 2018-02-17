
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
              <li><a href="#about">About</a></li>
              <li><a href="#initialization">Grant</a></li>
              <li><a href="index.php">Sign In</a></li>
  		      </ul>
  		    </div>
  		  </nav>
  	</div>
    <div class="row">
      <div class="col s12 m9 l12">
        <div class="sections-custom" >
          <h1></h1>
          <p id="introduction" class="section scrollspy">
            <div class="row">
              <div class="col s6">
                <img src="images/logo_pydo.png" alt="">
              </div>
              <div class="col s6">
                <div class="row">
                  <div class="col s12">
                      <h1 class="blue-text bold">ANTIQUE</h1>
                  </div>
                  <div class="col s12">
                    <h1 class="bold yellow-text">SCHOLARSHIP</h1>
                  </div>
                </div>
              </div>
            </div>
          </p>
        </div>

        <div class="">

            <div class="row sections-custom">
              <div class="row">

              </div>
              <div class="col s6 sections-custom">
                <form class="section-two-about-contact " action="#" method="post">
                  <div class="container">
                    <div class="row">
                      <div class="col s12">
                        <h3>Contact Us</h3>
                      </div>
                      <div class="input-field col s12">
                        <input id="fullname" name="fullname" type="text" class="validate">
                        <label for="fullname">Full Name</label>
                      </div>
                      <div class="input-field col s12">
                        <input id="phone-number" name="phone-number" type="text" class="validate">
                        <label for="phone-number">Phone Number</label>
                      </div>
                      <div class="input-field col s12">
                        <input id="email" name="email" type="text" class="validate">
                        <label for="email">Phone Number</label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col s6">
                <div class="row">
                  <div class="col s12">
                    <h1>Connect with Us</h1>
                      <p id="about" class="section scrollspy">  </p>
                  </div>
                  <div class="col s12">
                      <h5>Phone : +63901234568</h5>
                  </div>
                  <div class="col s12">
                    <h5>Email : ANTIQUESCHOLARSHIPS.COM</h5>
                  </div>
                  <div class="col s12">
                    <h5>Address : Antique Provincial Capitol, San Jose De Buenavista, Antique, Philippines</h5>
                  </div>
                  <div class="col s12">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d979.9713095430697!2d121.94107536190185!3d10.743327341505653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9128f48228342c7e!2sAntique+New+Provincial+Capitol!5e0!3m2!1sen!2sph!4v1518805622856" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                  </div>
                </div>

              </div>

            </div>

        </div>

        <div class="sections-custom">

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
