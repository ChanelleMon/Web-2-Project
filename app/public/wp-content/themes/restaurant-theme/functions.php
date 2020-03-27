<?php
 function university_files(){
 wp_enqueue_style('restaurant_main_styles',get_stylesheet_uri());
    

    wp_enqueue_style('custom-google-font','https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    
    wp_enqueue_style('custom-google-font','https://fonts.googleapis.com/css?family=Josefin+Sans');

    wp_enqueue_style('custom-google-font','https://fonts.googleapis.com/css?family=Nothing+You+Could+Do');

    wp_enqueue_script('main-restaurant-js', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);

    wp_enqueue_script('main-aos-js', get_theme_file_uri('/js/aos.js'), NULL, '1.0', true);

    wp_enqueue_script('main-owl-carousel-js', get_theme_file_uri('/js/owl.carousel.min.js'), NULL, '1.0', true);
 }
 add_action('wp_enqueue_scripts', 'university_files');
 // type of instruction for WordPress to run, function name to run
?> 