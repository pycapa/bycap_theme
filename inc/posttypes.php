<?php

function bycap_posttype_portfolio(){

    $labels = array(
        'name'          => _x('Portfolio', 'bycap'),
        'singular_name'  => _x('Portfolio', 'bycap'),
        'menu_name'     => _x( 'Admin Portfolio', 'Admin Menu Portfolio', 'bycap' )
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'publicity_queryable' => true,
        'show_ui'       => true,
        'show_in_menu'  => true,
        'rewrite'       => array('slug' => 'bycap-Portfolio'),
        'capability_type'   => 'post',
        'menu_icon'     => 'dashicons-format-gallery',
        'hierarchical'  => false,
        'menu_position' => 6,
        'supports'      => array('title', 'editor', 'thumbnail'),
        'show_in_rest'  => true,
        'rest_base'     => 'bycap-Portfolio'

    );
    register_post_type( 'portfolio' , $args);

};

add_action( 'init', 'bycap_posttype_portfolio' );


?>