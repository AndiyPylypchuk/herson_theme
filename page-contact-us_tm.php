  <?php get_header(); ?>

<div class="page-body" id="page-body">
      <section class="section-contact_us">
        <div class="wrap-title">
          <div class="container">
            <div class="row">
              <div class="col-md-offset-1 col-md-11">
                <h1 class="h1 services_word__title">Контакты</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="wrap-contact">
          <div class="container">
            <div class="contact">
              <div class="contact__img">
                <div id="map"></div>
              </div>
              <?php if(have_posts()) : ?>
              <?php while(have_posts()) : the_post(); ?>
                <?php the_content();?>
              <?php endwhile; ?>
                <?php endif;?>
              <h2 class="h3">Контакты</h2>
              <div class="contact__address"><span>Адрес:</span>
                <address><?php the_field('contact_address');?></address>
              </div>
              <div class="contact__contactinfo">
                <div><span class="jicons-text">email</span><span class="contact-emailto"> <a href="#"><?php the_field('contact_email');?></a></span></div>
                <div><span class="jicons-text">телефон</span><span class="contact-emailto">+<?php the_field('contact_phone');?></span></div>
                <div><span class="jicons-text">факс</span><span class="contact-emailto"><?php the_field('contact_fax');?></span></div>
                <div><span class="jicons-text">мобильный</span><span class="contact-emailto"><?php the_field('contact_mobile');?></span></div>
              </div>
              <h2 class="h3">Контактная форма</h2>
              <div class="contact__form">
                <form class="form__validate" id="orderFormContact" method="get" action="">
                  <legend>Send an email. All fields with an * are required.</legend>
                  <dl>
                    <dt>
                      <label class="hasTip recuired">Name<span class="star">&nbsp;*</span></label>
                    </dt>
                    <dd>
                      <input class="recuired" name="name" type="text" size="30" arial-required="true" value>
                    </dd>
                    <dt>
                      <label class="hasTip recuired">Email<span class="star">&nbsp;*</span></label>
                    </dt>
                    <dd>
                      <input class="recuired" type="email" size="30" arial-required="true" name="email" value>
                    </dd>
                    <dt>
                      <label class="hasTip recuired">Subject<span class="star">&nbsp;*</span></label>
                    </dt>
                    <dd>
                      <input class="recuired" name="theme" type="text" size="60" arial-required="true" value>
                    </dd>
                    <dt class="inline">
                      <label class="hasTip">Send copy to yuorself<span class="star">&nbsp;*</span></label>
                    </dt>
                    <dd class="inline">
                      <input class="checkbox" type="checkbox" value="1">
                    </dd>
                  </dl>
                  <dl>
                    <dt>
                      <label class="hasTip recuired">Message<span class="star">&nbsp;*</span></label>
                    </dt>
                    <dd>
                      <textarea class="recuired" cols="50" rows="10" arial-required="true" name="textarea"></textarea>
                    </dd>
                    <dd>
                      <button class="btn validate" type="submit">Send Email</button>
                    </dd>
                  </dl>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>

  <?php get_footer();?>