
<!DOCTYPE html>
<html class="fullheight">
  <head>
    <?php
    include 'styles.php';
    ?>
    <title></title>
    <style media="screen">
    .landing-home{

    }
    .thefont{
      font-family: "Cambria Math", Times, serif;
    }
    .sub{

      font-family: "Monotype Corsiva";
    }
    .custom-background{
    	background-color: #000000b3;

    }
    .thetext{
      color: #ffff00;
    }
    .img-grant{
      border: 5px solid #404040;
      padding-bottom: 50px;
    }
    .thebackground{
      background-color: #deebf7;
    }
    .fullheight{
      height:100vh;
      min-height: 100vh;
      margin: 0;
      padding: 0;
    }
    .pydo-label{
      margin-top: 30%;
    }
    .pydo-image{
      margin: 3%
    }
    .mr-3{
      margin-right: 30px;
    }
    .grats-custom{
      padding-top: 50px;
    }
    .pydo-ant{
      color:#dae94e;
    }
    </style>
  </head>
  <body class="thebackground">
    <div class="landing-home">
      <div class="blue lighten-2">
        <!-- content -->
        <div class="navbar-fixed">
          <nav class="transparent z-depth-0">

              <div class="nav-wrapper fixed companylogo white-text blue lighten-1" >
                <ul class="left hide-on-med-and-down">

                  <li><a href="#introduction">Home</a></li>
                  <li><a href="announcements-page.php">Anouncements</a></li>
                  <li><a href="documents-page.php">Documents</a></li>
                </ul>
                <div class="right mr-3">
                  <a href="login.php">Sign In</a>
                </div>


              </div>
            </nav>
        </div>
        <!-- end content -->
      </div>

    </div>
     <!-- landing home End -->


    <div class="row thebackground fullheight">
      <div class="col s6 fullheight center pydo-image">
        <img src="images/logo_pydo.png" alt="logo" height="80%" width="80%">
      </div>
      <div class="col s5 fullheight center">
        <div class="row pydo-label">
          <div class="col s12">
            <div class = "thetext thefont pydo-ant" style="font-size: 100px;">ANTIQUE</div>
          </div>
          <h2 class="thefont" style="font-size: 75px;"> SCHOLARSHIP</h2>
            <h5 class="sub" style="font-style: italic;">"Where Mountain Meet The Sea"</h5>

        </div>

      </div>
    </div>

    <!-- pydo logo -->
    <div class="row ">
      <div class="col s12 m9 l12">


        <div class="sections-custom">
          <h3 class="center thetext">Scholarship Grants</h3>

            <!-- carosel -->
            <div class="row">


            <div class="carousel carousel-slider center">
              <div class="carousel-fixed-item center">
                <!-- <a class="btn waves-effect white grey-text darken-text-2">button</a> -->
              </div>
              <div class="carousel-item" href="#one!">
                <div class="row  grats-custom">
                  <div class="col s6">
                    <div class="container">
                      <img class="img-grant" src="images/legarda.jpg" width="370px" height="370px" alt="">
                    </div>
                  </div>
                  <div class="col s6">
                    <div class="container">
                      <div class="row">
                        <div class="col s12">
                          <h3 class="left-align thefont">Loren Legarda</h3>
                          <p>Senator</p>
                        </div>
                        <div class="col s12">
                          <p class="left-align">Lorna Regina Bautista Legarda is a Filipino environmentalist, cultural worker, journalist, and politician, notable as the only female to top two senatorial elections — 1998 and 2007. She has lineage from Antique province and Rizal province. Wikipedia

                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <p  id="grant" class="section scrollspy">
              <div class="carousel-item" href="#two!">
                <div class="row  grats-custom">
                  <div class="col s6">
                    <div class="container">
                      <img class="img-grant" src="images/cadiao.jpg" height="400xp" width="400px" alt="">
                    </div>
                  </div>
                  <div class="col s6">
                    <div class="container">
                      <div class="row">
                        <div class="col s12">
                          <h3 class="left-align thefont">Gov. Rhodora Cadiao Provincial Scholarships
                          </h3>
                          <p>Governor</p>
                        </div>
                        <div class="col s12">
                          <p width="450px" class="left-align">
                            I AM an Antiqueño born in Silay City, Negros Occidental. That is fun and sounds funny. Before the break of World War II, my parents and grandparents were already here in Silay as “sacadas” from Antique.Read more: http://www.sunstar.com.ph

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


    <div class="row thebackground">
      <div class="sections-custom" >
        <h1></h1>
        <p id="introduction" class="section scrollspy">
          <div class="row">
            <div class="col s6">
              <div class="container">
                <div class="row">
                <div style="font-size:40px;" class="thefont pydo-ant">ANTIQUE</div>
                <div style="font-size:40px;" class="black-text thefont"> Scholarship</div>
                  <div class="row">
                    <div class="col s12">
                      <h5 class="white-text">Connect with Us</h5>
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
                        <label for="email">Concern</label>
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
    <div class="row">
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15679.56549825722!2d121.95299899999999!3d10.7428546!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9128f48228342c7e!2sAntique+New+Provincial+Capitol!5e0!3m2!1sen!2sph!4v1519118635943" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>


   <!-- javascript -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
  </body>
</html>
