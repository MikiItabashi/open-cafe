<article class="p-archive__item">
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