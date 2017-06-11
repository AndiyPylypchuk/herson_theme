<?php 
//register nav walker
require_once('wp-bootstrap-navwalker.php');

//theme support

function wpb_theme_setup(){
    //nav menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}

add_action('after_setup_theme', 'wpb_theme_setup');

?>