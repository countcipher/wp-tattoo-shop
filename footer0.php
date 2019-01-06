<!--FOOTER
====================================-->
   <section id="footer">
       <div class="container-fluid">
           <div class="row">
               <div class="map col-sm-4">
                   <?php echo $google_map; ?>
               </div>
               
               <div class="col-sm-4">
                   <a target="_blank" href="<?php echo $facebook_address; ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                   <a target="_blank" href="<?php echo $twitter_address; ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                   <a target="_blank" href="<?php echo $instagram_address; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>


               </div>
               
               <div class="hours col-sm-4">
                   <h3>Opening Hours</h3>
                   <?php echo $hours; ?>
               </div>
           </div>
       </div>
       <div id="cyberLeviathan" class="container-fluid">
           <div class="row">
               <a href="http://www.cyberleviathan.com">Created By <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_white.png" alt="">
                   </a>
           </div>
       </div>
   </section>

<script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>

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

<?php wp_footer();?>