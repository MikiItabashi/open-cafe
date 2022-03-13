<?php get_header(); ?>

<?php get_template_part('templates/sub-head'); ?>

<div class="p-gift">
    <div class="p-gift__inner l-inner">
        <div class="p-gift__items">

            <?php
            $args = array(
                'posts_per_page' => 9, // 表示する投稿数
                'post_type' => array('custom_gift'), // 取得する投稿タイプのスラッグ
                'order' => 'ASC', // 降順 or 昇順
            );

            $gift_pages = new WP_Query($args);
            if ($gift_pages->have_posts()) :
                while ($gift_pages->have_posts()) : $gift_pages->the_post();
                    $counter++;
            ?>

                <div class="p-gift__item p-gift-item <?php if ($counter <= 1) {
                        echo 'p-gift-item--big';
                    }; ?>">
                    <div class="p-gift-item__img">
                        <?php
                        if (has_post_thumbnail()) {
                            // アイキャッチ画像が設定されてれば大サイズで表示
                            the_post_thumbnail('large');
                        } else {
                            // なければnoimage画像をデフォルトで表示
                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/img_wrapping.jpg" alt="ラッピングの写真">';
                        }
                        ?>
                    </div>
                    <div class="p-gift-item__body">
                        <p class="p-gift-item__title"><?php the_title(); ?></p>
                        <p class="p-gift-item__price"><?php the_field('price'); ?> yen</p>
                        <div class="p-gift-item__btn">
                            <a href="#" class="c-sub-btn">ショップで確認する</a>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
        <div class="p-gift__wrapping p-gift-wrapping">
            <div class="p-gift-wrapping__body">
                <p class="p-gift-wrapping__heading">ラッピングは無料でお付けいたします。<br class="u-desktop">お気軽にご相談ください。</p>
                <p class="p-gift-wrapping__text">テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。</p>
            </div>
            <div class="p-gift-wrapping__img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_wrapping.jpg" alt="ラッピングの写真">
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>