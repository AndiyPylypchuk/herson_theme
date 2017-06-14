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