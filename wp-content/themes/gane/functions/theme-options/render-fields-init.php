<?php
if (!function_exists('make_theme_option_field')) :
function make_theme_option_field ($settings_section, $title, $id, $size, $desc, $type, $placeholder,
                               $this_site_value, $this_site_link, $options_page, $options_name) {
    $url = home_url();
    if ($this_site_link && $this_site_value) {
        $url = $url.$this_site_value;
    }
    else {
        $url = false;
    }

    $field_params = array(
        'id' => $id,
        'type' => $type,
        'size' => $size,
        'placeholder' => $placeholder,
        'desc' => $desc,
        'page' => $options_page,
        'url_link' => $url,
        'options_name' => $options_name
    );

    add_settings_field("set_".$id, $title, 'theme_option_render_settings',
        $options_page, $settings_section, $field_params);
}
endif;