<?php
 function university_files(){
    
   wp_enqueue_style('restaurant_main_styles',get_stylesheet_uri());

    wp_enqueue_style('custom-google-font','https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    
    wp_enqueue_style('custom-google-font','https://fonts.googleapis.com/css?family=Josefin+Sans');

    wp_enqueue_style('custom-google-font','https://fonts.googleapis.com/css?family=Nothing+You+Could+Do');

    wp_enqueue_script('jquery-min-js', get_theme_file_uri('/js/jquery.min.js'), array('jquery'), '1.0', true);

    wp_enqueue_script('main-2-js', get_theme_file_uri('/js/jquery-migrate-3.0.1.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('main-3-js', get_theme_file_uri('/js/popper.min.js'), NULL, '1.0', true);
    wp_enqueue_script('main-4-js', get_theme_file_uri('/js/bootstrap.min.js'), NULL, '1.0', true);
    wp_enqueue_script('main-5-js', get_theme_file_uri('/js/jquery.easing.1.3.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('main-6-js', get_theme_file_uri('/js/jquery.waypoints.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('main-7-js', get_theme_file_uri('/js/jquery.stellar.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('main-8-js', get_theme_file_uri('/js/jquery.magnific-popup.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('main-9-js', get_theme_file_uri('/js/jquery.animateNumber.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('main-10-js', get_theme_file_uri('/js/bootstrap-datepicker.js'), NULL, '1.0', true);
    wp_enqueue_script('main-11-js', get_theme_file_uri('/js/jquery.timepicker.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('main-12-js', get_theme_file_uri('/js/scrollax.min.js'), NULL, '1.0', true);
        
    wp_enqueue_script('main-aos-js', get_theme_file_uri('/js/aos.js'), NULL, '1.0', true);

    wp_enqueue_script('main-owl-carousel-js', get_theme_file_uri('/js/owl.carousel.min.js'), NULL, '1.0', true);

    wp_enqueue_script('google-map','https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false');

    wp_enqueue_script('google-map-js',get_theme_file_uri('js/google-map.js'), NULL, '1.0', true );
    wp_enqueue_script('main-restaurant-js', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
 }

 
 add_action('wp_enqueue_scripts', 'university_files');
 // type of instruction for WordPress to run, function name to run

 function restuarant_features(){
  add_theme_support('title-tag');
  }

  add_action('after_setup_theme', 'restuarant_features')
?> 