  <?php get_header(); ?>

<div class="page-body" id="page-body">
      <section class="order-form">
        <div class="container">
          <div class="order-form__content">
            <h1 class="h1 order-form__title"><?php the_title(); ?></h1>
            <div class="contact__form">
              <form class="form__validate" id="orderForm" method="get" action="">
                <legend>ваша заявка будет рассмотрена в течении ...</legend>
                <dl>
                  <dd>
                    <input class="recuired" name="name" type="text" size="30" arial-required="true" value placeholder="Ф.И.О.">
                  </dd>
                  <dd>
                    <input class="recuired" name="email" type="email" size="30" arial-required="true" value placeholder="e-mail">
                  </dd>
                  <dd>
                    <input class="recuired" name="theme" type="text" size="60" arial-required="true" value placeholder="Тема">
                  </dd>
                  <dd>
                    <textarea class="recuired" name="textarea" cols="50" rows="10" arial-required="true" placeholder="текст сообщения"></textarea>
                  </dd>
                  <dd class="box-btn">
                    <button class="btn validate" type="submit" value="Submit">отправить </button>
                  </dd>
                </dl>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>

  <?php get_footer();?>