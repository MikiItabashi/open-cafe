<?php get_header(); ?>

<?php get_template_part('templates/sub-head'); ?>

<section class="p-shop">
    <div class="p-shop__inner l-inner l-inner--slim">
        <div class="p-shop__items">

            <?php
            $args = array(
                'posts_per_page' => -1, // 表示する投稿数
                'post_type' => array('custom_shop'), // 取得する投稿タイプのスラッグ
                'order' => 'ASC', // 降順 or 昇順
            );
            $my_posts = get_posts($args);
            ?>
            <?php foreach ($my_posts as $post) : setup_postdata($post); ?>

                <div class="p-shop__item">
                    <h2 class="p-shop__title">open cafe　<?php the_title(); ?></h2>
                    <?php get_template_part('templates/access-item'); ?>

                </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>


        </div>
    </div>
</section>

<?php get_footer(); ?>