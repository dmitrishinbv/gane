<?php
/**
 * The template single posts
 */

get_header();
?>

    <div class="featured-head d-flex flex-column flex-lg-row justify-content-beetween align-items-lg-center">
        <div class="featured-head__img aos-init">
            <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), 'blog_image'); ?>"
                 alt="images page">
        </div>
        <div class="featured-head__desc aos-init">
            <p><b><?php the_modified_date('F Y'); ?></b></p>
            <h2><b><?php the_title(); ?></b></h2>
            <p class="summary"><?php the_excerpt(); ?></p>
        </div>

        <div class="container-text aos-init aos-animate" data-aos="fade up">
            <?php the_content(); ?>
        </div>
    </div>

<?php

get_footer(); ?>