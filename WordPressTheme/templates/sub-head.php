<?php
$id = get_post_thumbnail_id();
$img = wp_get_attachment_image_src($id, 'large');
$titleEn = get_post_field('post_name', get_the_ID());
$titleJa = get_the_title();

if (is_home() || is_archive() || is_single()) :
    $thumb_id = get_post_thumbnail_id(15);
    $img = wp_get_attachment_image_src($thumb_id, 'large');
    $titleEn = get_post_field('post_name', 15);
    $titleJa = get_post_field('post_title', 15);
elseif (is_page('thanks')) :
    $thumb_id = get_post_thumbnail_id(21);
    $img = wp_get_attachment_image_src($thumb_id, 'large');
    $titleEn = get_post_field('post_name', 21);
    $titleJa = get_post_field('post_title', 21);
    elseif (is_404()) :
        $thumb_id = get_post_thumbnail_id(11);
        $img = wp_get_attachment_image_src($thumb_id, 'large');
        $titleEn = 404;
        $titleJa = '';
endif;
?>

<section class="p-sub-head" style="background-image: url('<?php echo $img[0]; ?>')">
    <div class="p-sub-head__wrapper">
        <div class="p-sub-head__title c-title">
            <p class="c-title-en"><?php echo $titleEn; ?></p>
            <?php if(is_single()): ?>
            <p class="c-title-ja"><?php echo $titleJa; ?></p>
            <?php else: ?>
            <h1 class="c-title-ja"><?php echo $titleJa; ?></h1>
            <?php endif; ?>
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