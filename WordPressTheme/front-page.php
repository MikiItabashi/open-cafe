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
                <a href="<?php echo esc_url(home_url('menu')) ?>" class="trans">
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
            <?php get_template_part('templates/sns'); ?>
        </div>
    </div>

    <div class="p-mv__slider p-slider">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-img">
                        <picture>
                            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/mv1.jpg" alt="main-view">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/mv1-sp.jpg" alt="main-view">
                        </picture>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-img">
                        <picture>
                            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/mv2.jpg" alt="main-view">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/mv2-sp.jpg" alt="main-view">
                        </picture>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-img">
                        <picture>
                            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/mv3.jpg" alt="main-view">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/mv3-sp.jpg" alt="main-view">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="p-slider__content">

            <div class="p-slider__logo u-mobile">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo_light.svg" alt="Open Cafe">
            </div>
            <p class="p-slider__text">パスタとコーヒーが<br class="u-mobile">とってもおいしい、<br>ほっと落ち着くのんびり空間。</p>

            <?php
            $args = array(
                'posts_per_page' => 1, // 1件取得
                'post_type' => 'post', // 投稿タイプ
                'tag' => 'pickup', // pickupタグがついたものを
                'orderby' => 'DESC', // 新しい順に
            );

            $pickup_pages = new WP_Query($args);
            if ($pickup_pages->have_posts()) :
                while ($pickup_pages->have_posts()) : $pickup_pages->the_post();
            ?>

                    <article class="p-slider__news p-puckup-news">
                        <a href="<?php the_permalink(); ?>" class="p-puckup-news__link">
                            <div class="p-puckup-news__container">
                                <div class="p-puckup-news__img">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        // アイキャッチ画像が設定されてれば大サイズで表示
                                        the_post_thumbnail('large');
                                    } else {
                                        // なければnoimage画像をデフォルトで表示
                                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/mv1.jpg" alt="サムネイル画像">';
                                    } ?>
                                </div>
                                <div class="p-puckup-news__content">
                                    <time class="p-puckup-news__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                                    <p class="p-puckup-news__title"><?php the_title(); ?></p>
                                </div>
                                <div class="p-puckup-news__baloon">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_balloon-pickup.svg" alt="Pick up ニュース！">
                                </div>

                                <?php
                                $category = get_the_category();
                                if ($category[0]) {
                                    echo '<p class="p-puckup-news__category c-ribbon">' . $category[0]->cat_name . '</p>';
                                }
                                ?>
                            </div>
                        </a>
                    </article>

                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            <?php endif; ?>
        </div>
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
                    <a href="<?php echo esc_url(home_url('concept')) ?>" class="c-btn">詳しくはこちら</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-top-set l-top-set">
    <div class="p-top-set__inner l-inner l-inner--wide">
        <div class="p-top-set__title c-title">
            <h2 class="c-title-en">special lunch set</h2>
            <p class="c-title-ja">今月のスペシャルランチセット</p>
        </div>
        <div class="p-top-set__content">
            <p class="p-top-set__ribbon">お好きなパスタをお選びください</p>
            <div class="p-top-set__items">
                <div class="p-top-set__item p-set-item">
                    <div class="p-set-item__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_special_pasta1.jpg" alt="パスタの写真">
                    </div>
                    <div class="p-set-item__body">
                        <p class="p-set-item__number">a</p>
                        <p class="p-set-item__name">テキストテキストの○○風パスタ</p>
                    </div>
                </div>
                <div class="p-top-set__item p-set-item">
                    <div class="p-set-item__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_special_pasta2.jpg" alt="パスタの写真">
                    </div>
                    <div class="p-set-item__body">
                        <p class="p-set-item__number">b</p>
                        <p class="p-set-item__name">テキストテキストの○○風パスタ</p>
                    </div>
                </div>
                <div class="p-top-set__item p-set-item">
                    <div class="p-set-item__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_special_pasta3.jpg" alt="パスタの写真">
                    </div>
                    <div class="p-set-item__body">
                        <p class="p-set-item__number">c</p>
                        <p class="p-set-item__name">テキストテキストの○○風パスタ</p>
                    </div>
                </div>
                <div class="p-top-set__item p-set-item">
                    <div class="p-set-item__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_special_pasta4.jpg" alt="パスタの写真">
                    </div>
                    <div class="p-set-item__body">
                        <p class="p-set-item__number">d</p>
                        <p class="p-set-item__name">テキストテキストの○○風パスタ</p>
                    </div>
                </div>
            </div>
            <div class="p-top-set__body">
                <div class="p-top-set__img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_lunch-detail.png" alt="パスタ+サラダ+ドリンク">
                </div>
                <div class="p-top-set__info">
                    <p class="p-top-set__head">スペシャルランチセット<br>【選べる3品】</p>
                    <p class="p-top-set__price">1,280 yen</p>
                    <p class="p-top-set__time">(11:00 AM〜14:00 PMまで)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-top-menu l-top-menu">
    <div class="p-top-menu__inner l-inner">
        <div class="p-top-menu__title c-title">
            <h2 class="c-title-en">grand menu</h2>
            <p class="c-title-ja">グランドメニュー</p>
        </div>
        <div class="p-top-menu__content">
            <div class="p-top-menu__genre">
                <h3 class="p-top-menu__subtitle">パスタ</h3>
                <div class="p-top-menu__items">

                    <?php
                    $args = array(
                        'posts_per_page' => 3, // 表示する投稿数
                        'post_type' => array('custom_menu'), // 取得する投稿タイプのスラッグ
                        'order' => 'ASC', // 降順 or 昇順
                        'tax_query' => [
                            [
                                'taxonomy' => 'genre', // 絞り込みたいカスタムタクソノミー
                                'field' => 'slug', // スラッグで検索。idでも検索できます
                                'terms' => 'pasta', // 検索する文字列（fieldがidならidが入ります）
                                'include_children' => true, // 子タクソノミーを含むかどうか
                                'operator' => 'AND' // termsが複数ある場合AND検索（全て）かIN検索（いずれか）かNOT IN（いずれも除く）
                            ]
                        ]
                    );
                    $my_posts = get_posts($args);
                    ?>
                    <?php foreach ($my_posts as $post) : setup_postdata($post); ?>

                        <?php get_template_part('templates/grand-menu'); ?>

                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>

                </div>
                <h3 class="p-top-menu__subtitle">サラダ</h3>
                <div class="p-top-menu__items">

                    <?php
                    $args = array(
                        'posts_per_page' => 3, // 表示する投稿数
                        'post_type' => array('custom_menu'), // 取得する投稿タイプのスラッグ
                        'order' => 'ASC', // 降順 or 昇順
                        'tax_query' => [
                            [
                                'taxonomy' => 'genre', // 絞り込みたいカスタムタクソノミー
                                'field' => 'slug', // スラッグで検索。idでも検索できます
                                'terms' => 'salad', // 検索する文字列（fieldがidならidが入ります）
                                'include_children' => true, // 子タクソノミーを含むかどうか
                                'operator' => 'AND' // termsが複数ある場合AND検索（全て）かIN検索（いずれか）かNOT IN（いずれも除く）
                            ]
                        ]
                    );
                    $my_posts = get_posts($args);
                    ?>
                    <?php foreach ($my_posts as $post) : setup_postdata($post); ?>

                        <?php get_template_part('templates/grand-menu'); ?>

                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>

                </div>
                <h3 class="p-top-menu__subtitle">パン & スイーツ</h3>
                <div class="p-top-menu__items">

                    <?php
                    $args = array(
                        'posts_per_page' => 6, // 表示する投稿数
                        'post_type' => array('custom_menu'), // 取得する投稿タイプのスラッグ
                        'order' => 'ASC', // 降順 or 昇順
                        'tax_query' => [
                            [
                                'taxonomy' => 'genre', // 絞り込みたいカスタムタクソノミー
                                'field' => 'slug', // スラッグで検索。idでも検索できます
                                'terms' => 'bread-sweets', // 検索する文字列（fieldがidならidが入ります）
                                'include_children' => true, // 子タクソノミーを含むかどうか
                                'operator' => 'AND' // termsが複数ある場合AND検索（全て）かIN検索（いずれか）かNOT IN（いずれも除く）
                            ]
                        ]
                    );
                    $my_posts = get_posts($args);
                    ?>
                    <?php foreach ($my_posts as $post) : setup_postdata($post); ?>

                        <?php get_template_part('templates/grand-menu'); ?>

                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>

                </div>
                <h3 class="p-top-menu__subtitle">ドリンク</h3>
                <div class="p-top-menu__drink p-drink-menu">
                    <div class="p-drink-menu__img u-desktop">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_coffee.jpg" alt="コーヒーの写真">
                    </div>
                    <div class="p-drink-menu__block">
                        <p class="p-drink-menu__heading">コーヒー</p>
                        <ul class="p-drink-menu__items">
                            <li class="p-drink-menu__item">ブレンド<span class="p-drink-menu__price">500 yen</span></li>
                            <li class="p-drink-menu__item">カフェラテ<span class="p-drink-menu__price">500 yen</span></li>
                            <li class="p-drink-menu__item">豆乳ラテ<span class="p-drink-menu__price">500 yen</span></li>
                            <li class="p-drink-menu__item">カフェモカ<span class="p-drink-menu__price">500 yen</span></li>
                            <li class="p-drink-menu__item">キャラメルラテ<span class="p-drink-menu__price">500 yen</span></li>
                            <li class="p-drink-menu__item">バニララテ<span class="p-drink-menu__price">500 yen</span></li>
                        </ul>
                    </div>
                    <div class="p-drink-menu__block">
                        <p class="p-drink-menu__heading">紅茶</p>
                        <ul class="p-drink-menu__items">
                            <li class="p-drink-menu__item">ストレート<span class="p-drink-menu__price">500 yen</span></li>
                            <li class="p-drink-menu__item">ミルク<span class="p-drink-menu__price">500 yen</span></li>
                            <li class="p-drink-menu__item">アップル<span class="p-drink-menu__price">500 yen</span></li>
                        </ul>
                    </div>
                    <div class="p-drink-menu__block">
                        <p class="p-drink-menu__heading">ソフトドリンク</p>
                        <ul class="p-drink-menu__items">
                            <li class="p-drink-menu__item">バナナ<span class="p-drink-menu__price">500 yen</span></li>
                            <li class="p-drink-menu__item">オレンジ<span class="p-drink-menu__price">500 yen</span></li>
                            <li class="p-drink-menu__item">アップル<span class="p-drink-menu__price">500 yen</span></li>
                            <li class="p-drink-menu__item">マンゴー<span class="p-drink-menu__price">500 yen</span></li>
                            <li class="p-drink-menu__item">ミックス<span class="p-drink-menu__price">500 yen</span></li>
                        </ul>
                    </div>
                </div>
                <div class="p-top-menu__btn">
                    <a href="<?php echo esc_url(home_url('menu')) ?>" class="c-btn">その他のメニュー</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-top-gallery l-top-gallery">
    <div class="p-top-gallery__inner l-inner">
        <div class="p-top-gallery__title c-title">
            <h2 class="c-title-en">gallery</h2>
            <p class="c-title-ja">ギャラリー</p>
        </div>
        <div class="p-top-gallery__items">
            <div class="p-top-gallery__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_gallery1.jpg" alt="ギャラリー写真">
            </div>
            <div class="p-top-gallery__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_gallery2.jpg" alt="ギャラリー写真">
            </div>
            <div class="p-top-gallery__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_gallery3.jpg" alt="ギャラリー写真">
            </div>
            <div class="p-top-gallery__item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_gallery4.jpg" alt="ギャラリー写真">
            </div>
        </div>
        <div class="p-top-gallery__btn">
            <a href="#" class="c-btn">インスタグラムを見る</a>
        </div>
    </div>
</section>

<section class="p-top-news l-top-news">
    <div class="p-top-news__inner l-inner">
        <div class="p-top-news__title c-title">
            <h2 class="c-title-en">news</h2>
            <p class="c-title-ja">お知らせ</p>
        </div>
        <div class="p-top-news__items">

            <?php
            $args = array(
                'posts_per_page' => 5, //全件取得
                'post_type' => 'post', //取得対象は投稿
                'orderby' => 'date', //並び順は管理画面で指定した並び順
                'order' => 'DESC', //昇順
            );
            $common_pages = new WP_Query($args);
            if ($common_pages->have_posts()) :
                while ($common_pages->have_posts()) : $common_pages->the_post();
                    $counter++;
            ?>
                    <article class="p-top-news__item">
                        <a href="<?php the_permalink(); ?>" class="p-news-card
                    <?php if ($counter <= 1) {
                        echo 'p-news-card--big';
                    }; ?>">
                            <div class="p-news-card__img">
                                <?php
                                if (has_post_thumbnail()) {
                                    // アイキャッチ画像が設定されてれば大サイズで表示
                                    the_post_thumbnail('large');
                                } else {
                                    // なければnoimage画像をデフォルトで表示
                                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/mv1.jpg" alt="サムネイル画像">';
                                }
                                ?>
                            </div>
                            <div class="p-news-card__content">
                                <p class="p-news-card__title"><?php the_title(); ?></p>
                                <?php if ($counter <= 1) : ?>
                                    <div class="p-news-card__text"><?php the_excerpt(); ?></div>
                                <?php endif; ?>
                                <time class="p-news-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                            </div>
                            <?php
                            $category = get_the_category();
                            if ($category[0]) {
                                echo '<p class="p-news-card__category c-ribbon">' . $category[0]->cat_name . '</p>';
                            }
                            ?>
                        </a>
                    </article>
                <?php
                endwhile;
                wp_reset_postdata(); //メインクエリに戻す前にリセットする
                ?>
            <?php else : ?>
                <p>記事が見つかりませんでした</p>
            <?php endif; ?>
        </div>
        <div class="p-top-news__btn">
            <a href="<?php echo esc_url(home_url('news')) ?>" class="c-btn">過去のお知らせ</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>