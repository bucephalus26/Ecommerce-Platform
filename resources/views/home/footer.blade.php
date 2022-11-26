</div>         
           </div>
               <footer class="text-center text-lg-start text-muted " style="margin-top: 150px; background-color: black;">
   
   
                   <!-- Section: Social media -->
                   <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                       <!-- Left -->
                       <div class="me-5 d-none d-lg-block">
                           <span>Get connected with us on social networks:</span>
                           <br>
                           <br>
   
                           <a href="https://www.instagram.com/ehsanhussain_">
                               <img src="{{asset('assets')}}/img/insta.png" style="width: 30px;; height: 30px;;" alt="IG">
   
                               <a href="https://en-gb.facebook.com/astonuniversity/">
                                   <img src="{{asset('assets')}}/img/fb.png" style="width: 30px;; height: 30px;;" alt="fb">
   
                                   <a href="https://www.twitter.com/sports4_us">
                                       <img src="{{asset('assets')}}/img/twitter.png" style="width: 30px;; height: 30px;;" alt="twitter">
   
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
                                       <a href="#!" class="text-reset">Contact Us</a>
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
                                            </div>
                                        </div>
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
    <!-- Footer End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>


    <!-- Main Javascript file -->
    <script src="{{asset('assets')}}/js/main.js"></script>

    <script>
        // ***** COUNTER *****
var value= document.getElementById('counter').innerText;
var value= document.getElementById('counter1').innerText;

 function counterInc(){
  document.getElementById('counter').innerText=++value;
 }
 function counterDec(){
    if(value>0){
  document.getElementById('counter').innerText=--value;
    }
    else{
  document.getElementById('counter').innerText=value;
    }
}
// second counter
function counterInc1(){
  document.getElementById('counter1').innerText=++value;
 }
 function counterDec1(){
    if(value>0){
  document.getElementById('counter1').innerText=--value;
    }
    else{
  document.getElementById('counter1').innerText=value;
    }
}
// third counter
function counterInc2(){
  document.getElementById('counter2').innerText=++value;
 }
 function counterDec2(){
    if(value>0){
  document.getElementById('counter2').innerText=--value;
    }
    else{
  document.getElementById('counter2').innerText=value;
    }
}
    </script>
    