
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
              <div class="col-md-9 col-sm-12">
                
                    <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                    
                    <div class="main-article"><span class="main-article__date"><?php the_time('j M'); ?></span>
                    <h2 class="h2 main-article__title"><?php the_title(); ?></h2>
                    <div class="main-article__addition"><span class="color_red"><?php the_secondary_title(); ?></span>и необходимые теги ] теги</div>
                        <?php if(has_post_thumbnail()) : ?>
                            <div class="main-article__img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                    <?php the_content();?>
                    </div>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <p><?php __('No Post File'); ?></p>
                    <?php endif;?>
              </div>

  <?php get_footer();?>