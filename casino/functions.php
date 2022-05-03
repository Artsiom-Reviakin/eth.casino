<?php

add_action( 'wp_enqueue_scripts', function() {

 wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
 wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css' );
 wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
 wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );

 wp_deregister_script( 'jquery' );
 wp_register_script( 'jqeury', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' );

 wp_enqueue_script( 'jqeury' );
 wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), NULL, true );
 wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), NULL, true );
 wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), 'null', false );

});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
?>


