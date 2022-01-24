<?php get_header(); ?>

<section class="p-mv l-mv">
    <div class="p-mv__nav p-main-nav">
        <div class="p-main-nav__logo">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo_dark.svg" alt="Open Cafe">
        </div>
        <ul class="p-main-nav__items">
            <li class="p-main-nav__item">
                <a href="<?php echo esc_url(home_url('/')) ?>" class="trans">
                    top
                    <br>
                    <span>トップ</span>
                </a>
            </li>
            <li class="p-main-nav__item">
                <a href="<?php echo esc_url(home_url('concept')) ?>" class="trans">
                    concept
                    <br>
                    <span>コンセプト</span>
                </a>
            </li>
            <li class="p-main-nav__item">
                <a href="<?php echo esc_url(home_url('concept')) ?>" class="trans">
                    menu
                    <br>
                    <span>メニュー</span>
                </a>
            </li>
            <li class="p-main-nav__item">
                <a href="<?php echo esc_url(home_url('news')) ?>" class="trans">
                    news
                    <br>
                    <span>お知らせ</span>
                </a>
            </li>
            <li class="p-main-nav__item">
                <a href="<?php echo esc_url(home_url('shop')) ?>" class="trans">
                    shop
                    <br>
                    <span>店舗情報</span>
                </a>
            </li>
            <li class="p-main-nav__item">
                <a href="<?php echo esc_url(home_url('gift')) ?>" class="trans">
                    gift
                    <br>
                    <span>ギフト・贈り物</span>
                </a>
            </li>
            <li class="p-main-nav__item">
                <a href="<?php echo esc_url(home_url('contact')) ?>" class="trans">
                    contact
                    <br>
                    <span>お問い合わせ</span>
                </a>
            </li>
        </ul>
        <div class="p-main-nav__sns p-sns">
            <ul class="p-sns__items">
                <li class="p-sns__item">
                    <a href="#" class="trans">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="p-sns__item">
                    <a href="#" class="trans">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="p-sns__item">
                    <a href="#" class="trans">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="p-mv__slider p-slider">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/mv1.jpg" alt="main-view">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/mv2.jpg" alt="main-view">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/mv3.jpg" alt="main-view">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <p class="p-slider__text">パスタとコーヒーがとってもおいしい、<br>ほっと落ち着くのんびり空間。</p>
        <article class="p-slider__news p-puckup-news">
            <a href="#" class="p-puckup-news__link">
                <div class="p-puckup-news__container">
                    <div class="p-puckup-news__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/mv1.jpg" alt="サムネイル画像">
                    </div>
                    <div class="p-puckup-news__content">
                        <p class="p-puckup-news__date">2021.01.01</p>
                        <p class="p-puckup-news__title">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
                    </div>
                    <div class="p-puckup-news__baloon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_balloon-pickup.svg" alt="Pick up ニュース！">
                    </div>
                    <p class="p-puckup-news__category c-ribbon">カテゴリ</p>
                </div>
            </a>
        </article>
    </div>
</section>

<section class="p-top-concept">
    <div class="l-top-concept l-inner l-inner--max">
        <div class="p-top-concept__content">
            <div class="p-top-concept__img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_concept.jpg" alt="コーヒーの写真">
            </div>
            <div class="p-top-concept__body">
                <div class="p-top-concept__title c-title">
                    <h2 class="c-title-en">concept</h2>
                    <p class="c-title-ja">当店のこだわり</p>
                </div>
                <p class="p-top-concept__subtitle c-subtitle">最高のコーヒーと、<br>時の流れを味わうことができる<br>手作りカフェ</p>
                <p class="p-top-concept__text">ダミー_国内外から賞賛を<br>受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br><br>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</p>
                <div class="p-top-concept__btn">
                    <a href="#" class="c-btn">詳しくはこちら</a>
                </div>
            </div>
        </div>
    </div>

</section>

<?php get_footer(); ?>