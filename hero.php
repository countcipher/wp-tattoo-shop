<?php

$site_background_image = get_field('site_background_image');
$hero_background = get_field('hero_background');
$first_line = get_field('first_line');
$hero_image = get_field('hero_image');
$second_line = get_field('second_line');

?>
   

   
<section id="hero" class="navTrigger">
    <div class="container-fluid">
        <div class="row">
            <h1><?php echo $first_line; ?></h1>
            <img src="<?php echo $hero_image['url']; ?>" alt="">
            <h1><?php echo $second_line; ?></h1>
           <!-- <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>-->

        </div>
    </div>
</section>


