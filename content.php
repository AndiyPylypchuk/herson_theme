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
    <?php the_secondary_title(); ?>
  </p>
  
  <div class="item__text">
    <?php the_excerpt();?>
  </div>
  <a class="btn btn_red btn_lg" href="<?php the_permalink();?>">подробнее</a>
</article>