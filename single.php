
    <?php get_header(); ?>
<div class="page-body" id="page-body">
      <section class="section_article">
        <div class="container bg_container">
          <div class="col-md-9 col-sm-12">
            <?php if(have_posts()) : ?>
              <?php while(have_posts()) : the_post(); ?>
                <div class="main-article"><span class="main-article__date"><?php the_time('j M'); ?></span>
                  <h2 class="h2 main-article__title"><?php the_title(); ?></h2>
                  <div class="main-article__addition"><span class="color_red"><?php the_secondary_title(); ?></span><span><?php the_tags(); ?></span></div>
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
          <div class="col-md-3 col-sm-12">
            <div class="sidebar_blog">
                <?php if(is_active_sidebar('sidebar')): ?>
                    <?php dynamic_sidebar('sidebar'); ?>
                <?php endif;?>
              </div>
          </div>
        </div>
      </section>
    </div>

  <?php get_footer();?>