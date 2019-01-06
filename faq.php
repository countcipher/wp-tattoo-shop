<?php

/*
Template Name: FAQ
*/

//Advanced Custom Fields

$site_background_image = get_field('site_background_image');
$hero_background = get_field('hero_background');
$first_line = get_field('first_line');
$hero_image = get_field('hero_image');
$second_line = get_field('second_line');

$faq = get_field('faq');

/*$first_artist_name = get_field('first_artist_name');
$first_artist_bio_pic = get_field('first_artist_bio_pic');
$first_artist_bio_text = get_field('first_artist_bio_text');

$second_artist_name = get_field('second_artist_name');
$second_artist_bio_pic = get_field('second_artist_bio_pic');
$second_artist_bio_text = get_field('second_artist_bio_text');

$third_artist_name = get_field('third_artist_name');
$third_artist_bio_pic = get_field('third_artist_bio_pic');
$third_artist_bio_text = get_field('third_artist_bio_text');*/

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
   <section id="hero" class="page-hero faq-hero">
    <div class="container-fluid">
        <div class="row">
            <h1><?php echo $first_line; ?></h1>
            
            <h1><?php echo $second_line; ?></h1>
           <!-- <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>-->

        </div>
    </div>
</section>

<!--FAQS
====================================-->
    <section class="navTrigger faqs">
        <div class="container-fluid">
            <div class="row">
                <?php echo $faq; ?>
            </div>
        </div>
    </section>



    
<?php include("footer0.php"); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/artists-page.js"></script>

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