<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css">
        <title>Login</title>
    </head>

    <body style="text-align: center; padding-top: 200px">
        <!--text colour background colour-->
        <nav class="navbar fixed-top px-sm-5 navbar-expand-sm navbar-dark" style="background-color: black">
            <a href="index.php" class="navbar-brand mb-0 h1"><img class="d-inline-block align-top"
                    src="images/navbar-logo.png" alt="Logo" width="50" height="50" /></a>
            <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link"> Home </a>
                    </li>
                    <li class="nav-item active">
                        <a href="login.php" class="nav-link active"> Login </a>
                    </li>
                    <li class="nav-item active">
                        <a href="signup.php" class="nav-link "> Signup </a>
                    </li>
                </ul>
            </div>
            <form class="d-flex">
                <input type="text" class="text form-control me-1" />
                <button type="submit" class="btn btn-outline-light">Search</button>
            </form>
            <li class="nav-item active">
                <a href="index.php" class="navbar-brand mb-0 h1"><img class="d-inline-block align-top mx-3"
                        src="images/user.png" alt="Logo" width="35" height="35"
                        style="padding-left: 5px; padding: right 20px;" /></a>
            </li>
        </nav>

        <!-- From here the code for the form starts -->
        <div class="mt-5 text-center">
            <form style="max-width: 250px; margin: auto">
                <h1 class="h3 mb=3">Login</h1>
                <label for="email" class="sr-only"></label>
                <input type="email" class="form-control" id="email" placeholder="Email" required autofocus />
                <label for="password"></label>
                <input type="password" placeholder="Password" id="password" class="form-control" />
                <!-- remember me checkbox -->
                <div class="checkbox pb-3 pt-3">
                    <label>
                        <input type="checkbox" value="remember-me" /> Remember me
                    </label>
                </div>
                <div class="mt-3">

                    <button class="btn btn-lg btn-dark btn-outline-light btn-block">
                        Login
                    </button>
                    <p class="pt-3 me-2">Don't have an account?</p>
                    <a href="register.php">Create one!</a>
                </div>
                <input type="hidden" name="submitted" value="TRUE" />
            </form>
        </div>
        <footer class="text-center text-lg-start text-muted " style="margin-top: 150px; background-color: black;">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="https://en-gb.facebook.com/astonuniversity/" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                <p>useful links</p>
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Home</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Products</a>
                            </p>
                            <p>
                                <a href="login.php" class="text-reset">Account</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Constact Us</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">About Us</a>
                            </p>
                        </div>
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <a href="#" class="fas fa-gem me-3 text-reset">Subscribe Newsletter</a>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="subscribe btm-brdr">
                                        <form>
                                            <input type="email" placeholder="Email" />
                                            <button type="button" class="fill-btn">Subscribe</button>
                                        </form>
                            </h6>
                        </div>

                    </div>
            </section>

            <!-- Copyright -->
            <div class="text-center p-4">
                © 2022 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">sports4us.com</a>
            </div>
            <!-- Copyright -->
        </footer>
    </body>

</html>
