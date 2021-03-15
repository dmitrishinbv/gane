<?php
if (!function_exists('add_theme_option_sections')) :
function add_theme_option_sections()
{
    register_setting('theme_options', 'theme_options');

    $args = [
        ['theme_section_1', 'Company contacts'],
        ['theme_section_2', 'Footer texts'],
    ];

    foreach ($args as $item) {
        add_settings_section($item[0], $item[1], '', 'options_main');
    }
}

add_action('admin_init', 'add_theme_option_sections');
endif;