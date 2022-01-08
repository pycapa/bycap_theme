<?php

/** Adding Queries */
require_once dirname(__FILE__) . '/inc/queries.php';
/** Adding custom post type (Events) */
require_once dirname(__FILE__) . '/inc/posttypes.php';

// Actions.
add_action( 'after_setup_theme', 'bc_theme_support');
add_action( 'wp_head', 'add_viewport_meta_tag' , '1' );
add_action( 'wp_enqueue_scripts', 'bc_reg_styles');
add_action( 'wp_enqueue_scripts', 'bc_reg_scripts');
add_action( 'init', 'bc_setup' );
/******************************************************************************/
// Filters.

add_filter( 'nav_menu_link_attributes', 'bc_ul_menu_class', 10, 3 );

/******************************************************************************/
// fuction for setting up Wordpress Theme.
function bc_setup(){
    // Menu Setup
    $locations = array(
        'primary' => esc_html__( 'Desktop Primary UP Menu', 'bycap' )
    );
    register_nav_menus( $locations );
    // End menu setup

     // image size setup.
     add_image_size( 'medium', 510, 340, true );
     add_image_size( 'post_image', 510, 1000, true );
     add_image_size( 'small', 150, 150, true );
}

function bc_ul_menu_class($atts, $item, $args){
    if($args->theme_location == 'primary'){
        $atts['class']='nav-link';
    }
    return $atts;

}


/******************************************************************************/






// Add Theme supports

function bc_theme_support(){
    add_theme_support( 'title-tag' );
    add_theme_support( "custom-logo" );  
    add_theme_support( 'post-thumbnails'); 
}


function add_viewport_meta_tag() {
    echo "<meta charset='UTF-8'>";
    echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
}


// Registring Style & Script Functions.

function bc_reg_styles(){
    
    //styles
    $version = wp_get_theme( ) -> get('Version');

    wp_enqueue_style( 'bc-style', get_stylesheet_directory_uri() . "/style.css" , array('bc-bootstrap'), $version, 'all' );
    wp_enqueue_style( 'bc-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", array(),'5.0.2', 'all' );
    wp_enqueue_style( 'bc-fontawsome', "https://use.fontawesome.com/releases/v5.15.4/css/all.css?ver=5.15.4'", array(), '5.15.4', 'all' );
    wp_enqueue_style( 'bc-fontawsome_2', "https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css?ver=5.15.4", array(), '5.15.4', 'all' );
}


function bc_reg_scripts(){
     // scripts

     wp_enqueue_script( 'js', get_stylesheet_directory_uri() . "/assets/js/main.js", array(), '2', true);
     wp_enqueue_script( 'bootstrap-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array(), '5.0.2', true);
}




///// 
// own functions

function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}
?>