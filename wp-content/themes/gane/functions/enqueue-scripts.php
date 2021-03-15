<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/styles/main.css');
});

if ( ! function_exists( 'footer_scripts' ) ) :
    function footer_scripts()
    {
        wp_enqueue_script( 'main-scripts' ,get_stylesheet_directory_uri() . '/scripts/main.js' );
        wp_enqueue_script( 'menu-scripts' ,get_stylesheet_directory_uri() . '/scripts/main_menu.js' );
    }

    add_action('footer_script', 'footer_scripts');
endif;

if ( ! function_exists( 'paginate_styles' ) ) :
    function paginate_styles()
    {
        wp_enqueue_style('paginate-styles', get_template_directory_uri() . '/styles/pagination.css');
    }

    add_action('paginate_style', 'paginate_styles');
endif;