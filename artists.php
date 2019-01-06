<?php

/*
Template Name: Artists
*/

//Advanced Custom Fields

$artist_page_nav_logo = get_field('artist_page_nav_logo');

$site_background_image = get_field('site_background_image');
$hero_background = get_field('hero_background');
$first_line = get_field('first_line');
$hero_image = get_field('hero_image');
$second_line = get_field('second_line');

$first_artist_name = get_field('first_artist_name');
$first_artist_bio_pic = get_field('first_artist_bio_pic');
$first_artist_bio_text = get_field('first_artist_bio_text');

$second_artist_name = get_field('second_artist_name');
$second_artist_bio_pic = get_field('second_artist_bio_pic');
$second_artist_bio_text = get_field('second_artist_bio_text');

$third_artist_name = get_field('third_artist_name');
$third_artist_bio_pic = get_field('third_artist_bio_pic');
$third_artist_bio_text = get_field('third_artist_bio_text');

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
        #contentWrapper{
           overflow: hidden;
        }
        
    
    
    
    </style>
    
</head>
<body <?php body_class(); ?>>


<!--FIRST ARTIST GALLERY MODAL
================================-->
<div class="galleryModal">
   <i class="fa fa-times-circle modalExit" aria-hidden="true"></i>

    <div class="row">
        <?php
                $loop1 = new WP_Query(array(
                    'post_type' => 'firstartistgallery',
                    'orderby' => 'post_id',
                    'order' => 'DSC'
                ));
            ?>

            <?php while($loop1->have_posts()) : $loop1->the_post(); ?>

            <div class="galleryEntry">
               <img src="<?php echo the_post_thumbnail_url(); ?>">
                <h2><?php echo the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
       <?php endwhile; ?>
                
    </div>
</div>


<!--SECOND ARTIST GALLERY MODAL
================================-->
<div class="galleryModal">
   <i class="fa fa-times-circle modalExit" aria-hidden="true"></i>

    <div class="row">
        <?php
                $loop1 = new WP_Query(array(
                    'post_type' => 'secondartistgallery',
                    'orderby' => 'post_id',
                    'order' => 'DSC'
                ));
            ?>

            <?php while($loop1->have_posts()) : $loop1->the_post(); ?>

            <div class="galleryEntry">
               <img src="<?php echo the_post_thumbnail_url(); ?>">
                <h2><?php echo the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
       <?php endwhile; ?>
                
    </div>
</div>


<!--THIRD ARTIST MODAL
================================-->
<div class="galleryModal">
   <i class="fa fa-times-circle modalExit" aria-hidden="true"></i>

    <div class="row">
        <?php
                $loop1 = new WP_Query(array(
                    'post_type' => 'thirdartistgallery',
                    'orderby' => 'post_id',
                    'order' => 'DSC'
                ));
            ?>

            <?php while($loop1->have_posts()) : $loop1->the_post(); ?>

            <div class="galleryEntry">
               <img src="<?php echo the_post_thumbnail_url(); ?>">
                <h2><?php echo the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
       <?php endwhile; ?>
                
    </div>
</div>




<!--SIZING BOX FOR TESTING PURPOSES
 ===============================-->
<!--<div id="dimensions">
    <p id="dimH">Height :</p>
    <p id="dimW">Width: </p>
</div>-->
  

<!--NAVIGATION
=================================-->
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
             
              <img id="logo" src="<?php echo $artist_page_nav_logo['url']; ?>" alt="">

              
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
            
             
              <img id="logo2" src="<?php echo $artist_page_nav_logo['url']; ?>" alt="">
            
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
<!--CONTENT WRAPPER TO GALLERY WILL SCROLL PROPERLY ON SAFARI
=================================-->
<div id="contentWrapper">
<!--HERO
=================================-->
   <section id="hero" class="page-hero">
    <div class="container-fluid">
        <div class="row">
            <h1><?php echo $first_line; ?></h1>
           
            <h1><?php echo $second_line; ?></h1>
           <!-- <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>-->

        </div>
    </div>
</section>

<!--SPACER
=================================-->
   <!--<section class="spacer">
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-12"></div>
           </div>
       </div>
   </section>-->

<!--THE ARTISTS: FIRST
=================================-->
    <section id="firstArtistSection" class="navTrigger the-artists">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php echo $first_artist_bio_pic['url']; ?>" alt="">
                
                    <div class="text">
                      <h1><?php echo $first_artist_name; ?></h1>
                       <?php echo $first_artist_bio_text; ?>
                       
                       <div class="gallery-button">
                           Gallery
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--THE ARTISTS: SECOND
=================================-->
    <section id="secondArtistSection" class="the-artists">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php echo $second_artist_bio_pic['url']; ?>" alt="">
                
                    <div class="text">
                      <h1><?php echo $second_artist_name; ?></h1>
                       <?php echo $second_artist_bio_text; ?>
                       
                       <div class="gallery-button">
                           Gallery
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
<!--THE ARTISTS: THIRD
=================================-->
    <section id="thirdArtistSection" class="the-artists">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php echo $third_artist_bio_pic['url']; ?>" alt="">
                
                    <div class="text">
                      <h1><?php echo $third_artist_name; ?></h1>
                       <?php echo $third_artist_bio_text; ?>
                       
                       <div class="gallery-button">
                           Gallery
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>     
    
<?php include("footer0.php"); ?>
    </div><!--end of #contentWrapper-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/artists-page.js"></script>
<script>
    
var galleryButton = document.getElementsByClassName("gallery-button");
var galleryModal = document.getElementsByClassName("galleryModal");
var body = document.getElementsByTagName("body")[0];
var modalExit = document.getElementsByClassName("modalExit");
var contentWrapper = document.getElementById("contentWrapper");

//to open Artist 1 gallery
galleryButton[0].onclick = function(){
    galleryModal[0].style.display = "block";
    body.style.overflow = "hidden";
    contentWrapper.style.overflow = "hidden";
};    
    
//to open Artist 2 gallery
galleryButton[1].onclick = function(){
    galleryModal[1].style.display = "block";
    body.style.overflow = "hidden";
    contentWrapper.style.overflow = "hidden";
}; 
    
//to open Artist 3 gallery
galleryButton[2].onclick = function(){
    galleryModal[2].style.display = "block";
    body.style.overflow = "hidden";
    contentWrapper.style.overflow = "hidden";
};    

//to close Artist 1 gallery    
/*modalExit[0].onclick = function(){
    galleryModal[0].style.display = "none";
    body.style.overflow = "auto";
};*/

//to close any modal
$(".modalExit").click(function(){
    $(".galleryModal").css("display", "none");
    body.style.overflow = "auto";
    contentWrapper.style.overflow = "auto";
});
    
</script>

<script>
//************end of testing script***************************************
    
//window.addEventListener("resize", size);
    
/*function size(){
    var h = window.innerHeight;
    var w = window.innerWidth;
    var dimH = document.getElementById("dimH");
    var dimW = document.getElementById("dimW");
    
    dimH.innerHTML = "Height: " + h + "px";
    dimW.innerHTML = "Width: " + w + "px";
    
};*/
//*****************end of testing script*****************************
</script>