<?php
/*register main menu*/
if (!function_exists('ThemeRegisterNavMenu')) :
function ThemeRegisterNavMenu() {
    register_nav_menu( 'main_nav_menu', 'Main menu');
}

add_action( 'after_setup_theme', 'ThemeRegisterNavMenu' );
endif;