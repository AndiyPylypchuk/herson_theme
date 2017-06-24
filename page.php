
    <?php get_header(); ?>
<div class="page-body" id="page-body">
      <section class="services_word">
        <div class="wrap-title">
          <div class="container">
            <h1 class="h1 services_word__title"><?php the_title()?></h1>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12">

            <?php if(have_posts()) : ?>
              <?php while(have_posts()) : the_post(); ?>

              <article class="article">
                <h3 class="h3"><?php the_title();?></h3>
                <div class="flex-row">
                  <?php if(has_post_thumbnail()) : ?>
                          <div class="main-article__img">
                              <?php the_post_thumbnail(); ?>
                          </div>
                  <?php endif; ?>
                  <div class="article__text">
                  <?php the_content();?>
                    </div>
                </div>
              </article>

              <?php endwhile; ?>
            <?php else : ?>
            <p><?php __('No Post File'); ?></p>
            <?php endif;?>

            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
              <div class="sidebar">
                <div class="box">
                  <h4 class="header">категории</h4>
                  <div class="content">
                    <ul>
                      <li><a href="#">Деревянные слова и буквы</a></li>
                      <li><a href="#">Фоторамки</a></li>
                      <li><a href="#">Декоративные вешалки</a></li>
                      <li><a href="#">Детская метрика</a></li>
                    </ul>
                  </div>
                </div><a class="btn btn_red btn_md">оформить заказ</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="gallery-block">
        <div class="container">
          <div class="row">
            <div class="gallery">
              <ul class="flex-row">
                <li><img src="../img/img1.png"></li>
                <li><img src="../img/img2.png"></li>
                <li><img src="../img/img3.png"></li>
                <li><img src="../img/img4.png"></li>
                <li><img src="../img/img5.png"></li>
                <li><img src="../img/img6.png"></li>
                <li><img src="../img/img7.png"></li>
                <li><img src="../img/img8.png"></li>
                <li><img src="../img/img5.png"></li>
                <li><img src="../img/img4.png"></li>
                <li><img src="../img/img7.png"></li>
                <li><img src="../img/img5.png"></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="hits">
        <div class="container">
          <div class="services__best-work best-work">
            <div class="best-work__title">
              <h2 class="h2">golden hits</h2><span class="subtitle">наши лучшие изделия</span>
            </div>
            <div class="best-work__slider slider">
              <div class="slider__top js-slider-top">
                <div class="slider_top_items"><img src="/img/best-work1.png"></div>
                <div class="slider_top_items"><img src="/img/best-work2.png"></div>
                <div class="slider_top_items"><img src="/img/best-work2.png"></div>
                <div class="slider_top_items"><img src="/img/best-work2.png"></div>
                <div class="slider_top_items"><img src="/img/best-work2.png"></div>
                <div class="slider_top_items"><img src="/img/best-work2.png"></div>
              </div>
              <div class="slider__bot js-slider-bot">
                <div class="parent">
                  <div class="slider_bot_items"><img src="/img/best-work1.png"></div>
                </div>
                <div class="parent">
                  <div class="slider_bot_items"><img src="/img/best-work2.png"></div>
                </div>
                <div class="parent">
                  <div class="slider_bot_items"><img src="/img/best-work2.png"></div>
                </div>
                <div class="parent">
                  <div class="slider_bot_items"><img src="/img/best-work2.png"></div>
                </div>
                <div class="parent">
                  <div class="slider_bot_items"><img src="/img/best-work2.png"></div>
                </div>
                <div class="parent">
                  <div class="slider_bot_items"><img src="/img/best-work2.png"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  <?php get_footer();?>