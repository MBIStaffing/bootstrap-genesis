<?php
/* Modify the Bootstrap Classes being applied
 * based on the Genesis layout chosen
 */

// modify bootstrap classes based on genesis_site_layout
add_filter('bsg-classes-to-add', 'bsg_modify_classes_based_on_template', 10, 3);
// remove unused layouts
function bsg_layout_options_modify_classes_to_add( $classes_to_add ) {
    $layout = genesis_site_layout();
    // content-sidebar          // default
    // full-width-content       // supported
    if ( 'full-width-content' === $layout ) {
        $classes_to_add['content'] = 'col-sm-12';
    }
    // sidebar-content          // supported
    if ( 'sidebar-content' === $layout ) {
        $classes_to_add['content'] = 'col-xs-12 col-sm-12 col-md-8 col-lg-9 col-md-push-4 col-lg-push-3';
        $classes_to_add['sidebar-primary'] = 'hidden-xs hidden-sm col-md-4 col-lg-3 col-md-pull-8 col-lg-pull-9';
    }

    // content-sidebar-sidebar  // supported
    if ( 'content-sidebar-sidebar' === $layout ) {
        $classes_to_add['content'] = 'col-sm-6';
        $classes_to_add['sidebar-primary'] = 'col-sm-3';
        $classes_to_add['sidebar-secondary'] = 'col-sm-3';
    }
    // sidebar-sidebar-content  // supported
    if ( 'sidebar-sidebar-content' === $layout ) {
        $classes_to_add['content'] = 'col-sm-6 col-sm-push-6';
        $classes_to_add['sidebar-primary'] = 'col-sm-3 col-sm-pull-3';
        $classes_to_add['sidebar-secondary'] = 'col-sm-3 col-sm-pull-9';
    }
    // sidebar-content-sidebar  // supported
    if ( 'sidebar-content-sidebar' === $layout ) {
        $classes_to_add['content'] = 'col-sm-6 col-sm-push-3';
        $classes_to_add['sidebar-primary'] = 'col-sm-3 col-sm-push-3';
        $classes_to_add['sidebar-secondary'] = 'col-sm-3 col-sm-pull-9';
    }
    return $classes_to_add;
};
function bsg_modify_classes_based_on_template( $classes_to_add, $context, $attr ) {
    $classes_to_add = bsg_layout_options_modify_classes_to_add( $classes_to_add );
    return $classes_to_add;
}

