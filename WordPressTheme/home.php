<?php get_header(); ?>

<?php get_template_part('templates/sub-head'); ?>

<div class="p-archive">
    <div class="p-archive__inner l-inner l-archive">
        <section class="p-archive__main">
            <div class="p-archive__items">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                        <?php get_template_part('templates/archive-item'); ?>

                    <?php
                    endwhile;
                    ?>




                <?php else : ?>
                    <p>記事が見つかりませんでした</p>
                <?php endif; ?>
            </div>

            <!-- pagination -->
            <?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示 
            ?>
                <div class="p-pagination">
                    <?php
                    echo
                    paginate_links(
                        array(
                            'end_size' => 0,
                            'mid_size' => 1,
                            'prev_next' => true,
                            'prev_text' => '<img src="' . get_template_directory_uri() . '/assets/img/arrow-prev.svg" alt="<">',
                            'next_text' => '<img src="' . get_template_directory_uri() . '/assets/img/arrow-next.svg" alt=">">',
                        )
                    );
                    ?>
                </div>
            <?php endif; ?>
        </section>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>