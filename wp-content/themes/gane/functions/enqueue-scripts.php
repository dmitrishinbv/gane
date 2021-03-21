<?php
add_filter('wp_mail_content_type', function ($content_type) {
    return 'text/html';
});

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

if ( ! function_exists( 'send_mail' ) ) :
    function send_mail()
    {
        wp_enqueue_script( 'email_script' ,get_stylesheet_directory_uri() . '/scripts/send_mail.js' );
        wp_localize_script('email_script', 'ajax_contact_form',
            array(
                'url' => admin_url('admin-ajax.php'),
            )
        );
    }

    add_action('send_email', 'send_mail');
endif;

if ( ! function_exists( 'paginate_styles' ) ) :
    function paginate_styles()
    {
        wp_enqueue_style('paginate-styles', get_template_directory_uri() . '/styles/pagination.css');
    }

    add_action('paginate_style', 'paginate_styles');
endif;