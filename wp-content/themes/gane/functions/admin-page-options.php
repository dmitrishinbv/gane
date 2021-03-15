<?php
if (!function_exists('admin_favicon')) :
function admin_favicon()
{
    $link = get_template_directory_uri() . '/images/favicon.png';
    echo '<link rel="Shortcut Icon" type="image/x-icon" href=' . $link . ' />';
}

add_action('admin_head', 'admin_favicon');
add_action('login_head', 'admin_favicon');
endif;

if (!function_exists('my_login_logo')) :
function my_login_logo()
{
    echo '<style type="text/css">#login h1 a { background: url(' . get_template_directory_uri() . '/images/logos/logo.svg) no-repeat 0 0 !important;
 max-width: 100%;
 width: 100%;
 height: 88px;
 }</style>';
}

add_action('login_head', 'my_login_logo');
endif;

if (!function_exists('edit_admin_menus')) :
function edit_admin_menus() {
    global $menu;
    $menu[5][0] = 'News';
}

add_action( 'admin_menu', 'edit_admin_menus' );
endif;

add_theme_support( 'post-thumbnails', array( 'post' ));
add_image_size( 'blog_image', 553, 470, true);