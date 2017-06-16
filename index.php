
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
                    <?php get_template_part('content'); ?>
                  <?php endwhile; ?>
                  <?php else : ?>
                  <p><?php __('No Post File'); ?></p>
                 <?php endif;?>
                </div>
              </div>
             
  <?php get_footer();?>