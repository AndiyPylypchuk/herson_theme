
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
                    
                    <div class="main-article">
                    <h2 class="h2 main-article__title"><?php the_title(); ?></h2>
                    <div class="main-article__addition"><span class="color_red">??возможность указать источник</span>и необходимые теги ] теги</div>
                    <?php the_content();?>
                    </div>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <p><?php __('No Page File'); ?></p>
                    <?php endif;?>
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