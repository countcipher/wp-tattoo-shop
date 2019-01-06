<?php

/*
Template Name: Home
*/


//Advanced Custom Fields
$site_background_image = get_field('site_background_image');
$hero_background = get_field('hero_background');
$first_line = get_field('first_line');
$hero_image = get_field('hero_image');
$second_line = get_field('second_line');


$first_showcase_text_margin = get_field('first_showcase_text_margin');
$first_showcase_text = get_field('first_showcase_text');
$first_showcase_image = get_field('first_showcase_image');

$first_artist_name = get_field('first_artist_name');
$first_artist_photo = get_field('first_artist_photo');
$first_artist_flip_image = get_field('first_artist_flip_image');

$second_artist_name = get_field('second_artist_name');
$second_artist_photo = get_field('second_artist_photo');
$second_artist_flip_image = get_field('second_artist_flip_image');

$third_artist_name = get_field('third_artist_name');
$third_artist_photo = get_field('third_artist_photo');
$third_artist_flip_image = get_field('third_artist_flip_image');

$second_showcase_text_margin = get_field('second_showcase_text_margin');
$second_showcase_text = get_field('second_showcase_text');
$second_showcase_image = get_field('second_showcase_image');

$google_map = get_field('google_map');
$facebook_address = get_field('facebook_address');
$twitter_address = get_field('twitter_address');
$instagram_address = get_field('instagram_address');
$hours = get_field('hours');
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('title'); ?></title>
    
<!--THIRD PARTY LINKS
================================-->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/fonts/glyphicons-halflings-regular.ttf">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/font-awesome/css/font-awesome.min.css">
    
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
        body{
            background: url("<?php echo $site_background_image['url']; ?>");
            background-position: top center;
            background-size: cover;
            background-attachment: fixed;
        }
        
        #hero .row{
            background: url("<?php echo $hero_background['url']; ?>");
            background-size: cover;
            background-position: top center;
            
        }
        #firstShowcase .first-col{
            padding-top: <?php echo $first_showcase_text_margin."px"; ?>
        }
        #secondShowcase .first-col{
             padding-top: <?php echo $second_showcase_text_margin."px"; ?>
        }
        
    
    
    
    </style>
    
</head>
<body <?php body_class(); ?>>
<!--SIZING BOX FOR TESTING PURPOSES
 ===============================-->
<!--<div id="dimensions">
    <p id="dimH">Height :</p>
    <p id="dimW">Width: </p>
</div>-->
  

<!--NAVIGATION
=================================-->
<?php include('navigation.php'); ?>
    
<!--HERO
=================================-->
<?php include('hero.php'); ?>
    
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
                  <p>
                       <?php echo $first_showcase_text; ?>
                   </p>
               </div><!--col-md-6-->
               <div class="col-md-6">
                   <img src="<?php echo $first_showcase_image['url']; ?>" alt="">
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
                   <!--<img src="assets/images/flower-gold.png" alt="">-->
                    <h1>Artists</h1>
                    <!--<img src="assets/images/flower-gold.png" alt="">-->
                </div>
            </div>
        </div>
    </section>
    
<!--ARTISTS
===================================-->
    <section id="artists">
        <div class="container-fluid">
            <div class="row">
               <a href="<?php echo home_url('/artists#firstArtistSection'); ?>">
                    <div class="cardFlipClass col-sm-4">
                       <div class="panel">
                            <img class="front" src="<?php echo $first_artist_photo['url']; ?>" alt="">
                            <img src="<?php echo $first_artist_flip_image['url']; ?>" alt="" class="back">
                        </div>
                        <div class="textWrapper">
                            <div class="text"><?php echo $first_artist_name; ?></div>
                        </div>
                    </div>
                </a>
                <a href="<?php echo home_url('/artists#secondArtistSection'); ?>">
                    <div class="cardFlipClass col-sm-4">
                       <div class="panel">
                            <img class="front" src="<?php echo $second_artist_photo['url']; ?>" alt="">
                            <img src="<?php echo $second_artist_flip_image['url']; ?>" alt="" class="back">
                        </div>
                        <div class="textWrapper">
                            <div class="text"><?php echo $second_artist_name; ?></div>
                        </div>
                    </div>
                </a>
                <a href="<?php echo home_url('/artists#thirdArtistSection'); ?>">
                    <div class="cardFlipClass col-sm-4">
                       <div class="panel">
                            <img class="front" src="<?php echo $third_artist_photo['url']; ?>" alt="">
                            <img src="<?php echo $third_artist_flip_image['url']; ?>" alt="" class="back">
                        </div>
                        <div class="textWrapper">
                            <div class="text"><?php echo $third_artist_name; ?></div>
                        </div>
                    </div>
                </a>
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
                   <p>
                        <?php echo $second_showcase_text; ?>
                   </p>
               </div>
               <div class="second-col col-md-6">
                    <img src="<?php echo $second_showcase_image['url']; ?>" alt="">
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
                    <!--<img src="assets/images/flower-gold.png" alt="">-->
                    <h1>Testimonials</h1>
                   <!-- <img src="assets/images/flower-gold.png" alt="">-->
                </div>
            </div>
        </div>
    </section>

<!--TESTIMONIALS
====================================-->
    <section id="testimonials">
        <div class="container-fluid">
            <div class="row">
                
                <?php
                    $loop1 = new WP_Query(array(
                        'post_type' => 'testimonial',
                        'orderby' => 'post_id',
                        'order' => 'ASC'
                    ));
                ?>
                
                <?php while($loop1->have_posts()) : $loop1->the_post(); ?>
                
                <div class="testimonial">
                    <img src="<?php echo the_post_thumbnail_url(); ?>">
                    <?php the_content(); ?>
                </div>
                
               <?php endwhile; ?>
                
            </div>
        </div>
    </section>
    

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
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
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
<?php wp_footer(); ?>