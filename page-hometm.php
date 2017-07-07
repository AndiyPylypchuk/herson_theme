 <?php get_header(); ?>

<div class="page-body" id="page-body">
      <section class="main_slider">
        <div class="slider js-main_slider">
          <div class="slider__item item first_img2">
            <div class="container">
              <div class="item__inner">
                <div class="item__title">
                  <h2 class="h2">Творческая мастерская</h2><span class="subtitle">всё, что только может радовать</span>
                </div>
                <ul class="box_social">
                   <li><a class="fb" href="<?php the_field('facebook');?>"></a></li>
                  <li><a class="skype" href="<?php the_field('skype');?>"></a></li>
                  <li><a class="tw" href="<?php the_field('twitter');?>"></a></li>
                  <li><a class="inst" href="<?php the_field('inst');?>"></a></li>
                  <li><a class="viber" href="<?php the_field('viber');?>"></a></li>
                </ul>
                <div class="item__contact"><a href="<?php the_permalink();?>order_ra" class="btn btn_red btn_md btn_order">оформить заказ</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="services">
        <div class="container border">
          <div class="row">
            <div class="main_services">
              <h2 class="h2_main">Услуги</h2>
              <div class="services__group group">
                <ul>
                  <li class="item">
                    <div class="item__img"><a href="<?php the_permalink();?>/svetovye-vyveski"><img src="/img/img1.png"></a></div>
                    <div class="item__title">световые вывески</div>
                  </li>
                  <li class="item">
                    <div class="item__img"><a href="#"><img src="/img/img2.png"></a></div>
                    <div class="item__title">бегущие строки</div>
                  </li>
                  <li class="item">
                    <div class="item__img"><a href="#"><img src="/img/img3.png"></a></div>
                    <div class="item__title">входные групи</div>
                  </li>
                  <li class="item">
                    <div class="item__img"><a href="#"><img src="/img/img4.png"></a></div>
                    <div class="item__title">объемные буквы</div>
                  </li>
                  <li class="item revers">
                    <div class="item__img"><a href="#"><img src="/img/img5.png"></a></div>
                    <div class="item__title">неоновая реклама</div>
                  </li>
                  <li class="item revers">
                    <div class="item__img"><a href="#"><img src="/img/img6.png"></a></div>
                    <div class="item__title">оформление транспорта</div>
                  </li>
                  <li class="item revers">
                    <div class="item__img"><a href="#"><img src="/img/img7.png"></a></div>
                    <div class="item__title">несветовые вывески</div>
                  </li>
                  <li class="item revers">
                    <div class="item__img"><a href="#"><img src="/img/img8.png"></a></div>
                    <div class="item__title">неоновое производство </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="info-grafic">
        <div class="container img-man">
          <div class="row">
            <div class="info-grafic__wrap">
              <div class="info-grafic__title">
                <h2 class="h2_main">инфо графика</h2>
              </div>
              <div class="info-grafic__content">
                <div class="img"><img src="../img/grafics.png"></div>
                <div class="info-grafic__box">
                  <p class="text_top">Здесь вы можете увидеть как мы день ото дня улучшаем, увеличиваем, наращиваем, оттачиваем и доводим до совершенства.</p>
                  <p class="text_bottom">Здесь вы можете увидеть как мы день ото дня улучшаем, увеличиваем, наращиваем, оттачиваем и доводим до совершенства.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="main_gallery">
        <div class="container">
          <div class="row">
            <div class="main_gallery_bg"></div>
            <div class="main_gallery__content">
              <div class="wrap-section-nav wrap-section-nav_top"><a class="icon_section-nav" href="#"></a></div>
              <h2 class="h2_main">Галерея</h2>
              <p class="main_gallery__subtext">здесь вы можете увидеть варианты наших работ и убедится в том, с какой любовью и ентузиазмом мы делаем для вас счастливые предметы, или что то типа того.</p>
              <div class="wrapper-gallery">
                <section class="gallery-block">
                  <div class="container">
                    <div class="row">
                      <div class="gallery">
                        <ul class="flex-row">
                          <li><img src="../img/img1.png"></li>
                          <li><img src="../img/img2.png"></li>
                          <li><img src="../img/img3.png"></li>
                          <li><img src="../img/img4.png"></li>
                          <li><img src="../img/img5.png"></li>
                          <li><img src="../img/img6.png"></li>
                          <li><img src="../img/img7.png"></li>
                          <li><img src="../img/img8.png"></li>
                          <li><img src="../img/img5.png"></li>
                          <li><img src="../img/img4.png"></li>
                          <li><img src="../img/img7.png"></li>
                          <li><img src="../img/img5.png"></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="wrap-section-nav"><a class="icon_section-nav" href="#"></a></div>
            </div>
          </div>
        </div>
      </section>
      <section class="clients clients_bg">
        <div class="container border">
          <div class="row">
            <h2 class="h2_main">Клиенты</h2>
            <div class="flex-row flex-wrap clients__items">
              <div class="item"><img src="../img/kodak2.png"></div>
              <div class="item"><img src="../img/tipox.png"></div>
              <div class="item"><img src="../img/exipia.png"></div>
              <div class="item"><img src="../img/vide.png"></div>
              <div class="item"><img src="../img/dehotel.png"></div>
              <div class="item"><img src="../img/umber.png"></div>
              <div class="item"><img src="../img/kodak.png"></div>
            </div>
          </div>
        </div>
      </section>
      <section class="new">
        <div class="container border">
          <div class="row">
            <h2 class="h2_main">Новое</h2>
            <div class="grid-wrap">
              <div class="col1">
                <div class="grid-elem">
                  <div class="art col_big"><a class="art__img art__img_big" href="#"><img src="../img/img10.png"></a>
                    <div class="art__wrap">
                      <p class="art__info info1"><a href="#">материалы</a></p>
                      <h4 class="art__header"><a href="#">Мы можем и больше</a></h4>
                      <p class="art__info info2">Март 2017</p>
                      <p class="art__text">В условиях современной рыночной ситуации популяризация нового торгового имени и формирование положительного отношения к нему потенциальной клиентской аудитории, не менее значимый элемент успешной деятельности фирмы, как  и верно разработанная маркетинговая стратегия, направленная на выведение на просторы рынка нового продукта.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col2">
                <div class="grid-elem">
                  <div class="art">
                    <div class="art__img"><img src="../img/img9.png"></div>
                    <div class="art__wrap">
                      <p class="art__info info1"><a href="#">творчество</a></p>
                      <h4 class="art__header"><a href="#">растворимые бусы из берилия</a></h4>
                      <p class="art__info info2">Март 2017</p>
                    </div>
                  </div>
                </div>
                <div class="grid-elem">
                  <div class="art">
                    <div class="art__wrap">
                      <p class="art__info info1"><a href="#">дизайн</a></p>
                      <h4 class="art__header"><a href="#">Мода на раннюю обрезку швов</a></h4>
                      <p class="art__info info2">Март 2017</p>
                    </div>
                    <div class="art__img"><img src="../img/img1.png"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>

  <?php get_footer(); ?>