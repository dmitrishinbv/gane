<?php
global $query_string;

add_action('wp_enqueue_scripts', 'jquery_filter_script');

if (!function_exists('jquery_filter_script')) :
function jquery_filter_script()
{
    global $theme_uri;

    wp_enqueue_script('filter', $theme_uri . '/scripts/filter.js', array('jquery'), time(), true);

    wp_localize_script('filter', 'filter_data',
        array(
            'ajax_url' => admin_url('admin-ajax.php')
        )
    );
}

add_action('wp_ajax_filter_function', 'filter_function');
add_action('wp_ajax_nopriv_filter_function', 'filter_function');
endif;

if (!function_exists('filter_function')) :
function filter_function()
{

    $query = array_pop(explode('?', $_SERVER['HTTP_REFERER']));
    $current_page = array_pop(explode('=', $query));
    if (!is_numeric($current_page) || $current_page == 0) {
        $current_page = 1;
    }

    if (isset($_POST['category']) && $_POST['category'] > 0) {
        $args = array(
            'posts_per_page' => 6,
            'paged' => $current_page,
            'post_type' => 'post',
            'post_status' => 'publish',
            'hide_empty' => 1,
            'orderby' => 'modified',
            'post__not_in' => [$_POST['excluded']],
            'cat' => $_POST['category'],
        );
    } else {
        $args = array(
            'posts_per_page' => 6,
            'paged' => $current_page,
            'post_type' => 'post',
            'post_status' => 'publish',
            'hide_empty' => 1,
            'post__not_in' => [$_POST['excluded']],
            'orderby' => 'modified',
        );
    }

    global $wp_query;
    $wp_query = new WP_Query($args);
    if ($wp_query->have_posts()) : ?>
        <div class="all-news__items">
        <?php  while ($wp_query->have_posts()):
            $wp_query->the_post();
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
                    <a href="<?php the_permalink(); ?>" class="btn--link--secondary mt-auto">Learn more</a>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
    <?php endif;
    ?>
    <div id="paginate" class="row">
        <nav>
            <?php paginate(); ?>
        </nav>
    </div>

    <?php
    wp_reset_postdata();
    wp_die();
}
endif;