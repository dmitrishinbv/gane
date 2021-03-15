<?php
if (!function_exists('add_theme_option_fields')) :
function add_theme_option_fields()
{
    $args = [
        ['theme_section_1', 'Location', 'company_location', '',
            'Example Level 2, 649 Bridge Road <br> Richmond, Victoria, <br> Australia', 'input', '', '', false],

        ['theme_section_1', 'Contact person', 'company_contact_person', '',
            'Example Joanna Huges', 'input', '',  '', false],

        ['theme_section_1', 'Phone number', 'company_phone', '',
            'Example (+61) 423 837 233', 'input', '',  '', false],

        ['theme_section_1', 'Company LinkedIn link', 'linkedin_link', '',
            '', 'url', '',  '', false],

        ['theme_section_1', 'Company Twitter link', 'twitter_link', '',
            '', 'url', '',  '', false],

        ['theme_section_2', 'Commercialisation title', 'commercialisation_title', '',
            'Example Gane Fuel Commercialisation', 'input', '',  '', false],

        ['theme_section_2', 'Commercialisation summary', 'commercialisation_summary', '',
            '', 'input', '',  '', false],

        ['theme_section_2', 'Copyright text', 'copyright_text', '',
            'Example © Gane Energy ', 'input', '',  '', false],
        
    ];

    foreach ($args as $field) {
        make_theme_option_field($field[0], $field[1], $field[2], $field[3], $field[4], $field[5], $field[6], $field[7], $field[8],
            'options_main', 'theme_options');
    }
}

add_action('admin_init', 'add_theme_option_fields');
endif;