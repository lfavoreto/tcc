<?php

function styles_scripts() {
    wp_enqueue_style('slick', get_template_directory_uri().'/assets/dist/css/slick.css', [], null, 'all' );
    wp_enqueue_style('likely', get_template_directory_uri().'/assets/dist/css/likely.css', [], null, 'all' );
    wp_enqueue_style('style', get_template_directory_uri().'/assets/dist/css/style.css', [], null, 'all' );
  
    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/dist/js/jquery-3.6.0.min.js', [], null, false );
    wp_enqueue_script('slick', get_template_directory_uri().'/assets/dist/js/slick.min.js', [], null, true );
    wp_enqueue_script('likely', get_template_directory_uri().'/assets/dist/js/likely.min.js', [], null, true );
    wp_enqueue_script('main', get_template_directory_uri().'/assets/dist/js/main.min.js', [], null, true );}
  
  add_action('wp_enqueue_scripts', 'styles_scripts');