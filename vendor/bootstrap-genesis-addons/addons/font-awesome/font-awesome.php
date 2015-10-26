<?php

// Font Awesome

function bsga_wp_enqueue_style_font_awesome_css() {
    wp_enqueue_style( 'bsga_', get_stylesheet_directory_uri() . '/fonts/font-awesome.min.css', array('jquery'), $version, true );
}



