<?php

function ts_enqueue(){
    wp_register_style('ts_custom_css', get_template_directory_uri().'/assets/css/custom.css');
    
    wp_enqueue_style('ts_custom_css');
}

add_action('wp_enqueue_scripts', 'ts_enqueue');

function ts_theme_support(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'ts_theme_support');