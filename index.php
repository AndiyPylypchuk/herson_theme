
    <?php get_header(); ?>
   <div class="page-body" id="page-body">
        <section class="section-blog">
          <div class="wrap-title">
            <div class="container">
              <div class="row">
                <div class="col-md-offset-1 col-md-11">
                  <h1 class="h1 services_word__title">Блог</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-offset-1 col-lg-8 col-md-9">
                <div class="items-wrap flex-row">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                  <article class="item">
                      <?php if(has_post_thumbnail()) : ?>
                        <div class="item__img">
                          <?php the_post_thumbnail(); ?>
                         </div>
                      <?php endif; ?> 
                    <h3 class="h3 item__title">
                        <a href="<?php the_permalink();?>">
                          <?php the_title(); ?>
                        </a>
                    </h3>
                    <p class="item__subtitle">
                    <?php the_time('F j, Y g:i a'); ?> 
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                    </p>
                    <p class="item__text"><?php the_excerpt();?></p>
                    <a class="btn btn_red btn_lg" href="#">подробнее</a>
                  </article>
                  <?php endwhile; ?>
                  <?php else : ?>
                  <p><?php __('No Post File'); ?></p>
                 <?php endif;?>
                </div>
              </div>
              <div class="col-lg-3 col-md-3">
                <div class="sidebar_blog">
                  <div class="category box">
                    <h4 class="header">категории</h4>
                    <div class="content">
                      <ul>
                        <li><a href="#">Технологии</a></li>
                        <li><a href="#">Производство</a></li>
                        <li><a href="#">Новинки</a></li>
                        <li><a href="#">События</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="arhive box">
                    <h4 class="header">Архив</h4>
                    <div class="content">
                      <ul>
                        <li><a href="#">Март 2017</a></li>
                        <li><a href="#">Февраль 2017</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
  </div>
  <?php get_footer();?>