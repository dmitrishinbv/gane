<?php
$page_blog_id = 141;
do_action('paginate_style');

$current_cat_slug = '';

if (is_category()) {
    $category = get_queried_object();
    $current_cat_id = $category->term_id;
    $current_cat_slug = $category->slug;
} else {
    $current_cat_id = -1;
}
?>


<section class="all-news">
    <div class="container">
        <div class="row">
            <div class="all-news__title d-flex justify-content-between">
                <h3><?php echo get_field('news_page_h3_title'); ?></h3>
                <form action="" id="filter" method="post">
                    <div class="all-news__select d-flex align-items-center">
                        <p><?php echo get_field('categories_list_caption', $page_blog_id); ?></p>
                        <select onchange="getCatPosts(this.value, <?= $args['excluded_post_id']; ?>, true)"
                                name="category"
                                id="category"
                                class="select2-select">
                            <option value="-1"><?php echo get_field('categories_list_option_all', $page_blog_id); ?></option>
                            <?php
                            $categories = get_categories();
                            foreach ($categories as $category) {
                                $option = '<option rel="' . $category->slug . '" value="' . $category->term_id . '">';
                                $option .= $category->cat_name;
                                $option .= '</option>';
                                echo $option;
                            } ?>
                        </select>

                    </div>
                </form>
            </div>
        </div>
        <?php
        ?>

        <script>
            jQuery(document).ready(function () {
                jQuery('#filter select option[value=<?php echo $current_cat_id; ?>]').prop('selected', true);
                getCatPosts(<?= $current_cat_id . ', ' . $args['excluded_post_id']; ?>, false);
            });
        </script>