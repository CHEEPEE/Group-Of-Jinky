
<!DOCTYPE html>
<html class="fullheight">
  <head>
    <?php
    include 'styles.php';
    ?>
    <title></title>
    <style media="screen">
    .landing-home{

      background-image: url("images/lading.jpg")!important;
      background-size: cover;
    }
    .custom-background{
    	background-color: #000000b3;

    }
    </style>
  </head>
  <body>
    <div class="landing-home">
      <div class="custom-background">
        <!-- content -->
        <div class="navbar-fixed">
          <nav class="transparent z-depth-0">
              <div class="nav-wrapper fixed companylogo white-text  custom-background" >

                <a href="#!" class="brand-logo white-text ">Antique Scholarship</a>

                <ul class="right hide-on-med-and-down">
                  <li><a href="#introduction">Home</a></li>
                  <li><a href="announcements-page.php">Anouncements</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#grant">Grant</a></li>
                  <li><a href="index.php">Sign In</a></li>
                </ul>
              </div>
            </nav>
        </div>
        <div class="row">
          <div class="sections-custom  white-text" >
            <h1></h1>
            <p id="introduction" class="section scrollspy">
              <div class="row">
                <div class="col s6">
                  <div class="container">
                    <div class="row">
                      <h5 class="blue-text text-lighten-1">Antique SCHOLARSHIP</h5>
                      <div class="row">
                        <div class="col s12">
                          <h5>Connect with Us</h1>
                            <p id="about" class="section scrollspy">  </p>
                        </div>
                        <div class="col s12">
                            <p>Phone : +63901234568</p>
                        </div>
                        <div class="col s12">
                          <p>Email : ANTIQUESCHOLARSHIPS.COM</p>
                        </div>
                        <div class="col s12">
                          <p>Address : Antique Provincial Capitol, San Jose De Buenavista, Antique, Philippines</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col s5 grey-text">
                  <div class="card">
                    <div class="container">
                      <div class="form">
                        <div class="row">
                          <div class="col s12">
                            <h5>Contact Us</h5>
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
                          <div class="input-field col s12">
                            <input class="btn" type="submit" name="" value="send">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </p>
          </div>

        </div>

        <!-- end content -->
      </div>

    </div>
     <!-- landing home End -->
     <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15679.56549825722!2d121.95299899999999!3d10.7428546!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9128f48228342c7e!2sAntique+New+Provincial+Capitol!5e0!3m2!1sen!2sph!4v1519118635943" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

     </div>


    <div class="row">
      <div class="col s12 m9 l12">


        <div class="sections-custom">
          <h3 class="center">Scholarship Grants</h3>

            <!-- carosel -->
            <div class="row">


            <div class="carousel carousel-slider center">
              <div class="carousel-fixed-item center">
                <!-- <a class="btn waves-effect white grey-text darken-text-2">button</a> -->
              </div>
              <div class="carousel-item" href="#one!">
                <div class="row">
                  <div class="col s6">
                    <div class="container">
                      <img src="images/legarda.jpg" width="600xp" height="600px" alt="">

                    </div>
                  </div>
                  <div class="col s6">
                    <div class="container">
                      <div class="row">
                        <div class="col s12">
                          <h3>Loren Legarda</h3>
                          <p>Senator</p>
                        </div>
                        <div class="col s12">
                          <p>Lorna Regina Bautista Legarda is a Filipino environmentalist, cultural worker,
                             journalist, and politician, notable as the only female to top two senatorial
                             elections — 1998 and 2007. She has lineage from Antique province and Rizal province. 
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                    <p  id="grant" class="section scrollspy">
              <div class="carousel-item" href="#two!">
                <div class="row">
                  <div class="col s6">
                    <div class="container">
                      <img src="images/cadiao.jpg" width="600xp" height="600px" alt="">
                    </div>
                  </div>
                  <div class="col s6">
                    <div class="container">
                      <div class="row">
                        <div class="col s12">
                          <h3>Rhodora Cadiao</h3>
                          <p>Governor</p>
                        </div>
                        <div class="col s12">
                          <p>Lorna Regina Bautista Legarda is a Filipino environmentalist, cultural worker,
                             journalist, and politician, notable as the only female to top two senatorial
                             elections — 1998 and 2007. She has lineage from Antique province and Rizal province. 
                          </p>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            </div>

          </p>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
  </body>
</html>
