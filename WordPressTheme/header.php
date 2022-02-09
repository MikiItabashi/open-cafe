<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- font awesome -->
  <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Damion&family=Noto+Serif+JP:wght@400;500;600&family=Patua+One&display=swap" rel="stylesheet">
  <!-- swiper.js -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <button class="p-drawer-icon <?php if (is_front_page()) {
                                  echo 'js-drawer-fade';
                                } ?>">

    <div class="p-drawer-icon__bars">
      <div class="p-drawer-icon__bar1"></div>
      <div class="p-drawer-icon__bar2"></div>
      <div class="p-drawer-icon__bar3"></div>
    </div>
  </button>

  <div class="p-drawer-content">
    <div class="p-drawer-content__logo">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo_light.svg" alt="Open Cafe">
    </div>
    <ul class="p-drawer-content__items">
      <li class="p-drawer-content__item">
        <a href="<?php echo esc_url(home_url('/')) ?>" class="trans">
          top<span>トップ</span>
        </a>
      </li>
      <li class="p-drawer-content__item">
        <a href="<?php echo esc_url(home_url('concept')) ?>" class="trans">
          concept<span>コンセプト</span>
        </a>
      </li>
      <li class="p-drawer-content__item">
        <a href="<?php echo esc_url(home_url('menu')) ?>" class="trans">
          menu<span>メニュー</span>
        </a>
      </li>
      <li class="p-drawer-content__item">
        <a href="<?php echo esc_url(home_url('news')) ?>" class="trans">
          news<span>お知らせ</span>
        </a>
      </li>
      <li class="p-drawer-content__item">
        <a href="<?php echo esc_url(home_url('shop')) ?>" class="trans">
          shop<span>店舗情報</span>
        </a>
      </li>
      <li class="p-drawer-content__item">
        <a href="<?php echo esc_url(home_url('gift')) ?>" class="trans">
          gift<span>ギフト・贈り物</span>
        </a>
      </li>
      <li class="p-drawer-content__item">
        <a href="<?php echo esc_url(home_url('contact')) ?>" class="trans">
          contact<span>お問い合わせ</span>
        </a>
      </li>
    </ul>

    <div class="p-drawer-content__sns p-sns">
      <?php get_template_part('templates/sns'); ?>
    </div>
  </div>
  <div class="p-drawer-background"></div>
  <main>