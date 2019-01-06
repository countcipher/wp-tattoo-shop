<!DOCTYPE html>
<html lang="en">
<head>
   <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tattoo Shop</title>
    
<!--THIRD PARTY LINKS
================================-->
    <script src="assets/js/jquery.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/fonts/glyphicons-halflings-regular.ttf">
    <link rel="stylesheet" href="assets/font-awesome/font-awesome/css/font-awesome.min.css">
    
<!--STYLESHEETS
================================-->
   <!--<link rel="stylesheet" href="assets/css/custom.css">-->
   
    <style>
        #dimensions{
            position: fixed;
            background-color: #fff;
            cursor: pointer;
            width: 100px;
            z-index: 9999;
    }
        
    
    
    
    </style>
    
</head>
<body>
<!--SIZING BOX FOR TESTING PURPOSES
 ===============================-->
<!--<div id="dimensions">
    <p id="dimH">Height :</p>
    <p id="dimW">Width: </p>
</div>-->
  
      
<!--NAVBAR
  ==============================-->
   <section id="navBar">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
            <div class="fullMenu wrapper">
                <ul class="first">
                    <a href="#"><li>Home</li></a>
                    <a href="#"><li>Artists</li></a>
                </ul> 
            </div>
             
              <img id="logo" src="assets/images/logo_md.jpg" alt="">

              
              <div class="fullMenu wrapper">
               <ul class="second">
                    <a href="#"><li>FAQ</li></a>
                    <a href="#"><li>After Care</li></a>
                </ul> 
            </div>
          </div>
          
         
          
      </div>
    </div>
    </section>
    
   <section id="mobileNavBar">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
            
             
              <img id="logo2" src="assets/images/logo_md.jpg" alt="">
            
            <i id="hamburger" class="fa fa-bars" aria-hidden="true"></i>
          </div>
          
          <div id="mobileMenu" class=" col-md-12">
              <ul>
                  <a href="#"><li>Home</li></a>
                  <a href="#"><li>Artists</li></a>
                  <a href="#"><li>FAQ</li></a>
                  <a href="#"><li>After Care</li></a>
              </ul>
          </div>
          
      </div>
    </div>
    </section>
    
<!--HERO
=================================-->
    <section id="hero">
        <div class="container-fluid">
            <div class="row">
                <h1>You want a professional touch</h1>
                <img src="assets/images/the-silhouette-3092947_640.png" alt="">
                <h1>we have you covered</h1>
               <!-- <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>-->

            </div>
        </div>
    </section>
    
<!--SPACER
=================================-->
   <section class="spacer">
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-12"></div>
           </div>
       </div>
   </section>

<!--1ST SHOWCASE
=================================-->
   <section id="firstShowcase" class="showcase">
       <div class="container-fluid">
           <div class="row">
               <div class="first-col col-md-6">
                   <p>Tattoo Studio
                   <br>
                   Bringing exceptional inked art since 1998
               </div><!--col-md-6-->
               <div class="col-md-6">
                   <img src="assets/images/nude0.jpg" alt="">
               </div><!--col-md-6-->
           </div><!--row-->
       </div><!--container-->
   </section>
   
<!--SPACER
=================================-->
   <section class="spacer">
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-12"></div>
           </div>
       </div>
   </section>
   
<!--ARTISTS HEADER
==================================-->
    <section id="firstHeader" class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                   <img src="assets/images/flower-gold.png" alt="">
                    <h1>Artists</h1>
                    <img src="assets/images/flower-gold.png" alt="">
                </div>
            </div>
        </div>
    </section>
    
<!--ARTISTS
===================================-->
    <section id="artists">
        <div class="container-fluid">
            <div class="row">
                <div class="cardFlipClass col-sm-4">
                   <div class="panel">
                        <img class="front" src="assets/images/retro-2973837_640.jpg" alt="">
                        <img src="assets/images/carFlip0.jpg" alt="" class="back">
                    </div>
                    <div class="textWrapper">
                        <div class="text"><a href="#">Maggie</a></div>
                    </div>
                </div>
                <div class="cardFlipClass col-sm-4">
                   <div class="panel">
                        <img class="front" src="assets/images/adult-1867489_1280.jpg" alt="">
                        <img src="assets/images/carFlip1.jpg" alt="" class="back">
                    </div>
                    <div class="textWrapper">
                        <div class="text"><a href="#">Jordan</a></div>
                    </div>
                </div>
                <div class="cardFlipClass col-sm-4">
                   <div class="panel">
                        <img class="front" src="assets/images/woman-2744159_640.jpg" alt="">
                        <img src="assets/images/carFlip2.jpg" alt="" class="back">
                    </div>
                    <div class="textWrapper">
                        <div class="text"><a href="#">Ashley</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<!--SPACER
=================================-->
   <section class="spacer">
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-12"></div>
           </div>
       </div>
   </section>
    
<!--2nd SHOWCASE
=================================-->
   <section id="secondShowcase" class="showcase">
       <div class="container-fluid">
           <div class="row">
               <div class="first-col col-md-6">
                   <p>“Wear your heart on your skin in this life.”
                   <br>
                   ~Sylvia Plath</p>
               </div>
               <div class="second-col col-md-6">
                   <img src="assets/images/nice-3348726_640.jpg" alt="">
               </div>
           </div>
       </div>
   </section>

<!--CTA: PHONE NUMBER HEADER
=================================-->
    <!--<section class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>Call (555) 555-1234 to Schedule An Appointment</h1>
                </div>
            </div>
        </div>
    </section>-->
    
<!--SPACER
=================================-->
   <section class="spacer">
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-12"></div>
           </div>
       </div>
   </section>

<!--1ST DIVIDER
==================================-->
    <!--<section id="firstDivider">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <img src="assets/images/collageST.jpg" alt="">
                </div>
            </div>
        </div>
    </section>-->
    
<!--SPACER
=================================-->
  <!-- <section class="spacer">
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-12"></div>
           </div>
       </div>
   </section>-->
    
<!--TESTIMONIALS HEADER
====================================-->
    <section id="secondHeader" class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <img src="assets/images/flower-gold.png" alt="">
                    <h1>Testimonials</h1>
                    <img src="assets/images/flower-gold.png" alt="">
                </div>
            </div>
        </div>
    </section>

<!--TESTIMONIALS
====================================-->
    <section id="testimonials">
        <div class="container-fluid">
            <div class="row">
                <div class="testimonial">
                    <img src="assets/images/woman-598186_640.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores iusto saepe architecto, quam incidunt tempore.</p>
                </div>
                
                <div class="testimonial">
                    <img src="assets/images/woman-598186_640.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum perferendis ipsum dolorum alias voluptatum, totam ab distinctio veniam, tempore corporis iusto minus dicta nemo provident nobis.</p>
                </div>
                
                <div class="testimonial">
                    <img src="assets/images/woman-598186_640.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum aperiam, nihil porro facilis consequatur hic error veritatis tempore incidunt suscipit consectetur non tempora.</p>
                </div>
                
                <div class="testimonial">
                    <img src="assets/images/woman-598186_640.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores iusto saepe architecto, quam incidunt tempore.</p>
                </div>
                
                <div class="testimonial">
                    <img src="assets/images/woman-598186_640.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores iusto saepe architecto, quam incidunt tempore.</p>
                </div>
                
            </div>
        </div>
    </section>


<!--FOOTER
====================================-->
   <section id="footer">
       <div class="container-fluid">
           <div class="row">
               <div class="map col-sm-4">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3026.3358616798364!2d-73.41696418480856!3d40.666568148330896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e9d453a13e18ab%3A0xdc90c1dd41e46bff!2s112+Ocean+Ave%2C+Amityville%2C+NY+11701!5e0!3m2!1sen!2sus!4v1533273996464" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>
               
               <div class="col-sm-4">
                   <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                   <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                   <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>


               </div>
               
               <div class="hours col-sm-4">
                   <h3>Opening Hours</h3>
                   <ul>
                       <li>Sunday: Closed</li>
                       <li>Monday: Closed</li>
                       <li>Tuesday: Noon to 11pm</li>
                       <li>Wednesday: Noon to 11pm</li>
                       <li>Thursday: Noon to 11pm</li>
                       <li>Friday: Noon to 11pm</li>
                       <li>Saturday: Noon to 11pm</li>
                   </ul>
               </div>
           </div>
       </div>
   </section>

<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
<script>
//************end of testing script***************************************
    
/*window.addEventListener("resize", size);
    
function size(){
    var h = window.innerHeight;
    var w = window.innerWidth;
    var dimH = document.getElementById("dimH");
    var dimW = document.getElementById("dimW");
    
    dimH.innerHTML = "Height: " + h + "px";
    dimW.innerHTML = "Width: " + w + "px";
    
};*/
//*****************end of testing script*****************************
    
</script>
</body>
</html>