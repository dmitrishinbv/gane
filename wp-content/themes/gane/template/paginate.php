<?php
if (!function_exists('paginate')) :
function paginate()
{
    $base_link = '';
    $parse_url= explode('/', $_SERVER['HTTP_REFERER']);
    if (is_array($parse_url)) {
        if (strpos($_SERVER['HTTP_REFERER'], '?' )) {
            $base_link = substr($_SERVER['HTTP_REFERER'], 0, strpos($_SERVER['HTTP_REFERER'], '?' ));
        }
    }
    $query = array_pop(explode('?', $_SERVER['HTTP_REFERER']));
    $current_page = array_pop(explode('=', $query));

    global $wp_query;
    $max_num_pages = $wp_query->max_num_pages;

    echo '<ul class="pagination justify-content-center justify-content-sm-end">';
    if (intval($max_num_pages) === 1) {
        return;
    }

    $links = paginate_links(array(
        'base' => $base_link . '%_%',
        'format' => '?pagenum=%#%',
        'total' => $wp_query->max_num_pages,
        'current' => $current_page,
        'before_page_number' => '<li class="page-item">',
        'after_page_number' => '</li>',
        'prev_next' => false,
        'mid_size' => '1',
    ));

    $links = str_replace(['current', 'page-item'], ['active', 'page-item page-link'], $links);
    $links = str_replace(['current', 'page-item'], ['active', 'page-item page-link'], $links);
    echo $links;
    echo '</ul>';
}
endif;