<!DOCTYPE html>
<head>
<html lang="en">
      <meta name = "viewport" content="with=device-width, initial-scale=1.0">
         <title>Sports4Us/Contact Us</title>
         <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="Stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous" />
         <link rel = "Stylesheet" href="sstylesheet.css">

      </head>

      <body style=" padding-top: 20px">
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
        
        <!--Contact Us Page-->
        <section class = "Contact">
             <div class  = "content">
                 <h2> Contact Us</h2>
                  <p> Need to get in touch? Fill out the form with your inquiry.</p>
                </div>
        
        <!--Contact Info with icons -->
        <div class = "Container">
            <div class = "contactInfo">
            <div class = "box">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <!--Adress Info -->
                <div class = "text">
                    <h3>Address</h3>
                    <p> Aston Street, <br> Birmingham, <br> B4 7ET </p> 
                </div>
            </div>

            <!--Contact Number Info -->
            <div class = "box">
                <div class ="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div class = "text">
                    <h3>Lets Talk</h3>
                    <p> 01234567890 </p> 
                </div>
            </div>

            <!--Email Info -->
            <div class = "box">
                <div class ="icon"><i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <div class = "text">
                    <h3>General Support</h3>
                    <p>Support@Sports4Us.com</p> 
                </div>
            </div>
        </div>

        <!--Contact Form with textboxes -->
        <div class = "ContactForm">
            <form> <h2> Send Message</h2>

            <div class="InputBox">
                <input type = "text" name =""  required = "required">
                <span> Full Name</span>
            </div>

            <div class="InputBox">
                <input type = "text" name =""  required = "required">
                <span>Email</span>
            </div>

            <div class="InputBox">
                <input type = "text" name =""  required = "required">
                <span> Phone</span>
            </div>

            <div class="InputBox">
                <textarea required = "required"></textarea>
                <span> Type Your Message....</span>
            </div>

            <!--Send Button -->
            <div class = "InputBox">
                <input type = "submit" name="" value = "Send">
            </div>
            </form>
        </div>
    </div>
    </section>
</body>

<!-- Footer -->
            <footer class="footer text-center text-lg-start text-muted "
            style="margin-top: 0px; background-color: black;">
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
        

        