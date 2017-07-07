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
    <div class="page-wrapper">
      <div class="page-body" id="page-body">
        <div class="start_page_bg"><img class="cover" src="<?php the_post_thumbnail(); ?>">
          <div class="start_page">
            <div class="start_page__content">
              <div class="start_page__header">
                <div class="left_text start_page__box"><a class="h2" href="<?php the_permalink();?>/homera">рекламное агенство</a><span class="subtitle">всё, что только можно сделать из букв</span></div>
                <div class="logo"><a href="#"></a><span class="logo__text">рекламная группа пик</span></div>
                <div class="right_text start_page__box"><a class="h2" href="<?php the_permalink();?>/hometm">творческая мастерская</a><span class="subtitle">всё, что только может радовать вас</span></div>
              </div>
              <div class="start_page__footer"><a class="btn btn_red btn_md btn_order hide">оформить заказ</a>
                <div class="phone">+38(066)1884532</div>
                <div class="phone hide">+38(066)1884532</div>
                <div class="adress">Херсон, адрес, номер дома, отделение, служба 232777</div>
                <div>
                  <ul class="box_social">
                    <li><a class="fb" href="<?php the_field('facebook');?>"></a></li>
                    <li><a class="inst" href="<?php the_field('inst');?>"></a></li>
                    <li><a class="youtube" href="<?php the_field('youtube');?>"></a></li>
                    <li><a class="tw" href="<?php the_field('twitter');?>"></a></li>
                    <li><a class="viber" href="<?php the_field('viber');?>"></a></li>
                    <li><a class="msg" href="<?php the_field('msg');?>"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/libs.js"></script>
    <script src="js/common.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZHYvolX-ZyDTxmCCF1xyRl40IZhBPseo&amp;callback=initMap"></script>
    <script src="//localhost:35729/livereload.js"></script>
  </body>
</html>