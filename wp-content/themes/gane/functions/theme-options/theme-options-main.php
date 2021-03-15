<?php
if (!function_exists('theme_options')) :
function theme_options()
{
    add_options_page('Company contacts', 'Company contacts', 'manage_options',
        'options_main', 'theme_options_page');
}

add_action('admin_menu', 'theme_options');
endif;

get_template_part('functions/theme-options/theme-options-page');
get_template_part('functions/theme-options/theme-options-sections');
get_template_part('functions/theme-options/theme-options-fields');
