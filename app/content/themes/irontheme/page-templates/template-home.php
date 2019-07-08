<?php
/**
 * Template Name: Главная
 */

get_header(); ?>

<?php
if( have_rows('home_layout') ):

  while ( have_rows('home_layout') ) : the_row();

    if( get_row_layout() == 'hero' ): ?>

      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <h1><?php the_sub_field('title'); ?></h1>
            <h2><?php the_sub_field('subtitle'); ?></h2>

            <p>Работаем с Казахстаном, Белоруссией, Абхазией, <br>Южной Осетией, Приднестровьем, ДНР, ЛНР</p>
          </div>

          <div class="btn-action">
            <p><span>Оформите заявку на перевозку</span> ― <br>получите страхование груза в подарок!</p>
            <a href="#" class="btn order-delivery_open">оставить заявку</a>
          </div>

          <div class="hero-card-wrap">
            <div class="hero-card">
              <div class="hero-card__text">
                <span>Перевозим</span>
                <p>любые виды грузов</p>
              </div>
              <?php ith_the_icon('doc-shield'); ?>
            </div>
            <div class="hero-card hero-card--green">
              <div class="hero-card__text">
                <span>Находимся <br>в 200 метрах</span>
                <p>от международного <br>морского порта</p>
              </div>
              <?php ith_the_icon('ship'); ?>
            </div>
          </div>

        </div>
      </section>

    <?php endif;

  endwhile;

else :

  // no layouts found

endif;

?>

  <section class="about" id="about">
    <div class="container">
      <h2 class="section-title" data-float-title="Только цифры и факты">Группа компаний <span>«КоТранс»</span> ― <br>логистический партнер с безупречной репутацией</h2>

      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="about-number">
            <b class="about-number__number">10+</b>
            <p>Более 10 лет успешной работы</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="about-number">
            <b class="about-number__number">100%</b>
            <p>Сохранности грузов</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="about-number">
            <b class="about-number__number">10 000+</b>
            <p>Тонн грузов доставлено получателям</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="about-number">
            <b class="about-number__number">150+</b>
            <p>Позитивных отзывов</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="about-number">
            <b class="about-number__number">85%</b>
            <p>Клиентов обращаются к нам снова</p>
          </div>
        </div>
      </div>

      <?php if (get_field('offer')): ?>
        <div class="btn-action">
          <p>Скачайте <br><span>коммерческое предложение</span></p>
          <a href="<?php echo esc_url(get_field('offer')); ?>" target="_blank" class="btn">
            <?php ith_the_icon('download'); ?>
            Скачать
          </a>
        </div>
      <?php endif; ?>

      <div class="about__note">
        <p>Нас ценят за надежность, ответственность, опыт и высокие стандарты качества работы</p>
      </div>

    </div>
  </section>

  <section class="about-map">
    <div class="container">
      <div class="section-head">
        <h2 class="section-title"><span>Международные</span> грузоперевозки</h2>

        <div class="row">
          <div class="col-lg-8 col-xl-7">
            <p>Мы работаем как с компаниями, экспортирующими товары из России, так и с грузополучателями импортной продукции <br>из разных стран мира</p>
          </div>
        </div>
      </div>

      <img src="<?php echo THEME_URL; ?>/images/general/map.png" alt="Международные грузоперевозки">

    </div>
  </section>

  <section class="delivery" id="delivery">
    <div class="container">

      <div class="row">
        <div class="col-lg-8 offset-lg-4">
          <div class="delivery__content-wrap">

            <div class="section-head">
              <h2 class="section-title" data-float-title="Осуществляем"><span>Крупногабаритные</span> <br>перевозки</h2>
              <p>Успешно и оперативно доставляем негабаритные (тяжеловесные, длинномерные, объемные) грузы автомобильным транспортом.</p>
            </div>

            <ol class="list-count">
              <li><span class="list-count__number">01</span> <span class="list-count__val" data-count="01">Пункт отправки</span></li>
              <li><span class="list-count__number">02</span> <span class="list-count__val" data-count="02">Большегрузный автомобиль/низкорамный трал</span></li>
              <li><span class="list-count__number">03</span> <span class="list-count__val" data-count="03">Пункт назначения</span></li>
            </ol>

          </div>
        </div>
      </div>

      <div class="delivery-adv">
        <div class="icon-box">
          <?php ith_the_icon('adv-1', 'icon-box__icon'); ?>
          <p>Промышленное <br>оборудование</p>
        </div>
        <div class="icon-box">
          <?php ith_the_icon('adv-2', 'icon-box__icon'); ?>
          <p>Торговое <br>оборудование</p>
        </div>
        <div class="icon-box">
          <?php ith_the_icon('adv-3', 'icon-box__icon'); ?>
          <p>Спецтехника</p>
        </div>
        <div class="icon-box">
          <?php ith_the_icon('adv-4', 'icon-box__icon'); ?>
          <p>Буровые <br>установки</p>
        </div>
        <div class="icon-box">
          <?php ith_the_icon('adv-5', 'icon-box__icon'); ?>
          <p>Нефтегазовое <br>оборудование</p>
        </div>
        <div class="icon-box">
          <?php ith_the_icon('adv-6', 'icon-box__icon'); ?>
          <p>Транспорт</p>
        </div>
        <div class="icon-box">
          <?php ith_the_icon('adv-7', 'icon-box__icon'); ?>
          <p>Емкости</p>
        </div>
        <div class="icon-box">
          <?php ith_the_icon('adv-8', 'icon-box__icon'); ?>
          <p>Железобетонные <br>изделия</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-11 offset-lg-1 col-xl-10 offset-xl-2">
          <div class="delivery__info">
            <h3>Доставим по России и странам СНГ любой груз <br>весом до 70 тонн</h3>

            <ul class="list-square">
              <li>Получим разрешения МВД и ГИБДД</li>
              <li>Надежно закрепим груз</li>
              <li>Разработаем оптимальный маршрут</li>
              <li>Подберем подходящий спецтранспорт</li>
              <li>Застрахуем груз</li>
              <li>При необходимости обеспечим сопровождение</li>
            </ul>

            <div class="btn-action">
              <p>Получите расчет стоимости ― <br><span>сделаем в течение 1 часа</span></p>
              <a href="#" class="btn order-calculation-cost_open">оставить заявку</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="delivery delivery--2" id="delivery-2">
    <div class="container">
      <div class="section-head">
        <h2 class="section-title" data-float-title="Осуществляем"><span>Мультимодальные</span> импортно-экспортные <br>контейнерные перевозки</h2>

        <div class="row">
          <div class="col-lg-8 col-xl-6">
            <p>Перевозим генеральные и сборные грузы морским и наземным транспортом в надежных контейнерах</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="delivery__content-wrap">

            <ol class="list-count">
              <li><span class="list-count__number">01</span> <span class="list-count__val" data-count="01">Пункт отправки</span></li>
              <li><span class="list-count__number">02</span> <span class="list-count__val" data-count="02">Подача контейнера</span></li>
              <li><span class="list-count__number">03</span> <span class="list-count__val" data-count="03">Пароход</span></li>
              <li><span class="list-count__number">04</span> <span class="list-count__val" data-count="04">Автодоставка</span></li>
              <li><span class="list-count__number">05</span> <span class="list-count__val" data-count="05">Пункт назначения</span></li>
            </ol>

          </div>
        </div>
      </div>

      <div class="delivery__note">
        <b class="delivery__note-label">Важно:</b>
        <p>При заключении договора хранение груза до 10 дней в собственном терминале компании – за наш счет!</p>
      </div>

      <div class="delivery-adv">
        <div class="icon-box">
          <?php ith_the_icon('adv-9', 'icon-box__icon'); ?>
          <p>Сырье для <br>производства</p>
        </div>
        <div class="icon-box">
          <?php ith_the_icon('adv-10', 'icon-box__icon'); ?>
          <p>Оборудование</p>
        </div>
        <div class="icon-box">
          <?php ith_the_icon('adv-11', 'icon-box__icon'); ?>
          <p>Расходные <br>материалы</p>
        </div>
        <div class="icon-box">
          <?php ith_the_icon('adv-12', 'icon-box__icon'); ?>
          <p>Запчасти <br>и комплектующие</p>
        </div>
        <div class="icon-box">
          <?php ith_the_icon('adv-13', 'icon-box__icon'); ?>
          <p>Бытовая <br>техника</p>
        </div>
        <div class="icon-box">
          <?php ith_the_icon('adv-14', 'icon-box__icon'); ?>
          <p>Одежда и обувь</p>
        </div>
        <div class="icon-box">
          <?php ith_the_icon('adv-15', 'icon-box__icon'); ?>
          <p>Хозяйственные <br>товары</p>
        </div>
        <div class="icon-box">
          <?php ith_the_icon('adv-16', 'icon-box__icon'); ?>
          <p>Косметика</p>
        </div>
        <div class="icon-box">
          <?php ith_the_icon('adv-17', 'icon-box__icon'); ?>
          <p>Продукты <br>питания</p>
        </div>
        <div class="icon-box">
          <?php ith_the_icon('adv-18', 'icon-box__icon'); ?>
          <p>Жидкие грузы</p>
        </div>
        <div class="icon-box">
          <?php ith_the_icon('adv-19', 'icon-box__icon'); ?>
          <p>Стекло</p>
        </div>
      </div>

    </div>
  </section>

  <section class="delivery-all">
    <div class="container">
      <h2 class="section-title text-center">Доставляем любые грузы</h2>

      <div class="delivery-all__wrap">
        <ul class="list-square">
          <li>Подберем оптимальные маршрут и логистическую схему</li>
          <li>Оформим пакет сопроводительных документов</li>
          <li>Обеспечим постоянный контроль над перемещением грузов</li>
          <li>Оптимизируем сроки доставки</li>
        </ul>
      </div>

      <div class="btn-action">
        <p>Закажите расчет стоимости ― <br><span>сделаем в течение 1 часа</span></p>
        <a href="#" class="btn order-calculation-cost_open">оставить заявку</a>
      </div>
    </div>
  </section>

<?php
if( have_rows('home_layout') ):

  while ( have_rows('home_layout') ) : the_row();

    if ( get_row_layout() == 'services' ): ?>

      <section class="services" id="services">
        <div class="container">
          <div class="row">

            <div class="col-md-8 col-lg-6">
              <div class="section-head">
                <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
                <p><?php the_sub_field('descr'); ?></p>
              </div>
            </div>

            <?php
            if (have_rows('list')):
              while (have_rows('list')): the_row(); ?>
                <div class="col-md-4 col-lg-3">
                  <div class="services-card">
                    <?php echo do_shortcode(get_sub_field('icon')); ?>
                    <h3 class="services-card__title"><?php the_sub_field('title'); ?></h3>
                    <?php if (get_sub_field('text')): ?>
                      <div class="services-card__text">
                        <?php the_sub_field('text'); ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              <?php endwhile; ?>
              <div class="col-md-4 col-lg-3">
                <p class="services__cta">Выбирайте <br>то,что вам нужно <span>именно сейчас!</span></p>
              </div>
            <?php endif;
            ?>

          </div>
        </div>
      </section>

    <?php elseif ( get_row_layout() == 'gallery' ): ?>

      <section class="s-gallery" id="gallery">
        <div class="container">
          <h2 class="section-title text-center" data-float-title="Наши возможности"><?php the_sub_field('title'); ?></h2>
        </div>

        <?php if ($gallery = get_sub_field('list')): ?>
          <div class="s-gallery-slider swiper-container">
            <div class="swiper-wrapper">
              <?php foreach ($gallery as $item): ?>
                <a href="<?php echo wp_get_attachment_image_url( $item, 'full' ); ?>" class="s-gallery-slider__item swiper-slide" data-fancybox="gallery">
                  <?php echo wp_get_attachment_image( $item, 'gallery' ); ?>
                  <?php ith_the_icon('zoom', 's-gallery-slider__icon'); ?>
                  <p>Примеры нашей работы</p>
                </a>
              <?php endforeach; ?>
            </div>
            <div class="s-gallery-slider-controls">
              <div class="swiper-button-prev">
                <?php ith_the_icon('arrow-left'); ?>
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-next">
                <?php ith_the_icon('arrow-right'); ?>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </section>

    <?php endif;

  endwhile;

else :

  // no layouts found

endif;

?>

  <section class="advantages" id="advantages">
    <div class="container">
      <h2 class="section-title"><span>Преимущества</span> сотрудничества с нами</h2>

      <div class="advantages-tabs">
        <ul class="advantages-tabs__list advantages-tabs-list">
          <li>
            <a href="#adv-1"><span>01</span> собственный автопарк</a>
          </li>
          <li>
            <a href="#adv-2"><span>02</span> Собственный парк контейнеров</a>
          </li>
          <li>
            <a href="#adv-3"><span>03</span> Точность в сроках</a>
          </li>
          <li>
            <a href="#adv-4"><span>04</span> Профессионализм в деталях</a>
          </li>
          <li>
            <a href="#adv-5"><span>05</span> Проверенные партнеры</a>
          </li>
          <li>
            <a href="#adv-6"><span>06</span> Опыт</a>
          </li>
          <li>
            <a href="#adv-7"><span>07</span> Гарантия</a>
          </li>
          <li>
            <a href="#adv-8"><span>08</span> сопроводительные документы</a>
          </li>
        </ul>

        <div class="advantages-tabs__content" id="adv-1">
          <span class="advantages-tabs__content-number">01</span>
          <p><strong>Собственный автопарк</strong> низкорамных тралов и контейнерных площадок</p>
        </div>

        <div class="advantages-tabs__content" id="adv-2">
          <span class="advantages-tabs__content-number">02</span>
          <p><strong>Собственный парк контейнеров</strong> ― импортно-экспортные перевозки без перегрузки товаров</p>
        </div>

        <div class="advantages-tabs__content" id="adv-3">
          <span class="advantages-tabs__content-number">03</span>
          <p><strong>Точность в сроках</strong> ― всегда укладываемся в договорные сроки</p>
        </div>

        <div class="advantages-tabs__content" id="adv-4">
          <span class="advantages-tabs__content-number">04</span>
          <p><strong>Профессионализм в деталях</strong> ― мы всегда на связи и владеем информацией о местонахождении вашего груза</p>
        </div>

        <div class="advantages-tabs__content" id="adv-5">
          <span class="advantages-tabs__content-number">05</span>
          <p><strong>Проверенные партнеры</strong> ― морские перевозчики</p>
        </div>

        <div class="advantages-tabs__content" id="adv-6">
          <span class="advantages-tabs__content-number">06</span>
          <p><strong>Опыт</strong> получения согласований/разрешений на перевозку негабаритных и тяжеловесных грузов</p>
        </div>

        <div class="advantages-tabs__content" id="adv-7">
          <span class="advantages-tabs__content-number">07</span>
          <p><strong>Гарантия</strong> сохранности грузов ― 100%</p>
        </div>

        <div class="advantages-tabs__content" id="adv-8">
          <span class="advantages-tabs__content-number">08</span>
          <p><strong>Предоставляем полный пакет</strong> сопроводительных документов</p>
        </div>

      </div>
      <!-- /.advantages-tabs -->

      <div class="btn-action">
        <p>Оформите заявку на перевозку ― <br><span>получите страхование груза</span><span> в подарок!</span></p>
        <a href="#" class="btn order-delivery_open">оставить заявку</a>
      </div>

    </div>
  </section>

  <section class="partners">
    <div class="container">
      <h2 class="section-title text-center" data-float-title="Сотрудничаем">В числе наших <span>бизнес-партнеров</span></h2>

      <div class="partners-list row">
        <div class="partners-list__item col-sm-6 col-md-4 col-lg-2">
          <img src="<?php echo THEME_URL; ?>/images/content/partner-1.png" alt="">
        </div>
        <div class="partners-list__item col-sm-6 col-md-4 col-lg-2">
          <img src="<?php echo THEME_URL; ?>/images/content/partner-2.png" alt="">
        </div>
        <div class="partners-list__item col-sm-6 col-md-4 col-lg-2">
          <img src="<?php echo THEME_URL; ?>/images/content/partner-3.png" alt="">
        </div>
        <div class="partners-list__item col-sm-6 col-md-4 col-lg-2">
          <img src="<?php echo THEME_URL; ?>/images/content/partner-4.jpg" alt="">
        </div>
        <div class="partners-list__item col-sm-6 col-md-4 col-lg-2">
          <img src="<?php echo THEME_URL; ?>/images/content/partner-5.png" alt="">
        </div>
        <div class="partners-list__item col-sm-6 col-md-4 col-lg-2">
          <img src="<?php echo THEME_URL; ?>/images/content/partner-6.jpg" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2 class="section-title"><span>Свяжитесь</span> с нами</h2>

          <div class="contact__content">

            <?php if (get_field('address', 'option')): ?>
              <div class="contact__item">
                <?php ith_the_icon('location', 'contact__item-icon'); ?>
                <span class="contact__item-label">Адрес:</span>
                <p><?php the_field('address', 'option'); ?></p>
              </div>
            <?php endif; ?>

            <?php if (get_field('email', 'option')): ?>
              <div class="contact__item">
                <?php ith_the_icon('email', 'contact__item-icon'); ?>
                <span class="contact__item-label">E-mail:</span>
                <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
              </div>
            <?php endif; ?>

            <?php if (get_field('phone_2', 'option') || get_field('phone_3', 'option')): ?>
              <div class="contact__item contact__item--phone">
                <?php ith_the_icon('phone-2', 'contact__item-icon'); ?>
                <span class="contact__item-label">Телефоны:</span>
                <?php if (get_field('phone_2', 'option')): ?>
                  <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', get_field('phone_2', 'option') ); ?>"><?php the_field('phone_2', 'option'); ?></a>
                <?php endif; ?>
                <?php if (get_field('phone_3', 'option')): ?>
                  <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', get_field('phone_3', 'option') ); ?>"><?php the_field('phone_3', 'option'); ?></a>
                <?php endif; ?>
              </div>
            <?php endif; ?>

            <?php if (get_field('phone', 'option')): ?>
              <div class="contact__item">
                <?php ith_the_icon('24', 'contact__item-icon'); ?>
                <span class="contact__item-label">Бесплатная линия:</span>
                <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', get_field('phone', 'option') ); ?>"><?php the_field('phone', 'option'); ?></a>
              </div>
            <?php endif; ?>

          </div>

        </div>
        <div class="col-lg-6">
          <div id="contact-map" class="contact__map">
            <p class="contact__map-label">Грузоперевозки <br>без проблем</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>