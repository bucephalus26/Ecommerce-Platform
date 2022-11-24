<!DOCTYPE html>
<head>
<html lang="en">
      <meta name = "viewport" content="with=device-width, initial-scale=1.0">
         <title>Sports4Us/About Us</title>
         <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="Stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous" />
         <link rel = "Stylesheet" href="stylesheets.css">

      </head>

      <body style="text-align: center; padding-top: 20px">
           <!--text colour background colour-->
           <nav class="navbar fixed-top px-sm-5 navbar-expand-sm navbar-dark" style="background-color: black">
            <a href="index.php" class="navbar-brand mb-0 h1"><img class="d-inline-block align-top"
                    src="images/navbar-logo.png" alt="Logo" width="50" height="50" /></a>
            <!-- hamburger menu for small devices -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarToggleExternalContent2" aria-controls="navbarToggleExternalContent1"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-dark"></i>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class=" navbar-nav">
                    <li class="nav-item active">
                        <a href="index.php" class="homeL nav-link"> Home </a>
                    </li>
                    <!-- linking to home page section on nav bar -->
                    <li class="nav-item active">
                        <a href="men.php" class="menL nav-link"> Men </a>
                    </li>
                    <!-- linking to men page section on nav bar -->
                    <li class="nav-item active">
                        <a href="women.php" class="wmenL nav-link"> Women </a>
                    </li>
                    <!-- linking to women page section on nav bar -->
                    <li class="nav-item active">
                        <a href="equipment.php" class="eqipL nav-link"> Equipment </a>
                    </li>
                    <!-- linking to equipment page section on nav bar -->
                    <li class="nav-item active">
                        <a href="login.php" class="loginL nav-link"> Login </a>
                    </li>
                    <!-- linking to login page section on nav bar -->
                    <li class="nav-item active">
                        <a href="signup.php" class="signupL nav-link"> Signup </a>
                    </li>
                    <!-- linking to signup page section on nav bar -->
                </ul>
            </div>
            <form class="d-flex">
                <input type="text" class="text form-control me-1" />
                <button type="submit" class="searchBtn btn btn-outline-light">Search</button>
            </form>
            <ul>
                <li class="nav-item">
                    <a href="index.php" class="navbar-user mb-0 h1"><img class="d-inline-block align-top mx-3"
                            src="images/user.png" alt="Logo" width="35" height="35" style="margin-top:15px" /></a>
                </li>
            </ul>
            <ul>
                <li class="nav-item">
                    <a href="" class="navbar-basket mb-0 h1"><img class="d-inline-block align-top mx-3"
                            src="images/cart.png" alt="Cart" width="35" height="35" style="margin-top:15px" /></a>
                </li>
            </ul>
        </nav>
        
        <!--About Us Page -->
      <section class=" About Us">
        <h1 id="About Us" >About Us</h1>
        <p1> </p1>
        
        <!--Column with Info-->
        <div class="row">
        <div class="about-col">
        <h3> What We Do</h3>
        <div id="content1"><img src="images/sport.png" width="150" height="100" alt=""/></div>
        <p2> Established in the year 2022, Sports4Us is your one-stop sports shop for the biggest brands – browse trainers for men and women. Plus sports fashion, clothing & accessories. We offer a variety of sports, fitness, and lifestyle brands. Our online store offers the latest in athletically-inspired performance products. We ship all across the United Kingdom.</p2>
        </div>

        <!--Column with Info-->
        <div class="about-col">
          <h3> Our Mission</h3>
          <div id="content1"><img src="Images/mission.png" width="150" height="100" alt=""/></div>
          <p3> To develop a successful business by constantly offering a wide range of quality products for sportswear, with the best level of service and in accord with the changing needs of our customers. To contribute to improvements of the nation's health through activating the values of a healthy lifestyle and by improving the quality of life of our customers.</p3>
          </div>

          <!--Column with Info-->
          <div class="about-col">
            <h3> Our Values</h3>
            <div id="content1"><img src="Images/value.png" width="150" height="100" alt=""/></div>
             <p4> We are a team! We are inspired by the opportunity of realizing ourselves through the achievement of our business's goal. We understand that all our planned successes and achievements, as well as failures, are common ones. We share a common responsibility for business results. We never avoid personal responsibility.</p4>
            </div>
        </div>

        <!--Map-->
        <section class="location"> 
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2429.5734540516632!2d-1.890406084193759!3d52.48685837980789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bc9ae4f2e4b3%3A0x9a670ba18e08a084!2sAston%20University!5e0!3m2!1sen!2snl!4v1645421709373!5m2!1sen!2snl" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          
          </section>
        </section>

            <!-- Footer -->
            <footer class="footer text-center text-lg-start text-muted "
            style="margin-top: 100px; background-color: black;">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!--Creating a container with row and coloumns  -->
                <div class="container text-center text-md-start mt-5">
                    <div class="row mt-3">
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                <!--Links  -->
                                <a class="fas fa-gem me-3 text-reset">Get connected with us</a>
                            </h6>
                            <a href="https://www.instagram.com/sports4us/">
                                <img src="images/insta.png" style="width: 30px; height: 30px; margin-top:15px"
                                    alt="IG"></a>
                            <br>
                            <a href="https://en-gb.facebook.com/astonuniversity/">
                                <img src="images/fb.png" style="width: 30px; height: 30px; margin-top:15px"
                                    alt="fb"></a>
                            <br>
                            <a href="https://www.twitter.com/sports4_us">
                                <img src="images/twitter.png" style="width: 30px; height: 30px; margin-top:15px"
                                    alt="twitter"></a>
                        </div>
                        <!-- Links to other pages -->
                        <div class="socialL col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                <a class="fas fa-gem me-3 text-reset">Useful Links</a>
                            </h6>
                            <p>
                                <a href="index.php" class="text-reset">Home</a>
                            </p>
                            <p>
                                <a href="men.php" class="text-reset">Products</a>
                            </p>
                            <p>
                                <a href="login.php" class="text-reset">Account</a>
                            </p>
                            <p>
                                <a href="Contact Page.php" class="text-reset">Contact Us</a>
                            </p>
                            <p>
                                <a href="About Us.php" class="text-reset">About Us</a>
                            </p>
                        </div>
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Newsletter -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <a class="fas fa-gem me-3 text-reset">Subscribe Newsletter</a>
                            </h6>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="subscribe btm-brdr">
                                    <form>
                                        <input type="email" placeholder="Email" />
                                        <button type="button" class="nletterBtn fill-btn">Subscribe</button>
                                    </form>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
            <!-- Copyright -->
            <div class="text-center p-4">
                © 2022 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">sports4us.com</a>
            </div>
        </footer>
</html> 
        
    
        