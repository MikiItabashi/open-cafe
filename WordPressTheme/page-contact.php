<?php get_header(); ?>

<?php get_template_part('templates/sub-head'); ?>

<section class="p-contact">
    <div class="p-contact__inner l-inner l-inner--slim">
        <h2 class="p-contact__title">お問い合わせフォーム</h2>
        <p class="p-contact__text">お問い合わせ内容に応じて、項目をご選択のうえ、お気軽にお問い合わせください。</p>
        <div class="p-contact__form p-form">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>