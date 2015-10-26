<?php

// Font Awesome CSS

function bsga_wp_enqueue_style_font_awesome_css() {
    
        wp_enqueue_style( 'bsga-font-awesome', get_stylesheet_directory_uri() . '/vendor/bootstrap-genesis-addons/addons/font-awesome/font-awesome.min.css', array(), $version );

}

add_action( 'wp_enqueue_scripts', 'bsga_wp_enqueue_style_font_awesome_css' );


