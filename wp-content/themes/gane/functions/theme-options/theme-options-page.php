<?php
if (!function_exists('theme_options_page')) :
function theme_options_page() {
    ?>
    <div class="wrap">
    <form method="post" enctype="multipart/form-data" action="options.php">
        <?php
        settings_fields('theme_options');
        do_settings_sections('options_main');
        ?>
        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>"/>
        </p>
    </form>
    </div>
<?php }
endif;