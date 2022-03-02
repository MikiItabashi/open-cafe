<section class="p-footer-access l-footer-access">
    <div class="p-footer-access__inner l-inner l-inner--slim">
        <div class="p-footer-access__title c-title">
            <h2 class="c-title-en">access</h2>
            <p class="c-title-ja">アクセス</p>
        </div>
        <div class="p-footer-access__item">

            <?php
            $args = array(
                'posts_per_page' => 1, // 表示する投稿数
                'post_type' => array('custom_shop'), // 取得する投稿タイプのスラッグ
                'order' => 'ASC', // 降順 or 昇順
                'page_id' => 71,
            );
            $my_posts = get_posts($args);
            ?>
            <?php foreach ($my_posts as $post) : setup_postdata($post); ?>

                <?php get_template_part('templates/access-item'); ?>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>


        </div>
    </div>
</section>

</main>
<footer class="p-footer">
    <div class="p-footer__inner l-inner">
        <div class="p-footer__sns p-sns">
            <ul class="p-sns__items">
                <li class="p-sns__item">
                    <a href="#" class="trans">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="p-sns__item">
                    <a href="#" class="trans">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="p-sns__item">
                    <a href="#" class="trans">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
            </ul>
        </div>
        <small class="p-footer__copyright">&copy; 2000-2021 open cafe. All Rights Reserved.</small>
    </div>
</footer>
<a href="#" class="c-to-top trans">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon_arrow-top.svg" alt="icon">
</a>
<?php wp_footer(); ?>
</body>

</html>