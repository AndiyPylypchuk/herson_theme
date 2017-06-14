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

    //post formats
    //add_theme_support('post-formats',array('aside', 'galary'));
}

add_action('after_setup_theme', 'wpb_theme_setup');

//excerpt lenght

function set_excerpt_lenght(){
    return 45;
}

add_filter('excerpt_lenght', 'set_excerpt_lenght');

//Widgets

function wpb_init_widgets($id){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id'   => 'sidebar',
        'before_widget' => '<div class="box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="header">',
        'after_title'   => '</h4>'
    ));
}

add_action('widgets_init','wpb_init_widgets');
?>