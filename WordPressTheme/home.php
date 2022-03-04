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

                    <!-- pagination -->
                    <?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示 
                    ?>
                        <div class="pagination">
                            <?php
                            echo
                            paginate_links(
                                array(
                                    'end_size' => 0,
                                    'mid_size' => 1, //もし2に変更した場合、両方のファイルを修正する必要がある
                                    'prev_next' => true,
                                    'prev_text' => '<i class="fas fa-angle-left"></i>',
                                    'next_text' => '<i class="fas fa-angle-right"></i>',
                                )
                            );
                            ?>
                        </div>
                    <?php endif; ?>


                <?php else : ?>
                    <p>記事が見つかりませんでした</p>
                <?php endif; ?>
            </div>
        </section>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>