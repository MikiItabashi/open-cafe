<div class="p-top-menu__item p-grand-menu">
    <div class="p-grand-menu__img">
        <?php
        if (has_post_thumbnail()) {
            // アイキャッチ画像が設定されてれば大サイズで表示
            the_post_thumbnail('large');
        } else {
            // なければnoimage画像をデフォルトで表示
            echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/blog.jpg" alt="メニューの写真">';
        }
        ?>
    </div>
    <p class="p-grand-menu__title"><?php the_title(); ?></p>
    <?php if (get_field('price')) : ?>
        <p class="p-grand-menu__price"><?php the_field('price'); ?> yen</p>
    <?php endif; ?>
</div>