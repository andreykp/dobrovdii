<?php

add_action('wp_enqueue_scripts', 'theme_dobroVdii_scripts');

function theme_dobroVdii_scripts() {

    //    wp_enqueue_style( 'my-css', get_stylesheet_directory_uri() . '/style.css' );

    wp_enqueue_style( 'root-css', get_template_directory_uri() . '/style.css' ); 

    wp_enqueue_style( 'fonts-css'
    ,  'https://fonts.googleapis.com/css2?family=Raleway:wght@300;500;700&family=Roboto:wght@300;500;700&display=swap' ); 

    wp_enqueue_style( 'modern-normalize-css'
    , 'https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/1.1.0/modern-normalize.min.css' ); 

    // SLIDER
    wp_enqueue_style( 'slick-css'
    , 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' ); 

// <link rel="stylesheet" href="<?= get_template_directory_uri() /css/main.css">
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css' );

    
    //wp_enqueue_script( 'my-js', get_template_directory_uri() . '/script.js' );

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery'
    , 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'
    , array(), null, true);

    // SLIDER
    wp_enqueue_script( 'slick-js'
    , 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js'
    , array('jquery'), null, true);

    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/script.js'
    , array('jquery','slick-js'), null, true );
}



// add_theme_support();

add_theme_support('post-thumbnails');
