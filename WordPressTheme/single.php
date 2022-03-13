<?php get_header(); ?>

<?php get_template_part('templates/sub-head'); ?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <article class="p-single">
            <div class="p-single__inner l-inner l-inner--slim">
                <div class="p-single__thumbnail">
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
                <h1 class="p-single__title"><?php the_title(); ?></h1>
                <div class="p-single__info">
                    <time class="p-single__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                    <?php
                    $category = get_the_category();
                    $cat_id = $category[0]->cat_ID;
                    $cat_link = get_category_link($cat_id);
                    if ($category[0]) {
                        echo '<a href="' . $cat_link . '" class="p-single__category trans">' . $category[0]->cat_name . '</a>';
                    }
                    ?>
                </div>
                <div class="p-single__body">
                    <?php
                    the_content();
                    ?>
                </div>

                <div class="p-single__paging p-paging">
                    <?php
                    $next_post = get_next_post();
                    $prev_post = get_previous_post();
                    if ($next_post) :
                    ?>
                        <a href="<?php echo get_permalink($next_post->ID); ?>" class="p-paging__link p-paging__link--next trans">次の記事</a>
                    <?php
                    endif;
                    ?>

                    <a href="<?php echo esc_url(home_url('news')) ?>" class="p-paging__back trans">記事一覧</a>

                    <?php
                    if ($prev_post) :
                    ?>
                        <a href="<?php echo get_permalink($prev_post->ID); ?>" class="p-paging__link p-paging__link--prev trans">前の記事</a>
                    <?php
                    endif;
                    ?>
                </div>

                <div class="p-single__related p-related">
                    <p class="p-related__title">関連記事</p>
                    <div class="p-related__items">

                        <?php
                        $args = array(
                            'category__in' => $cat_id, // カテゴリーのIDで記事を取得
                            'posts_per_page' => 6, //全件取得
                            'post_type' => 'post', //取得対象は投稿
                            'post__not_in' => array($post->ID), // 表示中の投稿を除外
                            'orderby' => 'date', //並び順は管理画面で指定した並び順
                            'order' => 'DESC', //昇順
                        );
                        $common_pages = new WP_Query($args);
                        if ($common_pages->have_posts()) :
                            while ($common_pages->have_posts()) : $common_pages->the_post();
                        ?>
                                <article class="p-related__item">
                                    <a href="<?php the_permalink(); ?>" class="p-news-card">
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
                            <p>関連する記事がありません</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
    <?php
    endwhile;
endif;
    ?>

        </article>

        <?php get_footer(); ?>