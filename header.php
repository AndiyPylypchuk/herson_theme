<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <title><?php bloginfo('name')?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/ie-detector.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/modernizr.js"></script><!--[if lt IE 7]>  <meta http-equiv="X-UA-Compatible" content="IE=edge"/> <![endif]-->
  <?php wp_head();?>
  </head>
  <body>
    <div class="page-wrapper" id="page-wrapper">
      <header class="wrapper header" id="header">
        <div class="container">

          <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid navbar-wrap">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="<?php echo home_url(); ?>">
                </a>
              </div>

                <?php
                if( is_page() ) { 
                  global $post;
                        /* Get an array of Ancestors and Parents if they exist */
                  $parents = get_post_ancestors( $post->ID );
                        /* Get the top Level page->ID count base 1, array base 0 so -1 */ 
                  $id = ($parents) ? $parents[count($parents)-1]: $post->ID;
                  if($id==4)
                  {
                    wp_nav_menu( array(
                                'menu'              => 'menu_tm',
                                'theme_location'    => 'menu_tm',
                                'depth'             => 3,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker())
                            );
                  };
                  if($id==15)
                  {
                    wp_nav_menu( array(
                                'menu'              => 'menu_ra',
                                'theme_location'    => 'menu_ra',
                                'depth'             => 3,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker())
                            );
                  };
                  
                }
                if(!is_page())
                {
                  wp_nav_menu( array(
                                'menu'              => 'menu_blog',
                                'theme_location'    => 'menu_blog',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker())
                            );
                }
                ?>

            </div>
          </nav>
        </div>
      </header>
