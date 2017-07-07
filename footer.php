
<footer class="wrapper footer" id="footer">
      <div class="container">
        <div class="flex-row_start">
          <div ><a href="#" class="logo"></a></div>
          <div class="banner"><span>Рекламное агенство “Пик”</span><span>Творческая мастерская “Пик” </span><span>Все прав защищены законом об авторском праве.</span></div>
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
                                        'menu'              => 'footer_tm',
                                        'theme_location'    => 'footer_tm',
                                        'depth'             => 2,
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
                                        'menu'              => 'footer_ra',
                                        'theme_location'    => 'footer_ra',
                                        'depth'             => 2,
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
      </div>
</footer>
</div>
  <?php wp_footer(); ?>
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/libs.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/common.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZHYvolX-ZyDTxmCCF1xyRl40IZhBPseo&amp;callback=initMap"></script>
<body>
</html>