<?php

// add actions


/******************************************************************************/


// Add Theme supports

function bc_theme_support(){

add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'bc_theme_support');

function add_viewport_meta_tag() {
    echo "<meta charset='UTF-8'>";
    echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
}
add_action( 'wp_head', 'add_viewport_meta_tag' , '1' );

// Registring Style & Script Functions.

function bc_reg_styles(){
    
    //styles
    $version = wp_get_theme( ) -> get('Version');

    wp_enqueue_style( 'bc-style', get_stylesheet_directory_uri() . "/style.css" , array('bc-bootstrap'), $version, 'all' );
    wp_enqueue_style( 'bc-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", array(),'5.0.2', 'all' );
    wp_enqueue_style( 'bc-fontawsome', "https://use.fontawesome.com/releases/v5.15.4/css/all.css?ver=5.15.4'", array(), '5.15.4', 'all' );
    wp_enqueue_style( 'bc-fontawsome_2', "https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css?ver=5.15.4", array(), '5.15.4', 'all' );
}
add_action( 'wp_enqueue_scripts', 'bc_reg_styles');

function bc_reg_scripts(){
     // scripts

     wp_enqueue_script( 'js', get_stylesheet_directory_uri() . "/assets/js/main.js", array(), '2', true);
     wp_enqueue_script( 'bootstrap-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array(), '5.0.2', true);
}


add_action( 'wp_enqueue_scripts', 'bc_reg_scripts');




?>