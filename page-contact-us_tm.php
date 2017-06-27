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
              <h2 class="h3">Контакты</h2>
              <div class="contact__address"><span>Адрес:</span>
                <address>0334566 Украина, Херсон. проспект Вечного противостояния. 12, оф 23  23 </address>
              </div>
              <div class="contact__contactinfo">
                <div><span class="jicons-text">email</span><span class="contact-emailto"> <a href="#">Pik@mail.com</a></span></div>
                <div><span class="jicons-text">телефон</span><span class="contact-emailto">+380(44) 354545</span></div>
                <div><span class="jicons-text">факс</span><span class="contact-emailto">+380(44) 35454</span></div>
                <div><span class="jicons-text">мобильный</span><span class="contact-emailto">093 354545234</span></div>
              </div>
              <h2 class="h3">Контактная форма</h2>
              <div class="contact__form">
                <form class="form__validate">
                  <legend>Send an email. All fields with an * are required.</legend>
                  <dl>
                    <dt>
                      <label class="hasTip recuired">Name<span class="star">&nbsp;*</span></label>
                    </dt>
                    <dd>
                      <input class="recuired" type="text" size="30" arial-required="true" recuired="recuired" value>
                    </dd>
                    <dt>
                      <label class="hasTip recuired">Email<span class="star">&nbsp;*</span></label>
                    </dt>
                    <dd>
                      <input class="recuired" type="email" size="30" arial-required="true" recuired="recuired" value>
                    </dd>
                    <dt>
                      <label class="hasTip recuired">Subject<span class="star">&nbsp;*</span></label>
                    </dt>
                    <dd>
                      <input class="recuired" type="text" size="60" arial-required="true" recuired="recuired" value>
                    </dd>
                    <dt class="inline">
                      <label class="hasTip">Send copy to yourself<span class="star">&nbsp;*</span></label>
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
                      <textarea class="recuired" cols="50" rows="10" arial-required="true" recuired="recuired"></textarea>
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