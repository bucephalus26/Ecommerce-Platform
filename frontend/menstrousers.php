<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <style>
body {
  background-image: url('images/backgroundmaybe.jpg');
}
</style>
    <title>Login</title>

</head>




<body style="text-align: center; padding-top: 200px">

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
                    <a href="men.php" class="nav-link active"> Men </a>
                </li>
                <li class="nav-item active">
                    <a href="women.php" class="nav-link"> Women </a>
                </li>
                <li class="nav-item active">
                    <a href="index.php" class="nav-link"> Equipment </a>
                </li>
                <li class="nav-item active">
                    <a href="login.php" class="nav-link "> Login </a>
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
    <div class="float-container">

        <div class="float-child">
            <div class="section-m1">
                <h3>Trousers</h3>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Click for more</button>
                <div class="dropdown-content">
                    <nav>
                        <a href="men.php">T-shirts</a>
                    </nav>
                    <nav>
                        <a href="menstrousers.php">Trousers</a>
                    </nav>
                    <nav>
                        <a href="mensshoes.php">Footwear</a>
                    </nav>
                </div>
            </div>
        </div>


        <div class="image container">
            <div class="catalogue" style="
    background-color: rgb(252, 250, 250);
    display: flex;
    flex-flow: row wrap;     
    height: fit-content;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
">
                <div class="product">
                    <div>
                        <br>
                        <br>
                        <br>
                        
                        <button onclick="menstrousers1On()" id="menstrousers1On" class="arrow"><img
                                src="images/arrowl.png" alt="" style="width:25px;height:25px"></button>
                        <img src="images/menstrousers1.jpg" style="width:100px; height: 200px;" alt="shirt 1"
                            class="thumbnail" id="menstrousersimg">
                        <button class="arrow" onclick="menstrousers1Off()" id="menstrousers1Off"><img
                                src="images/arrowr.png" alt="" style="width:25px;height:25px"></button><br>
                        <label>Size :</label>
                        <input type="radio" name="size" value="size"><strong>XS</strong>
                        <input type="radio" name="size" value="size"><strong>S </strong>
                        <input type="radio" name="size" value="size"><strong>L </strong>
                        <input type="radio" name="size" value="size"><strong>XL </strong>

                        <br><label>Colours :</label>
                        <input type="radio" name="color" value="color"><strong>Black</strong>
                        <input type="radio" name="color" value="color"><strong>White </strong>
                        <input type="radio" name="color" value="color"><strong>Blue </strong>
                        <input type="radio" name="color" value="color"><strong>Red</strong>

                        <div class="counter">
                            <button class="cart_btn" onclick="counterDec()">-</button>
                            <h5 id="counter">0</h5>
                            <button class="cart_btn" onclick="counterInc()">+</button>
                            <button class="cart">Add to cart</button>
                        </div>
                        <h4>Description</h4>
                        <br>
                        <p>
                            Bottoms feature an elasticated waist with a drawstring fastening for a secure and
                            comfortable fit that is ideal for training
                        </p>
                        Price : £19.99
                    </div>
                    <div>
                        <button onclick="adidasOn()" id="adidasOn" class="arrow"><img src="images/arrowl.png" alt=""
                                style="width:25px;height:25px"></button>
                        <img src="images/menstrousers2.jpg" style="width:150px; height:200px;" alt="shirt 2"
                            class="thumbnail">
                        <button class="arrow" onclick="adidasOff()" id="adidasOff"><img src="images/arrowr.png" alt=""
                                style="width:25px;height:25px"></button><br>
                        <label>Size :</label>
                        <input type="radio" name="size" value="size"><strong>XS</strong>
                        <input type="radio" name="size" value="size"><strong>S </strong>
                        <input type="radio" name="size" value="size"><strong>L </strong>
                        <input type="radio" name="size" value="size"><strong>XL </strong>

                        <br><label>Colours :</label>
                        <input type="radio" name="color" value="color"><strong>Black</strong>
                        <input type="radio" name="color" value="color"><strong>White </strong>
                        <input type="radio" name="color" value="color"><strong>Blue </strong>
                        <input type="radio" name="color" value="color"><strong>Red</strong>

                        <div class="counter">
                            <button class="cart_btn" onclick="counterDec1()">-</button>
                            <h5 id="counter1">0</h5>
                            <button class="cart_btn" onclick="counterInc1()">+</button>
                            <button class="cart">Add to cart</button>
                        </div>
                        <h4>Description</h4>
                        <br>
                        <p>
                            Decorated with solid colouring throughout, the Woven Pants feature an elasticated waist and
                            trims for maximum comfort plus an internal draw-cord for an added personalised fit.
                        </p>

                        Price : £15.99

                    </div>
                    <div>
                        <button onclick="adidasOn()" id="adidasOn" class="arrow"><img src="images/arrowl.png" alt=""
                                style="width:25px;height:25px"></button>
                        <img src="images/menstrousers3.jpg" style="width: 300px; height:200px;" alt="shirt 2"
                            class="thumbnail">
                        <button class="arrow" onclick="adidasOff()" id="adidasOff"><img src="images/arrowr.png" alt=""
                                style="width:25px;height:25px"></button>
                    </div><br>
                    <div>
                        <label>Size :</label>
                        <input type="radio" name="size" value="size"><strong>XS</strong>
                        <input type="radio" name="size" value="size"><strong>S </strong>
                        <input type="radio" name="size" value="size"><strong>L </strong>
                        <input type="radio" name="size" value="size"><strong>XL </strong>

                        <br><label>Colours :</label>
                        <input type="radio" name="color" value="color"><strong>Black</strong>
                        <input type="radio" name="color" value="color"><strong>White </strong>
                        <input type="radio" name="color" value="color"><strong>Blue </strong>
                        <input type="radio" name="color" value="color"><strong>Red</strong>

                        <div class="counter">
                            <button class="cart_btn" onclick="counterDec2()">-</button>
                            <h5 id="counter2">0</h5>
                            <button class="cart_btn" onclick="counterInc2()">+</button>
                            <button class="cart">Add to cart</button>
                        </div>
                        <h4>Description</h4>
                        <br>
                        <p>
                            Made from soft, stretchy fabric, the Flex Trousers help you move freely before, during and
                            after your routine. A tapered design reduces distractions and lets you focus on your
                            workout.
                        </p>
                        <div>
                            Price : £25.99
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <!-- <div class="float-container">
  <div class="float-child">
  <div class = "section-m1"><h3>Mens sports shoes</h3></div>
    <div class="dropdown">
      <button class="dropbtn">Dropdown</button>
      <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>  
  </div> -->

        <!-- <div class="image container">
    <img src="frontend/images/shoesnew.jpg" style="width:150px; height:150px;" alt="shoes1">
    <img src="images/shoe2.png" style="width:150px; height:100px;" alt="shoes2">
    <img src="frontend/images/shoesorrange.jpg" style="width:150px; height:150px;" alt="shoes3">
    </div> -->


        <!-- <div class="float-container">
            <div class="float-child">
                <div class="section-m1">
                    <h3>Mens other</h3>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Dropdown</button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
            </div>

            <div class="image container">
                <img src="images/accessory1.webp" style="width:150px; height:150px;" alt="accessory1">
                <img src="images/accessory2.jpeg" style="width:150px; height:150px;" alt="accessory2">
                <img src="images/accessory3.jpg" style="width:150px; height:150px;" alt="accessory3">


            </div> -->

        <footer class="text-center text-lg-start text-muted " style="margin-top: 150px; background-color: black;">


            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                    <br>
                    <br>

                    <a href="https://www.instagram.com/ehsanhussain_">
                        <img src="images/insta.png" style="width: 30px;; height: 30px;;" alt="IG">

                        <a href="https://en-gb.facebook.com/astonuniversity/">
                            <img src="images/fb.png" style="width: 30px;; height: 30px;;" alt="fb">

                            <a href="https://www.twitter.com/sports4_us">
                                <img src="images/twitter.png" style="width: 30px;; height: 30px;;" alt="twitter">

                </div>
                <!-- Left -->

                <!-- Right -->
                <div></div>
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
        <script>
        // variableForCounter
        var value = document.getElementById('counter').innerText;
        var value = document.getElementById('counter1').innerText;
        var value = document.getElementById('counter2').innerText;




        function menstrousersOff() {
            document.getElementById('menstrousersImg').src = "images/menstrousersback.webp";
            document.getElementById('menstrousersOff').style.display = "none";
            document.getElementById('menstrousersOn').style.display = "inline";
        }

        function menstrousersOn() {
            document.getElementById('menstrousersImg').src = "imagesmenstrousers.jpg";
            document.getElementById('menstrousersOn').style.display = "none";
            document.getElementById('menstrousersOff').style.display = "inline";
        }



        function adidasOff() {
            document.getElementById('adidasShirt').src = "images/tshirtadidasback.jpg";
            document.getElementById('adidasOff').style.display = "none";
            document.getElementById('adidasOn').style.display = "inline";
        }

        function adidasOn() {
            document.getElementById('adidasShirt').src = "images/tshirtadidas.jpg";
            document.getElementById('adidasOn').style.display = "none";
            document.getElementById('adidasOff').style.display = "inline";
        }


        function underShirtOff() {
            document.getElementById('underShirtImg').src = "images/underarmourtshirtback.jpg";
            document.getElementById('underShirtOff').style.display = "none";
            document.getElementById('underShirtOn').style.display = "inline";
        }

        function underShirtOn() {
            document.getElementById('underShirtImg').src = "images/underarmourtshirt.jpg";
            document.getElementById('underShirtOn').style.display = "none";
            document.getElementById('underShirtOff').style.display = "inline";
        }




        function counterInc() {
            document.getElementById('counter').innerText = ++value;
        }

        function counterDec() {
            if (value > 0) {
                document.getElementById('counter').innerText = --value;
            } else {
                document.getElementById('counter').innerText = value;
            }
        }
        // second counter
        function counterInc1() {
            document.getElementById('counter1').innerText = ++value;
        }

        function counterDec1() {
            if (value > 0) {
                document.getElementById('counter1').innerText = --value;
            } else {
                document.getElementById('counter1').innerText = value;
            }
        }
        // third counter
        function counterInc2() {
            document.getElementById('counter2').innerText = ++value;
        }

        function counterDec2() {
            if (value > 0) {
                document.getElementById('counter2').innerText = --value;
            } else {
                document.getElementById('counter2').innerText = value;
            }
        }
        </script>
</body>

</html>
