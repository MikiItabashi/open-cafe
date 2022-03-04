<?php get_header(); ?>

<?php get_template_part('templates/sub-head'); ?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <div class="p-single">
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

                <div class="p-paging">
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
            </div>
    <?php
    endwhile;
endif;
    ?>

        </div>

        <?php get_footer(); ?>