<?php 
//register nav walker
require_once('wp-bootstrap-navwalker.php');

//theme support

function wpb_theme_setup(){
    add_theme_support('post-thumbnails');
    //nav menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}

add_action('after_setup_theme', 'wpb_theme_setup');

//excerpt lenght

function set_excerpt_lenght(){
    return 45;
}

add_filter('excerpt_lenght', 'set_excerpt_lenght');

?>