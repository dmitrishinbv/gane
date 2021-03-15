<?php
$posts = new WP_Query(array(
    'posts_per_page' => 3,
    'post_status' => 'publish',
    'orderby' => 'modified',
));

if ($posts->have_posts()): ?>
<section class="news-section">
    <div class="container d-flex flex-column">
        <h3><?php echo get_field('news_section_h3_title'); ?></h3>
        <div class="news-section__posts d-flex flex-column flex-md-row justify-content-lg-between">
            <?php while ($posts->have_posts()): $posts->the_post();
                if (get_post_thumbnail_id()) {
                    $img_filename = wp_get_attachment_image_url(get_post_thumbnail_id(), 'medium');
                }
                ?>
                <div class="post-tile">
                    <div class="post-tile__img bg-center"
                         style="background-image: url(<?php echo $img_filename; ?>)"></div>
                    <div class="post-tile__description d-flex flex-column">
                        <span><?php the_modified_date('F Y'); ?></span>
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn--link--secondary mt-auto">
                            Learn more
                        </a>
                    </div>
                </div>
            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
        <a href="<?php echo get_home_url() . '/blog'; ?>" class="btn--link">
            <?php echo get_field('news_section_link_text'); ?>
        </a>
    </div>
</section>
