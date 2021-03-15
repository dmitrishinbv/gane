<?php
$curr = get_queried_object();

$head_post = new WP_Query(array(
    'posts_per_page' => 1,
    'post_status' => 'publish',
    'orderby' => 'modified',
    'cat' => $curr->cat_ID,
));


if ($head_post->have_posts()): $head_post->the_post();
    $excluded_post_id = get_the_ID(); ?>

    <div class="featured-head d-flex flex-column flex-lg-row justify-content-beetween align-items-lg-center">
        <div class="featured-head__img aos-init">
            <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), 'blog_image'); ?>"
                 alt="images page">
        </div>
        <div class="featured-head__desc aos-init">
            <p><b><?php the_modified_date('F Y'); ?></b></p>
            <h2><b><?php the_title(); ?></b></h2>
            <p class="summary"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn--link">READ ARTICLE</a>
        </div>
    </div>

<?php
endif;
wp_reset_postdata();

get_template_part('template/page-blog/all-news-section', '', ['excluded_post_id' => $excluded_post_id]);
