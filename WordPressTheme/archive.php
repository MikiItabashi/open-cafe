<?php get_header(); ?>

<?php get_template_part('templates/sub-head'); ?>

<div class="p-archive">
    <div class="p-archive__inner l-inner l-archive">
        <section class="p-archive__main">
            <h2 class="p-archive__heading"><?php the_archive_title(); ?></h2>
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
        </section>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>