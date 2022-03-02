<?php
$id = get_post_thumbnail_id();
$img = wp_get_attachment_image_src($id, 'large');
?>
<section class="p-sub-head" style="background-image: url('<?php echo $img[0]; ?>')">
    <div class="p-sub-head__wrapper">
        <div class="p-sub-head__title c-title">
            <p class="c-title-en"><?php echo get_post_field('post_name', get_the_ID()); ?></p>
            <h1 class="c-title-ja"><?php the_title(); ?></h1>
        </div>
    </div>
</section>

<div class="p-breadcrumb l-breadcrumb">
    <div class="p-breadcrumb__inner l-inner">
        <?php
        if (function_exists('bcn_display')) :
            bcn_display();
        endif;
        ?>
    </div>
</div>