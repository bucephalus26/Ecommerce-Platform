.
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous" />
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
                    <!-- linking to home page section on nav bar -->
                    <li class="nav-item active">
                        <a href="men.php" class="nav-link "> Men </a>
                    </li>
                    <!-- linking to men page section on nav bar -->
                    <li class="nav-item active">
                        <a href="women.php" class="nav-link"> Women </a>
                    </li>
                    <!-- linking to women page section on nav bar -->
                    <li class="nav-item active">
                        <a href="equipment.php" class="nav-link"> Equipment </a>
                    </li>
                    <!-- linking to equipment page section on nav bar -->
                    <li class="nav-item active">
                        <a href="login.php" class="nav-link  active"> Login </a>
                    </li>
                    <!-- linking to login page section on nav bar -->
                    <li class="nav-item active">
                        <a href="signup.php" class="nav-link "> Signup </a>
                    </li>
                    <!-- linking to signup page section on nav bar -->
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
            <li class="nav-item active">
                <a href="" class="navbar-brand mb-0 h1"><img class="d-inline-block align-top mx-3" src="images/cart.png"
                        alt="Cart" width="35" height="35" style="padding-left: 5px; padding: right 20px;" /></a>
            </li>
        </nav>

        <!-- From here the code for the sign-up form starts -->
        <div class="mt-5 text-center">
            <form class="form" style="max-width: 250px; margin: auto">
                <h1 class="h3 mb=3">LOGIN</h1>
                <label for="email" class="sr-only pb-3 pt-3"></label>
                <input type="email" class="form-control" id="email" placeholder="Email" required autofocus />
                <label for="password" class="pb-3 pt-3"></label>
                <input type="password" placeholder="Password" id="password" class="form-control" />
                <!-- remember me checkbox -->
                <div class="checkbox pb-3 pt-3">
                    <label>
                        <input type="checkbox" value="remember-me" /> Remember me
                    </label>
                </div>
                <div class="mt-3">

                    <button class="loginBtn">
                        Login
                    </button>
                    <p class="pt-3 me-2">Don't have an account?</p>
                    <a href="signup.php">Create one!</a>
                </div>
                <input type="hidden" name="submitted" value="TRUE" />
            </form>
        </div>

        <footer class="text-center text-lg-start text-muted " style="margin-top: 150px; background-color: black;">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                    <br>
                    <br>

                    <a href="https://www.instagram.com/sports4us/">
                        <img src="images/insta.png" style="width: 30px;; height: 30px;;" alt="IG">

                        <a href="https://en-gb.facebook.com/astonuniversity/">
                            <img src="images/fb.png" style="width: 30px;; height: 30px;;" alt="fb">

                            <a href="https://www.twitter.com/sports4_us">
                                <img src="images/twitter.png" style="width: 30px;; height: 30px;;" alt="twitter">

                </div>
            </section>

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
                                <a href="index.php" class="text-reset">Home</a>
                            </p>
                            <p>
                                <a href="men.php" class="text-reset">Products</a>
                            </p>
                            <p>
                                <a href="login.php" class="text-reset">Account</a>
                            </p>
                            <p>
                                <a href="Contact Page.html" class="text-reset">Contact Us</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">About Us</a>
                            </p>
                        </div>
                        <!-- Newsletter -->
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
<style>
.form {
    background-color: white;
    padding: 20px 15px;
    box-shadow: 0px 10px 25px rgba(92, 99, 105, .2);
}

form,
input {
    font-family: Basic Commercial, sans-serif;
    font-weight: 400;
    font-style: normal;
    color: #000000;
    transition: color .2s ease-in-out;
    letter-spacing: .2em;
    text-transform: uppercase;

}

form button {
    background-color: black;
    border: black;
    color: white;
    padding: 10px 95px;
    font-size: 20px;
}

nav,
button {
    font-family: Basic Commercial, sans-serif;
    text-transform: uppercase;
}

footer input {
    margin-top: 25px;
    padding: 5px 53px;
    text-align: left;
}

footer button {
    background-color: grey;
    margin-top: 25px;
}

.loginBtn {
    display: block;
    margin-left: auto;
    padding: 15px 30px;
    background-color: black;
    color: white;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 30px;
    background-color: black;
    border: black;
    color: white;
    padding: 10px 75px;
    font-size: 20px;
}

.loginBtn:hover {
    background-color: grey;
    transform: translateY(-2px);
}

</style>
