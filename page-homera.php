 <?php get_header(); ?>

<div class="page-body" id="page-body">
      <section class="main_slider">
        <div class="slider">
          <div class="slider__item item first_img">
            <div class="container">
              <div class="item__inner">
                <div class="item__title">
                  <h2 class="h2">Рекламное агенство</h2><span class="subtitle">всё, что только можно сделать из букв</span>
                </div>
                <ul class="box_social">
                  <li><a class="fb" href="<?php the_field('facebook');?>"></a></li>
                  <li><a class="skype" href="<?php the_field('skype');?>"></a></li>
                  <li><a class="tw" href="<?php the_field('twitter');?>"></a></li>
                  <li><a class="inst" href="<?php the_field('inst');?>"></a></li>
                  <li><a class="viber" href="<?php the_field('viber');?>"></a></li>
                </ul>
                <div class="item__contact">
                  <div class="phone"><?php the_field('contact_mobile');?></div><a href="<?php the_permalink();?>order_ra" class="btn btn_red btn_md btn_order">оформить заказ</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="services">
        <div class="container border">
          <div class="row">
            <div class="main_services">
              <h2 class="h2_main">Услуги</h2>
              <div class="services__group group">
                <ul>
                  <li class="item">
                    <div class="item__img"><a href="<?php the_permalink();?>services_ra/svetovye-vyveski/">
                    <?php 
$image = get_field('img_svetovye_vyveski');
if( !empty($image) ): ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>
                    </a></div>
                    <div class="item__title">световые вывески</div>
                  </li>
                  <li class="item">
                    <div class="item__img"><a href="<?php the_permalink();?>services_ra/beguschie-stroki/">
                    <?php 
$image = get_field('img_beguschie_stroki');
if( !empty($image) ): ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>
                    </a></div>
                    <div class="item__title">бегущие строки</div>
                  </li>
                  <li class="item">
                    <div class="item__img"><a href="<?php the_permalink();?>services_ra/vhodnye-grupy/">
                    <?php 
$image = get_field('img_vhodnye_grupy');
if( !empty($image) ): ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>
                    </a></div>
                    <div class="item__title">входные групи</div>
                  </li>
                  <li class="item">
                    <div class="item__img"><a href="<?php the_permalink();?>services_ra/obemnye-bukvy/">
                    <?php 
$image = get_field('img_obemnye_bukvy');
if( !empty($image) ): ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>
                    </a></div>
                    <div class="item__title">объемные буквы</div>
                  </li>
                  <li class="item revers">
                    <div class="item__img"><a href="<?php the_permalink();?>services_ra/neonovaya-reklama/">
                    <?php 
$image = get_field('img_neonovaya_reklama');
if( !empty($image) ): ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>
                    </a></div>
                    <div class="item__title">неоновая реклама</div>
                  </li>
                  <li class="item revers">
                    <div class="item__img"><a href="<?php the_permalink();?>services_ra/oformlenie-transporta/">
                    <?php 
$image = get_field('img_oformlenie_transporta');
if( !empty($image) ): ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>
                    </a></div>
                    <div class="item__title">оформление транспорта</div>
                  </li>
                  <li class="item revers">
                    <div class="item__img"><a href="<?php the_permalink();?>services_ra/nesvetovye-vyveski/">
                    <?php 
$image = get_field('img_nesvetovye_vyveski');
if( !empty($image) ): ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>
                    </a></div>
                    <div class="item__title">несветовые вывески</div>
                  </li>
                  <li class="item revers">
                    <div class="item__img"><a href="<?php the_permalink();?>services_ra/neonovoe-proizvodstvo/">
                    <?php 
$image = get_field('img_neonovoe_proizvodstvo');
if( !empty($image) ): ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>
                    </a></div>
                    <div class="item__title">неоновое производство </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="services_more">
        <div class="container border">
          <div class="row">
            <div class="services_more__wrap">
              <h2 class="h2_main">дополнительные услуги</h2>
              <div class="flex-row flex-wrap"><a class="services_more__item" href="#">
                  <div class="services_more__img"><img src="../img/services_more.png"></div>
                  <div class="services_more__title">материалы для наружной рекламы</div></a><a class="services_more__item" href="#">
                  <div class="services_more__img"><img src="../img/services_more.png"></div>
                  <div class="services_more__title">облицовка фасадов акп</div></a><a class="services_more__item" href="#">
                  <div class="services_more__img"><img src="../img/services_more.png"></div>
                  <div class="services_more__title">неоновое производставо</div></a><a class="services_more__item" href="#">
                  <div class="services_more__img"><img src="../img/services_more.png"></div>
                  <div class="services_more__title">порезка на плоттере</div></a><a class="services_more__item" href="#">
                  <div class="services_more__img"><img src="../img/services_more.png"></div>
                  <div class="services_more__title">фрезерно-гравировальные работы</div></a></div>
              <div class="wrap-section-nav"><a class="icon_section-nav" href="javascript://0" onclick="slowScroll('.info-grafic')"></a></div>
            </div>
          </div>
        </div>
      </section>
      <section class="info-grafic">
        <div class="container img-man">
          <div class="row">
            <div class="info-grafic__wrap">
              <div class="info-grafic__title">
                <h2 class="h2_main">инфо графика</h2>
              </div>
              <div class="info-grafic__content">
                <div class="img">
                  <?php 
                  $image = get_field('img_infographics');
                  if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
              </div>
                <div class="info-grafic__box">
                  <p class="text_top">Здесь вы можете увидеть как мы день ото дня улучшаем, увеличиваем, наращиваем, оттачиваем и доводим до совершенства.</p>
                  <p class="text_bottom">Здесь вы можете увидеть как мы день ото дня улучшаем, увеличиваем, наращиваем, оттачиваем и доводим до совершенства.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="main_gallery">
        <div class="container">
          <div class="row">
            <div class="main_gallery_bg"></div>
            <div class="main_gallery__content main_gallery__content_main-ra">
              <h2 class="h2_main">Галерея</h2>
              <p class="main_gallery__subtext">здесь вы можете увидеть варианты наших работ и убедится в том, с какой любовью и ентузиазмом мы делаем для вас счастливые предметы, или что то типа того.</p>
              <div class="wrapper-gallery">
                <section class="gallery-block">
                  <div class="container">
                    <div class="row">
                      <div class="gallery">
                        <ul class="flex-row">
                           <?php $args=array(
                               'post_type' => 'gallery',
                               'posts_per_page'=>'12',
                               'tax_query'=>[
                                   [
                                       'taxonomy'=>'site',
                                       'field' => 'slug',
                                        'terms' => 'ra'
                                   ]
                               ]
                           ) ?>
                            <?php $galleryPost = new WP_Query($args); ?>
                                <?php if($galleryPost->have_posts()) : ?>
                                    <?php while($galleryPost->have_posts()) : $galleryPost->the_post(); ?>
                                    
                                            <li>
                                                <a href="<?php the_permalink();?>">
                                                <?php if(has_post_thumbnail()) : ?>
                                                        <?php the_post_thumbnail(); ?>
                                                    <?php endif; ?> 
                                                    </a>
                                                    </li>
                                        
                                    <?php endwhile; ?>
                                <?php endif; 
                                wp_reset_postdata();
                            ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="wrap-section-nav"><a class="icon_section-nav" href="javascript://0" onclick="slowScroll('.clients')"></a></div>
            </div>
          </div>
        </div>
      </section>
      <section class="clients clients_bg">
        <div class="container border">
          <div class="row">
            <h2 class="h2_main">Клиенты</h2>
            <div class="flex-row flex-wrap clients__items">
              <div class="item">
                <?php 
                  $image = get_field('img_client1');
                  if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                </div>
              <div class="item">
                <?php 
                  $image = get_field('img_client2');
                  if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
              </div>
              <div class="item"><?php 
                  $image = get_field('img_client3');
                  if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
              </div>
              <div class="item"><?php 
                  $image = get_field('img_client4');
                  if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
              </div>
              <div class="item"><?php 
                  $image = get_field('img_client5');
                  if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
              </div>
              <div class="item"><?php 
                  $image = get_field('img_client6');
                  if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
              </div>
              <div class="item"><?php 
                  $image = get_field('img_client7');
                  if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="new">
        <div class="container border">
          <div class="row">
            <h2 class="h2_main">Новое</h2>
            <div class="grid-wrap">
              <div class="col1">
                <div class="grid-elem">

                    
                    <?php $firstPost = new WP_Query('type=post&posts_per_page=1');?>
                    <?php if($firstPost->have_posts()) : ?>
                        <?php while($firstPost->have_posts()) : $firstPost->the_post(); ?>
                            <div class="art col_big">
                                <a class="art__img art__img_big" href="<?php the_permalink();?>">
                                    <?php if(has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php endif; ?> 
                                </a>
                                <div class="art__wrap">
                                    <p class="art__info info1"><a href="#">category</a></p>
                                    <h4 class="art__header"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                                    <p class="art__info info2"><?php the_time('j M'); ?></p>
                                    <div class="art__text"><?php the_excerpt();?></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; 
                    wp_reset_postdata();
                    ?>
                
                </div>
              </div>
              <div class="col2">
                <div class="grid-elem">
                    <?php $lastPost = new WP_Query('type=post&posts_per_page=1&offset=1');?>
                    <?php if($lastPost->have_posts()) : ?>
                        <?php while($lastPost->have_posts()) : $lastPost->the_post(); ?>
                            
                                <div class="art">
                                    <a class="art__img" href="<?php the_permalink();?>">
                                        <?php if(has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php endif; ?> 
                                    </a>
                                        <div class="art__wrap">
                                            <div class="art__info info1"><?php the_category();?></div>
                                            <h4 class="art__header"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                                            <p class="art__info info2"><?php the_time('j M'); ?></p>
                                        </div>
                                </div>
                            
                        <?php endwhile; ?>
                    <?php endif; 
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="grid-elem">
                    <?php $lastPost = new WP_Query('type=post&posts_per_page=1&offset=2');?>
                    <?php if($lastPost->have_posts()) : ?>
                        <?php while($lastPost->have_posts()) : $lastPost->the_post(); ?>
                            
                                <div class="art">
                                        <div class="art__wrap">
                                            <div class="art__info info1"><?php the_category();?></div>
                                            <h4 class="art__header"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                                            <p class="art__info info2"><?php the_time('j M'); ?></p>
                                        </div>
                                        <a class="art__img" href="<?php the_permalink();?>">
                                            <?php if(has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail(); ?>
                                            <?php endif; ?> 
                                        </a>
                                </div>      
                            
                        <?php endwhile; ?>
                    <?php endif; 
                    wp_reset_postdata();
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>

  <?php get_footer(); ?>