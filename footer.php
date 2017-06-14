 <?php if(!is_front_page()) : ?>
 <div class="col-lg-3 col-md-3">
                <div class="sidebar_blog">
                <?php if(is_active_sidebar('sidebar')): ?>
                    <?php dynamic_sidebar('sidebar'); ?>
                <?php endif;?>
                  
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
        <?php endif; ?>
  </div>
<footer class="wrapper footer" id="footer">
      <div class="container">
        <div class="flex-row_start">
          <div class="logo"><a href="#"></a></div>
          <div class="banner"><span>Рекламное агенство “Пик”</span><span>Творческая мастерская “Пик” </span><span>Все прав защищены законом об авторском праве.</span></div>
          <ul class="nav footer__nav">
            <li><a class="active" href="#">главная</a></li>
            <li><a href="#">услуги</a></li>
            <li><a href="#">галерея</a></li>
            <li><a href="#">блог</a></li>
            <li><a href="#">контакты</a></li>
            <li><a href="#">магазин</a></li>
          </ul>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/libs.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/common.js"></script>
<body>
</html>