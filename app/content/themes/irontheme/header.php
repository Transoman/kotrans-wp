<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="format-detection" content="telephone=no">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">
  <header class="header">
    <div class="container">

      <div class="logo header__logo">
        <?php the_custom_logo(); ?>
      </div>

      <div class="header__right">

        <div class="phone header__phone">
          <div class="phone__item phone__item--phone">
            <p class="phone__label">Позвонить бесплатно:</p>
            <a href="tel:<?php echo preg_replace('![^0-9/+]+!', '', get_field('phone', 'option')); ?>" class="phone__tel">
              <?php ith_the_icon('phone', 'phone__icon'); ?>
              <?php the_field('phone', 'option'); ?>
            </a>
          </div>
          <div class="phone__item phone__item--callback">
            <p class="phone__label">Заказать</p>
            <a href="#" class="phone__callback callback_open">обратный звонок</a>
          </div>
        </div>
        <!-- /.phone -->
        
        <nav class="nav header__nav">
          <ul class="nav-list">
            <li>
              <a href="#about">О компании</a>
            </li>
            <li>
              <a href="#delivery">Крупногабаритные <br><span>перевозки</span></a>
            </li>
            <li>
              <a href="#delivery-2">Контейнерные <br><span>перевозки</span></a>
            </li>
            <li>
              <a href="#services">Дополнительные <br><span>услуги</span></a>
            </li>
            <li>
              <a href="#gallery">Галерея</a>
            </li>
            <li>
              <a href="#advantages">Почему мы</a>
            </li>
            <li>
              <a href="#contact">Контакты</a>
            </li>
          </ul>
        </nav>

        <button type="button" class="nav-toggle">
          <span class="nav-toggle__line"></span>
        </button>

      </div>

    </div>
  </header><!-- /.header-->

  <div class="content">