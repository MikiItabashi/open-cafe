<section class="p-sidebar l-sidebar">
    <div class="p-sidebar__box">
        <p class="p-sidebar__heading">最近の記事</p>
        <div class="p-sidebar__items">



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
                    <article class="p-sidebar__item">
                        <a href="<?php the_permalink(); ?>" class="p-news-card p-news-card--grid">
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
                                <time class="p-news-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                            </div>
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
    </div>

    <div class="p-sidebar__box">
        <p class="p-sidebar__heading">カテゴリ</p>

        <ul class="p-sidebar__list">
            <?php
            $args = array(
                'title_li' => ''
            );
            wp_list_categories($args);
            ?>
        </ul>
    </div>
</section>