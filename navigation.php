<?php

$navigation_bar_logo = get_field('navigation_bar_logo');

?>
 

   <section id="navBar">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
            <div class="fullMenu wrapper">
                <ul class="first">
                    <a href="<?php echo home_url('/'); ?>"><li>Home</li></a>
                    <a href="<?php echo home_url('/artists')?>"><li>Artists</li></a>
                </ul> 
            </div>
             
              <img id="logo" src="<?php echo $navigation_bar_logo['url']; ?>" alt="">

              
              <div class="fullMenu wrapper">
               <ul class="second">
                    <a href="<?php echo home_url('/faq'); ?>"><li>FAQ</li></a>
                    <a href="<?php echo home_url('/after-care'); ?>"><li>Aftercare</li></a>
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
            
             
              <img id="logo2" src="<?php echo $navigation_bar_logo['url']; ?>" alt="">
            
            <i id="hamburger" class="fa fa-bars" aria-hidden="true"></i>
          </div>
          
          <div id="mobileMenu" class=" col-md-12">
              <ul>
                  <a href="<?php echo home_url('/'); ?>"><li>Home</li></a>
                  <a href="<?php echo home_url('/artists')?>"><li>Artists</li></a>
                  <a href="<?php echo home_url('/faq'); ?>"><li>FAQ</li></a>
                  <a href="<?php echo home_url('/after-care'); ?>"><li>Aftercare</li></a>
              </ul>
          </div>
          
      </div>
    </div>
    </section>