<?php

add_filter('genesis_footer_creds_text', 'bsg_footer_creds_filter');

function bsg_footer_creds_filter( $creds ) {
    // $rel = is_front_page() ? '' : 'rel="nofollow"';
    $creds = "";
    return $creds;
}
