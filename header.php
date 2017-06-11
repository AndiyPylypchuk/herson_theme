<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <title><?php bloginfo('name')?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/ie-detector.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/modernizr.js"></script><!--[if lt IE 7]>  <meta http-equiv="X-UA-Compatible" content="IE=edge"/> <![endif]-->
  <?php wp_head();?>
  </head>
  <body>
    <div class="page-wrapper" id="page-wrapper">
      <header class="wrapper header" id="header">
        <div class="container">
          <div class="wrap-nav">
            <div class="logo"><a href="#"></a></div>
            <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
        </div>
      </header>
