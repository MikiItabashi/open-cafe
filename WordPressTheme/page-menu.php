<?php get_header(); ?>

<?php get_template_part('templates/sub-head'); ?>

<?php
$taxonomy_slug = 'genre'; // カスタムタクソノミーのスラッグを指定
$post_type_slug = 'custom_menu'; // 投稿タイプのスラッグを指定
$terms = get_terms($taxonomy_slug); // タームを取得
?>

<div class="p-menu">
    <div class="p-menu__inner l-inner">
        <ul class="p-menu__tabs">
            <?php foreach ($terms as $value) : ?>
                <li class="c-tab-btn<?php if ($value === reset($terms)) : ?> c-tab-btn--active<?php endif; ?>"><?php echo esc_html($value->name); ?></li>
            <?php endforeach; ?>
        </ul>

        <div class="p-menu__items">
            <?php foreach ($terms as $value) : ?>
                <?php
                $term_slug = $value->slug;
                $args = array(
                    'post_type' => $post_type_slug,
                    $taxonomy_slug => $term_slug,
                    'posts_per_page' => -1,
                    'order' => 'DESC',
                    'orderby' => 'date',
                    'post_status' => 'publish'
                );
                $myquery = new WP_Query($args);
                ?>
                <div class="p-menu__item<?php if ($value === reset($terms)) : ?> is-show<?php endif; ?>">
                    <?php if ($myquery->have_posts()) : ?>
                        <?php while ($myquery->have_posts()) : $myquery->the_post(); ?>
                            <div class="p-menu-item">
                                <div class="p-menu-item__img">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        // アイキャッチ画像が設定されてれば大サイズで表示
                                        the_post_thumbnail('large');
                                    } else {
                                        // なければnoimage画像をデフォルトで表示
                                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/blog.jpg" alt="メニューの写真">';
                                    }
                                    ?></div>
                                <p class="p-menu-item__name"><?php the_title(); ?></p>
                                <?php if (get_field('price')) : ?>
                                    <p class="p-menu-item__price"><?php the_field('price'); ?> yen</p>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>